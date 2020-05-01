<?php
//set up
$tinggi = 200;
$lebar = 200;
//lebar, tinggi
$image = imagecreate($lebar, $tinggi);
//memggunakan fungsi RGB (Red Green Blue), putih (255, 255, 255)
$black = imagecolorallocate($image, 0, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);

//draw image
//source, x starts, y starts, warna
imagefill($image, 0, 0, $green);
//source, x starts, y starts, x end, y end, warna
imageline($image, 0, 0, $lebar, $tinggi, $black);
//source, ukuran font, posisi x, posisi y, text, warna
imagestring($image, 4, 50, 150, "PHP is aww", $black);

//prepare output

header("content-type:image/png");
imagepng($image);

//clean up
imagedestroy($image);

?>

