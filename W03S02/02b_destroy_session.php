<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	session_start();
	$counter = isset($_SESSION['counter'])? $_SESSION['counter'] : 0 ;
	unset($_SESSION['counter']);
	$destroyed = !isset($_SESSION['counter']);
?>
session destroyed : <?php echo ($destroyed)? 'ok' : 'failed'; ?> .<br>
current time : <?php echo (date ('Y/m/d H:i:s')); ?><br>
<a href="02a_create_session.php">create session</a>