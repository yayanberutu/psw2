	<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
	-->
<?php
session_start();
include "functions/user.php";
$user = new User();
$user->ambil_1($_GET['id']);



?>