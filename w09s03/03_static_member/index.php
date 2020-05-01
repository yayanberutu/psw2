<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
	function __autoload($_class_name){
		include_once($_class_name . '.php');
	}	
	
	$tester = new Tester();
	$tester->start();
?>