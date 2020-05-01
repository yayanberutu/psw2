<?php
	session_start();
	$counter = isset($_SESSION['counter'])? $_SESSION['counter'] : 0;
	$_SESSION['counter'] = ++$counter;

	echo "anda sudah mengunjungi sebanyak $counter <br/>";
	echo "<a href='destroy_s.php'>destroy</a>";

?>