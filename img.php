<?php
$img=imagecreate(500,500);
$bgcolor=imagecolorallocate($img,255,0,0);
$text_color=imagecolorallocate($img,100,20,25);
$text_color2=imagecolorallocate($img,0,20,255);
$color_poly=imagecolorallocate($img,0,200,255);
$color_eclips=imagecolorallocate($img,0,200,255);


imagestring($img, 3, 50, 100, "GeeksforGeeks", $text_color2);

imagerectangle($img, 50,100, 150, 150, $text_color);
imagefilledrectangle($img, 50,100, 150, 150, $text_color);

imagepolygon($img, array(
        0,   0,
        100, 200,
        300, 200,
	300,100,
	200,200
	
    ),
    5,
    $color_poly);

imagefilledpolygon($img, array(
        0,   0,
        100, 200,
        300, 200,
	300,100,
	200,200
	
    ),
    5,
    $color_poly);

imageellipse($img, 1200, 150, 300, 200, $color_eclips);
imagefilledellipse($img, 1200, 155, 300, 200, $color_eclips);


header("Content-Type: image/png");
$rotate = imagerotate($img, 180, 0);

imagepng($rotate);
imagedestroy($img);

?>
