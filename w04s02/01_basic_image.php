<?php
	//create the canvas
	$myImage = ImageCreate (150,150);

	//set up some colors
	$black = ImageColorAllocate ($myImage, 0,0,0);
	$white = ImageColorAllocate ($myImage, 255,255,255);
	$red = ImageColorAllocate($myImage, 255, 0, 0);
	$green = ImageColorAllocate($myImage,0,255,0);
	$blue = ImageColorAllocate($myImage, 0,0,255);
	
	//draw some rectangles
	ImageRectangle($myImage, 15,15,55,85, $red);
	ImageRectangle($myImage, 55,85,125,135, $white);

	//output the image to the browser
	header ("Content-type:image/gif");
	ImageGif ($myImage);

	//clean up after yourself
	ImageDestroy($myImage);

?>