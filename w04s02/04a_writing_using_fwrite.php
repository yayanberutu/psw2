<?php
	$file_name = 'new_students.txt';
	$mode = 'w+';
	$file = fopen($file_name, $mode);
	$content = '11113212#Wiro Sableng#32TI1';
	fwrite($file, $content);
	$closed = fclose ($file);

?>