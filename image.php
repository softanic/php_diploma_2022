<?php

$image= imagecreate(400, 400);
$image= imagecreatefrompng($filename);

$bg= imagecolorallocate($image, 255, 0, 0);
$text_color= imagecolorallocate($image, 0, 0, 255);
imagestring($image, 5 , 100, 100, "welcome", $text_color);
imagerectangle($image, 150, 150, 300, 250, $text_color);
imagefilledrectangle($image, 150, 150, 300, 250, $text_color);
imageellipse($image, 130, 120, 100, 150, $text_color);
imagefilledellipse($image, 130, 120, 100, 150, $text_color);
imagepolygon($image, [0,0,10,50,100,50], 3, $text_color);
imagefilledpolygon($image, [0,0,10,50,100,50], 3, $text_color);

$img=imagerotate($image, 60, 1);
$i=imagescale($image, 200,400);
header("content-type:image/png");
imagepng($i);
imagedestroy($image);
