<?php
header("Content-type: image/png");
$string = $_GET['text'];
$im     = imagecreatefrompng("button.png");
$orange = imagecolorallocate($im, 60, 87, 156);
$px     =(imagesx($im)/*이미지 폭*/ - 7.5/*글자 크기*/ * strlen($string)) / 2;
imagestring($im, 4/*font*/, $px/*x축*/, 9/*y축*/, $string, $orange);
imagepng($im);
imagedestory($im);
?>