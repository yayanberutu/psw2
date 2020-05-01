<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	function get_title($_title){
		return ('<title>' .$_title. '</title>');
	}
	function open_page ($_title){
		echo ('<html><head>' .get_title($_title). '</head></html><body>');
	}
	function close_page(){
		echo('</body></html>');
	}
	function get_session($_key){
		$value = (isset ($_SESSION[$_key]))? $_SESSION[$_key] : null;
		return($value);
	}
	function set_session($_key, $_value){
		$_SESSION[$_key] = $_value;
	}
	function destroy_session ($_key){
		unset($_SESSION[$_key]);
	}
	function redirect ($_location){
		header('Location:' .$_location);
	}
	function get_form_post($_key){
		$value = (isset ($_POST[$_key]))? $_POST[$_key] : null;
		return ($value);
	}
	function get_form_get($_key){
		$value = (isset ($_GET[$_key]))?$_GET[$_key]:null;
		return ($value);
	}
	function validate(){
		
	}


?>