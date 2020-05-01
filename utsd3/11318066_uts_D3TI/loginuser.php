<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

if (isset($_POST['usernameUser'])){
	
$user = getUser($_POST['usernameUser']);
$datapartai = mysqli_fetch_array($user, MYSQLI_ASSOC);
$username = get_form_post('usernameUser');
$password = get_form_post('passUser');
	if($datapartai['name'] == $username && $datapartai['password'] == $password){
	$_SESSION['logged_'.$username] = TRUE;
	$_SESSION['nameuser'] = $username;
		
	redirect('index.php');
}else{ 
redirect('loginuser.php');
}
}else{
	}

?>
	<div align=center>
	<form method=post action="loginuser.php">
		<table>
		<tr>
			<td>username </td>
			<td><input type=text name="usernameUser"></td>
		</tr>
		<tr>
			<td>password </td>
			<td><input type=password name="passUser"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type=submit value=login></td>
		</tr>
		</table>
	</form>
	</div>
<?php

require_once(dirname(__FILE__).'/commons/footer.php');
?>