<?php
	header("content-type: image/jpg");
	$gambar = imagecreate(500, 500);

	//alokasi warna
	$hitam = imagecolorallocate($gambar, 0, 0, 0);
	$merah = imagecolorallocate($gambar, 255, 0, 0);
	$putih = imagecolorallocate($gambar, 255, 255, 255);
	//buat bentuk
	// imagearc($gambar, 100, 100, 100, 100, 0, 360, $merah);
	imagerectangle($gambar, 0, 0, 100, 200, $merah);
	imagefilledrectangle($gambar, 0, 0, 100, 100, $putih);
	imagegif($gambar);

	imagedestroy($gambar);
?>