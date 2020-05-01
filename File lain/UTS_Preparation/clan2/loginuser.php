<?php
	/*browseall.php*/
	
/*include functions*/

require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

$is_logged_in = get_session('logged_user');


//echo $pempartai['name'];
//print_r($pempartai2);
if (isset($_POST['usernameUser'])){
	
$user = getUser($_POST['usernameUser']);
$datapartai = mysqli_fetch_array($user, MYSQLI_ASSOC);
//print_r($datapartai);
$username = get_form_post('usernameUser');
$password = get_form_post('passUser');
//echo 'yeah eee';
	if($datapartai['name'] == $username && $datapartai['password'] == $password){
	set_session('logged_user', TRUE);
	set_session('nameuser', $_POST['usernameUser']);
		
	redirect('index.php');
}else{
redirect('loginuser.php');
}
}else{
	//echo 'yeah';
}

?>
	<div align=center>
	<form method=post action="loginuser.php">
		<table>
		<tr>
			<td>username partai</td>
			<td><input type=text name="usernameUser"></td>
		</tr>
		<tr>
			<td>password partai</td>
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