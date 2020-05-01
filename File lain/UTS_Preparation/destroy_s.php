<?php
	session_start();
	session_unset($_SESSION['counter']);
	header("location: session.php");

?>