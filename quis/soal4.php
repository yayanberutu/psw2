<?php
	header ("Content-type:image/gif");
	$grafik = imagecreate(200, 600);
	$biru = ImageColorAllocate($grafik, 0,0,255);
	$hitam = ImageColorAllocate ($grafik, 0,0,0);
	$counter;
	$y;
	for ($counter=0 ; $counter <200; $counter++){
		$x = $counter+1;
		$y = ($x * 3);
		imageline($grafik, 0, 0, $x, $y, $hitam);
	}
	ImageGif ($grafik);
	imagedestroy($grafik);
	
?>