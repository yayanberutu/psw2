<?php
	$dir_name = 'C:\\xampp\\htdocs\\psw2\\w04s02';
	$dir = opendir ($dir_name);
	echo "$dir, contains:<br>";
	while (false !== ($entry=readdir($dir))){
		echo "$entry<br>";
	}
?>