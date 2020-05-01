<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php
	$username = "pak_koper@gmail.com";
	$password = "pak_koper_pass";
	
	if ($_POST['username'] == $username && $_POST['password'] == $password){
		header('Location: view_book.php');
	}
	else {
		echo ("Maaf Password anda salah!");
	?>	
	
	<a href="index.php">Kembali ke menu login</a>
	<?php
	}
?>