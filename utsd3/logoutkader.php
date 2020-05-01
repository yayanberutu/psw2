<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php

require_once(dirname(__FILE__).'/functions/database.php');

$logged_kader = get_session('logged_kader');
if($logged_kader){
destroy_session('logged_kader');
}
redirect('index.php');
?>