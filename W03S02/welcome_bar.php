<?php
 	include_once('autoload.php');
 	$message = get_session('message');
 	destroy_session('message');
 	if(get_session('is_logged_in')){
 		echo('welcome ' .$configs['username']. '!
 <a href="logout.php">logout </a> |
 <a href="index.php">home</a><br>');
 }else{
 echo('welcome visitor!
 <a href="login.php">login</a> |
 <a href="index.php">home</a><br>');
 }

 if($message){
 echo('<b><i>' .$message. '</i></b><br>');
 }
?>