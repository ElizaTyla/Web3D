/*
 * Copyright 2011-2013 Blender Foundation
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License
 */

CCL_NAMESPACE_BEGIN

ccl_device float relative_luminance(float3 rgb)
{
	const float3 weights = make_float3(0.2126f, 0.7152f, 0.0722f);
	return dot(rgb, weights);
}

ccl_device float3 film_map_linear_scale(float3 irradiance, float scale)
{
	irradiance.x *= scale;
	irradiance.y *= scale;
	irradiance.z *= scale;
	return irradiance;
}

ccl_device float3 film_map_reinhard_photographic(float3 irradiance, float adaption_luminance, float key, float white_burnout)
{
	const float scale = key/adaption_luminance;
	const float3 scaled_irradiance = irradiance * scale;
	const float squared_white_burnout = white_burnout*white_burnout;
	const float white_burnout_factor = (white_burnout > 0) ? 1.f+(relative_luminance(scaled_irradiance)/squared_white_burnout) : 1.f;
	const float3 tone_mapped_irradiance = scaled_irradiance/(make_float3(1,1,1)+scaled_irradiance) * white_burnout_factor;

	return tone_mapped_irradiance;
}

ccl_device float3 film_map_reinhard_photoreceptor(float3 irradiance, float adaption_luminance, float key, float white_burnout)
{
	const float m = .3f + .7f*powf(key, 1.4f);
	const float f = 1.f;
	const float sigma = powf(f*adaption_luminance, m);
	const float3 tone_mapped_irradiance = irradiance/(irradiance + make_float3(sigma,sigma,sigma));

	return tone_mapped_irradiance;
}


ccl_device float4 film_map(KernelGlobals *kg, float4 irradiance, float scale)
{
	float exposure = kernel_data.film.exposure;
	float4 result = irradiance*scale;

	float3 tone_mapped_result = make_float3(result.x, result.y, result.z);
	if (exposure < 0.f) {
		const float adapt_luminance = -exposure;
		const float key = .18f;
		const float white_burnout = adapt_luminance * 10.f;
		//tone_mapped_result = film_map_reinhard_photographic(tone_mapped_result, adapt_luminance, key, white_burnout);
		tone_mapped_result = film_map_reinhard_photoreceptor(tone_mapped_result, adapt_luminance, key, white_burnout);
	}
	else {
		tone_mapped_result = film_map_linear_scale(tone_mapped_result, exposure);
	}
	result = make_float4(tone_mapped_result.x, tone_mapped_result.y, tone_mapped_result.z, result.w);

	/* conversion to srgb */
	result.x = color_scene_linear_to_srgb(result.x);
	result.y = color_scene_linear_to_srgb(result.y);
	result.z = color_scene_linear_to_srgb(result.z);

	/* clamp since alpha might be > 1.0 due to russian roulette */
	result.w = clamp(result.w, 0.0f, 1.0f);

	return result;
}

ccl_device uchar4 film_float_to_byte(float4 color)
{
	uchar4 result;

	/* simple float to byte conversion */
	result.x = (uchar)clamp(color.x*255.0f, 0.0f, 255.0f);
	result.y = (uchar)clamp(color.y*255.0f, 0.0f, 255.0f);
	result.z = (uchar)clamp(color.z*255.0f, 0.0f, 255.0f);
	result.w = (uchar)clamp(color.w*255.0f, 0.0f, 255.0f);

	return result;
}

ccl_device void kernel_film_convert_to_byte(KernelGlobals *kg,
	ccl_global uchar4 *rgba, ccl_global float *buffer,
	float sample_scale, int x, int y, int offset, int stride)
{
	/* buffer offset */
	int index = offset + x + y*stride;

	rgba += index;
	buffer += index*kernel_data.film.pass_stride;

	/* map colors */
	float4 irradiance = *((ccl_global float4*)buffer);
	float4 float_result = film_map(kg, irradiance, sample_scale);
	uchar4 byte_result = film_float_to_byte(float_result);

	*rgba = byte_result;
}

ccl_device void kernel_film_convert_to_half_float(KernelGlobals *kg,
	ccl_global uchar4 *rgba, ccl_global float *buffer,
	float sample_scale, int x, int y, int offset, int stride)
{
	/* buffer offset */
	int index = offset + x + y*stride;

	ccl_global float4 *in = (ccl_global float4*)(buffer + index*kernel_data.film.pass_stride);
	ccl_global half *out = (ccl_global half*)rgba + index*4;

	float exposure = kernel_data.film.exposure;

	float4 rgba_in = *in;

	if(exposure != 1.0f) {
		rgba_in.x *= exposure;
		rgba_in.y *= exposure;
		rgba_in.z *= exposure;
	}

	float4_store_half(out, rgba_in, sample_scale);
}

CCL_NAMESPACE_END

