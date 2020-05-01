<?php
	$id = $_POST['id'];
	$id_partai = $_POST['id_partai'];
	$name = $_POST['name'];
	$tanggal = $_POST['date_time'];	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "clan";

	//create connection
	$conn = mysqli_connect ($servername, $username, $password, $dbname);
	//cek koneksi
	if (!$conn){
		die("connection failed: " . mysqli_connect_error());
	}

	//simpan sintaks sql
	$sql = "INSERT INTO anggotapartai(id, id_partai, name) Values($id, $id_partai, $name)";

	if (mysqli_query($conn, $sql)){
		// echo "Hapus Sukses";
		header('location: index.php');
	}
	else {
		echo "tidak bisa menambah anggota";
	}

	mysqli_close($conn);
?>