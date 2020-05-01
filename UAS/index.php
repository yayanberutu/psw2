	<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
	-->
	<?php
	session_start();
	include_once 'functions/user.php';
	$user = new User();
	echo "<h1>Selamat Datang Bapak" . "<br></h1>";
	echo "User Group: " . $_SESSION['role'] . "<br><br>";
?>

<?php

	if (!$user->get_session()){
	    header("location:login.php");
	}

	if(isset($_GET['q'])){
		if ($_GET['q'] == 'logout'){
		    $user->user_logout();
		    header("location:login.php");
		}

	}

	if($user->get_session()){
		if($_SESSION['role'] == "job_seeker"){
			echo "Selamat datang Pencari Kerja";
			include "job_seeker.php";
		}
		if($_SESSION['role'] == 'hr'){
			include "hr_index.php";
		}
		else {	
		}

	}

	if(isset($_GET['action'])){
		if($_GET['action'] == 'delete'){
			$user->hapus_job($_GET['id']);
		}
	}

?>
<br>
<a href="?q=logout">Logout</a>
