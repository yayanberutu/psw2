<?php  session_start();
	include_once('functions.php');
	// only if the session exists  if
	if(isset($_SESSION['is_logged_in'])){
		$_SESSION['is_logged_in'] = FALSE;
	}
	redirect('index.php'); 
?>