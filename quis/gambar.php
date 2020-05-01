<?php

$image = imagecreate(200, 600);
$biru = ImageColorAllocate($image, 0,0,255);
$hitam = ImageColorAllocate ($image, 0,0,0);

ImageGif ($image);
imagedestroy($image);
?>