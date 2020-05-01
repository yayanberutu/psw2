<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
//include all required files
include_once('Car.php');
include_once('Tester.php');
//instance the scenario simulator, and make it runs.
//to enforce the pure OO development
//by avoiding procedural use at the entry point.
$tester = new Tester();
$tester->start();
?>