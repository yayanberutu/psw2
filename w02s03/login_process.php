<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php
	$username = "pak_koper";
	$password = "k0p3r";
	
	if ($_POST['username'] == $username && $_POST['password'] == $password){
		echo ("Selamat! Anda berhasil login");
		?>
		<a href ="C_066.php">Lihat Daftar Buku</a>
		<?php
	}
	else {
		echo ("Maaf Password anda salah!");
	?>	
	
	<a href="index.html">Kembali ke menu login</a>
	<?php
	}
?>