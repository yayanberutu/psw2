<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php
	$username = "pakkoper";
	$password = 'k0p3r';

	if (($_POST['username'] == $username) && ($_POST['password'] == $password)){
		header('location: daftarbuku.php');
	}
	else {
		echo "Username atau password yang anda input salah<br>";
		echo "<a href = index.php> kembali ke menu login </a>";
	}
?>