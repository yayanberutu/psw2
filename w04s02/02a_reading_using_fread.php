<?php
	$file_name = 'student.txt';
	$mode = 'r';
	$file = fopen ($file_name, $mode);
	$file_size = filesize($file_name);
	$content = fread($file, $file_size);
	echo ($content);
	$closed = fclose ($file);



?>