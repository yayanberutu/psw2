<?php
	// we accept only JPG-typed file
	if($_FILES['uploaded_file']['type'] != 'image/jpeg'){
		header("location: 06a_file_upload.php");
	}

	//set the content-type to JPG
	header ("content-type:image/jpg");

	//set the thumb widht size
	$thumb_width = 100;

	//create an image resource from an 'existing' image

	$ori_image = imagecreatefromjpeg ($_FILES ['uploaded_file']['tmp_name']);

	//find out it's size to get the scale

	//this is good to create a proper-sized thumb image

	$ori_width = imagesx ($ori_image);
	$ori_height = imagesy ($ori_image);

	$scale = $ori_height/$ori_width;

	//create a new true color image

	$thumb_image = imagecreatetruecolor($thumb_width, $scale * $thumb_width);
	imagecopyresized($thumb_image, $ori_width, 0, 0, 0, 0, $thumb_width, $scale * $thumb_width, $ori_width, $ori_height);

	//output the image
	imagejpeg($thumb_image);

	//clean up
	imagedestroy($thumb_image);
	imagedestroy($ori_image);

?>