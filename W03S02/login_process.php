<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	include_once('autoload.php');

	$is_logged_in = get_session('is_logged_in');
	if (!$is_logged_in){
		$username = get_form_post('username');
		$password = get_form_post('password');

		if ($configs['username'] == $username && $configs['password']==$password){
			set_session('is_logged_in', TRUE);
		}
		else {
			redirect('login.php');
		}

	}
	redirect ($configs['main_page']);
?>