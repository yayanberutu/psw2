<?php
	$file_name = 'student.txt';

	$content = file($file_name);
	$content = file_get_contents($file_name);
	echo ('<pre>');
	print_r ($content);
	// echo $content;
	
?>