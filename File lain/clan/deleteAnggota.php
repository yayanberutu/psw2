<?php
$id = $_GET['id'];
// echo "$id";

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
	$sql = "DELETE FROM anggotapartai where id = $id";

	if (mysqli_query($conn, $sql)){
		// echo "Hapus Sukses";
		header('location: index.php');
	}
	else {
		echo "tidak bisa menghapus anggota";
	}

	mysqli_close($conn);


?>