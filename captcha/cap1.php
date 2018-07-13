<?php

$a="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$str=str_shuffle ($a);
$str=substr($str,0,6);

$img=imagecreate(200, 60);
imagecolorallocate($img, 205, 205, 205);
$color=imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 28, 0, 14, 38, $color, "ThirstyScriptExtraBoldDemo.otf", $str);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img)

?>