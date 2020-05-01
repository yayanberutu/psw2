<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->	
<?php
	function __autoload($_class_name){
		include_once($_class_name . '.php');
	}	
	$planet1 = new Planet();
	$planet1->name = "Neptunus";
	$planet1->color = "biru";
	$planet1->diameter = 12304321;
	echo $planet1 . '<br\>';

	$bintang1 = new Bintang();
	$bintang1->penghuni = "Starville";
	$bintang1->name = "Orion";
	$bintang1->color = "merah";
	$bintang1->diameter = 1313123123123;
	echo $bintang1 . '<br/>';

?>