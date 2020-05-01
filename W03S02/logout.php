<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->

<?php
	include_once('autoload.php');
	$is_logged_in = get_session('is_logged_in');
	if($is_logged_in){
		destroy_session('is_logged_in');
	}
	redirect($configs['main_page']);
?>