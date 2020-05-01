<?php
// 	$filename = 'motor.txt';
// 	$mode = 'r';
// 	$file = fopen($filename, $mode);
	$content = file_get_contents("motor.csv");
	echo("<pre>");
	print_r ($content);
?>
