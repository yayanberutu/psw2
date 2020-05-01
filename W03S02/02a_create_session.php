<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	session_start();
	$counter = isset($_SESSION['counter'])? $_SESSION['counter'] : 0;
	$_SESSION['counter'] = ++$counter;
?>
you have visited this page <?php echo($counter); ?> time(s). <br>
current time : <?php echo (date ('Y/m/d H:i:s')); ?><br>
<a href="02a_create_session.php">reload</a>&nbsp;
<a href="02b_destroy_session.php">destroy session</a>