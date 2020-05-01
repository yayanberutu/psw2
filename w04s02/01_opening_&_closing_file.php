<?php
	$file_name = 'student.txt';
	$mode = 'r';
	$file = fopen($file_name, $mode);
	echo (($file)? 'opened<br>' : 'unable to open<br>');
	$closed = fclose($file);
	echo(($closed)? 'closed <br>' : 'unable to close<br>');
?>