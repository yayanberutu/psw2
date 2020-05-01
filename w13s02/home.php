<?php
 
session_start();
include_once 'includes/functions.php';
$user = new User();
$uid = $_SESSION['id'];
$nama = $_SESSION['nama'];
echo  $uid . "<br>" . $nama . "<br>" . $_SESSION['role'] . "<br>";
// $user->get_fullname($uid);
$user->lihat_mahasiswa();
?>

<a href="?q=cetak">Cetak Daftar mahasiswa</a>
<a href="blob.php">Upload Foto</a>
<?php

if (!$user->get_session())
{
	echo "tidak masuk";
    header("location:login.php");
}

if(isset($_GET['q'])){
	if ($_GET['q'] == 'logout'){
	    $user->user_logout();
	    header("location:login.php");
	}
	if ($_GET['q'] == 'cetak'){
	    $user->cetak_pdf();
	}
}
?>
<!-- -------HTML------- -->
<br>
<a href="?q=logout">Logout</a>