<?php
	$username = "doni";
	$password = 12345;

	if (($_POST['username'] == $username) && ($_POST['password'] == $password)){
		header('location: soal1.php');
	}
	else {
		echo "Username atau password yang anda input salah<br>";
		echo "<a href = soal3login.php> kembali ke menu login </a>";
	}
?>