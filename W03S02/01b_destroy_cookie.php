<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	$counter = isset ($_COOKIE['counter'])? $_COOKIE['counter']:0;
	$destroyed = setcookie('counter');
?>
cookie destroyed: <?php echo ($destroyed)? 'ok' : 'failed';?>.<br>
current time: <?php echo (date('Y/m/d H:i:s')); ?><br>
<a href="01a_create_cookie.php">create cookie</a>