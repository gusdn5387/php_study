<?php
$stamp = imagecreatefrompng("watermark.png");
$im    = imagecreatefrompng("original.png");

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right/*워터마크 x 좌표*/, imagesy($im) - $sy - $marge_bottom, 0/*워터마크 이미지 첫 x축 */, 0, imagesx($stamp)/*워터마크 이미지 막 x축*/, imagesy($stamp));

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>