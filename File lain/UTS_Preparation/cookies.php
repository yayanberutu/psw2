<?php
	// $nama_cookie = "klik";
	$counter = isset($_COOKIE['counter'])? $_COOKIE['counter'] : 0 ;
	setcookie('counter', ++$counter, time()+3);

	echo "anda sudah refresh sebanyak $counter<br/>";
	echo "<a href='destroy_c.php'>destroy cookie</a>";
?>