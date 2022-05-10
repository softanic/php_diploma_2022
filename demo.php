<?php

$image=$img= imagecreate(500, 500);
$bgcolor= imagecolorallocate($img, 200, 200, 200);
$text_color= imagecolorallocate($image, 255, 0, 0);
imagestring($image, 5, 100, 100, "welcome", $text_color);
imagepolygon($image, [100,100,200,100,500,300], 3, $text_color);
imagerectangle($image, 100, 100, 250, 250, $text_color);
imageellipse($image, 250, 250, 150, 150, $text_color);

$im=imagerotate($image, 60, 0);

$im=imagescale($image, 300,300);


//$font_width = ImageFontWidth(2); 
header("content-type:image/png");
imagepng($im);

