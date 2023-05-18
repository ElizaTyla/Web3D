<?php
$dir ='../assets/images/imggallery';
$imgpath ='./assets/images/imggallery';
$ext = array('png','jpg','jpeg','gif');
$file = array();
$resp = "";
$dirhand = opendir($dir);

while($f = readdir($dirhand))
{
	if (substr($f, 0, 1) != '.')
	{
		$e = strtolower(array_pop(explode('.', $f)));
		if(in_array($e, $ext)) {$resp .= $imgpath .'/'.$f.'~';}
	}
}
closedir($dirhand);
echo substr_replace($resp,"",-1);
?>