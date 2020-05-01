<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php
	$harga;

	if ($_POST['harga'] < 10 ){
		echo "buku anda kategori low";
	}
	else if($_POST['harga']>=10 && $_POST['harga'] <=20){
		echo "buku anda kategori moderate";
	}
	else if ($_POST['harga'] > 20) {
		echo "buku anda kategori high";
		
	}
	echo ('<br>');


	if (($_POST['uang'] - $_POST['harga']) >= (0.5 * $_POST['uang'] )){
		echo "Recomended";
	}
	else echo "Tidak Recomendded";
?>

