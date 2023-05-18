$(document).ready(function(){
	 $.getJSON('./db/db.json', function(jsonObj) {
		$('#MainImageArea').html('<div id="MainImageArea" style="background-image: url(assets/images/main_3D.jpg);"><div id="MainText" class="col-xs-12 col-sm-4"><h2><b>' + jsonObj.pageTextData[0].title + '</b><h2><h3><b>' + jsonObj.pageTextData[0].subTitle + '</b></h3><p>' + jsonObj.pageTextData[0].description + '</p></div>');
		
		$('#homeCocacolaImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[1].image + ' alt="CocaCola">');
		$('#homeCocacolaTitle').html('<h3 class="cardTitle"><b>' + jsonObj.pageTextData[1].title + '</b><h2>');
		$('#homeCocacolaSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[1].subTitle + '</b></h4>');
		$('#homeCocacolaDescription').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

		$('#homeSpriteImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[2].image + ' alt="Sprite">');
		$('#homeSpriteTitle').html('<h3 class="cardTitle"><b>' + jsonObj.pageTextData[2].title + '</b><h2>');
		$('#homeSpriteSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[2].subTitle + '</b></43>');
		$('#homeSpriteDescription').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

		$('#homeDrPepperImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[3].image + ' alt="DrPepper">');
		$('#homeDrPepperTitle').html('<h3 class="cardTitle"><b>' + jsonObj.pageTextData[3].title + '</b><h2>');
		$('#homeDrPepperSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[3].subTitle + '</b></h4>');
		$('#homeDrPepperDescription').html('<p>' + jsonObj.pageTextData[3].description + '</p>');		
	  
	    $('#cocacolaImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[1].image + ' alt="CocaCola">');
		$('#cocacolaModelTitle').html('<a class="nav-link active"><span class="navbar_text_nolink">' + jsonObj.pageTextData[1].x3dModelTitle + '</span></a>');
		$('#cocacolaModel').html('<div class="model3D"><x3d id="x3dElementCoke" showStat="false" showLog="false" style="width:60%; height:60%; border:0; margin:0; padding:0;"><scene><inline nameSpaceName="cocacolaModelX3D" mapDEFToID="true"  url="' + jsonObj.pageTextData[1].x3dModel + '"></inline></scene></x3d></div>');
		$('#cocacolaModelSubTitle').html('<a class="nav-link active"><span class="navbar_dropdown_text">' + jsonObj.pageTextData[1].x3dCreationMethod + '</span></a>');
		$('#cocacolaTitle').html('<h1 class="cardTitle"><b>' + jsonObj.pageTextData[1].title + '</b><h1>');
		$('#cocacolaSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[1].subTitle + '</b></h4>');
		$('#cocacolaDescription').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
	    
		$('#spriteImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[2].image + ' alt="Sprite">');
		$('#spriteModelTitle').html('<a class="nav-link active"><span class="navbar_text_nolink">' + jsonObj.pageTextData[2].x3dModelTitle + '</span></a>');
		$('#spriteModelSubTitle').html('<a class="nav-link active"><span class="navbar_dropdown_text">' + jsonObj.pageTextData[2].x3dCreationMethod + '</span></a>');
		$('#spriteModel').html('<div class="model3D"><x3d id="x3dElementSprite" showStat="false" showLog="false" style="width:60%; height:60%; border:0; margin:0; padding:0;"><scene><inline nameSpaceName="spriteModelX3D" mapDEFToID="true" url="' + jsonObj.pageTextData[2].x3dModel + '"></inline></scene></x3d></div>');
		$('#spriteTitle').html('<h1 class="cardTitle"><b>' + jsonObj.pageTextData[2].title + '</b><h1>');
		$('#spriteSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[2].subTitle + '</b></h4>');
		$('#spriteDescription').html('<p>' + jsonObj.pageTextData[2].description + '</p>');
		
	    $('#drpepperImage').html('<img class="d-block w-100" src=' + jsonObj.pageTextData[3].image + ' alt="DrPepper">');
		$('#drpepperModelTitle').html('<a class="nav-link active"><span class="navbar_text_nolink">' + jsonObj.pageTextData[3].x3dModelTitle + '</span></a>');
		$('#drpepperModelSubTitle').html('<a class="nav-link active"><span class="navbar_dropdown_text">' + jsonObj.pageTextData[3].x3dCreationMethod + '</span></a>');
		$('#drpepperModel').html('<div class="model3D"><x3d id="x3dElementDrPepper" showStat="false" showLog="false" style="width:60%; height:60%; border:0; margin:0; padding:0;"><scene><inline nameSpaceName="drpepperModelX3D" mapDEFToID="true" url="' + jsonObj.pageTextData[3].x3dModel + '"></inline></scene></x3d></div>');
		$('#drpepperTitle').html('<h1 class="cardTitle"><b>' + jsonObj.pageTextData[3].title + '</b><h1>');
		$('#drpepperSubTitle').html('<h4 class="cardTitle"><b>' + jsonObj.pageTextData[3].subTitle + '</b></h4>');
		$('#drpepperDescription').html('<p>' + jsonObj.pageTextData[3].description + '</p>');
	 });
});








