<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->

<?php
	$lifetime = time() + 120; //2 menit
	$counter = isset($_COOKIE['counter'])? $_COOKIE['counter'] : 0;
	setcookie('counter', ++$counter, $lifetime);

?>
You have visited this page <?php echo ($counter);?> time(s). <br>
current time: <?php echo (date('Y/m/d H:i:s')); ?>

<html>

<body>

</body>
</html><br>
<a href="01a_create_cookie.php">reload</a>&nbsp;<br>
<a href="01b_destroy_cookie.php">destroy cookie</a>