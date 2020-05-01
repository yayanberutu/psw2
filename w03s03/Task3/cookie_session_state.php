<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->

<?php
	echo ("Selamat Datang ");
	setcookie('counter');
	$lifetime = time() + 3; //2 menit
	$counter = isset($_COOKIE['counter'])? $_COOKIE['counter'] : 0;
	setcookie('counter', ++$counter, $lifetime);
	if ($counter ==3){
		header('Location: login.php');
		unset($_SESSION['counter']);
	}
?>
You have visited this page <?php echo ($counter);?> time(s). <br>
current time: <?php echo (date('Y/m/d H:i:s')); ?>

<html>

<body>

</body>
</html><br>
<a href="cookie_session_state.php">reload</a>&nbsp;<br>
<!-- <a href="01b_destroy_cookie.php">destroy cookie</a> -->