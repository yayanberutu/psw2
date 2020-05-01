<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php
	//create the canvas
	$myImage = ImageCreate (150,150);

	//set up some colors
	$black = ImageColorAllocate($myImage, 0,0,0);
	$white = ImageColorAllocate($myImage, 255,255,255);
	$red = ImageColorAllocate($myImage, 255,0,0);
	$green = ImageColorAllocate($myImage, 0,255,0);
	$blue = ImageColorAllocate($myImage, 0,0,255);

	//draw some rectangles
	ImageFilledRectangle ($myImage, 15,15,55,85, $red);
	ImageFilledRectangle ($myImage, 55,85,125,135, $white);

	//output the image to the browser
	header("content-type:image/jpg");
	ImageJpeg($myImage);

	//clean up after yourself
	imagedestroy($myImage);
?>