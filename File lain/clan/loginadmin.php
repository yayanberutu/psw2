<?php
	/*browseall.php*/
	
/*include functions*/

require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

$is_logged_in = get_session('logged_admin');

$admin = getAdmin();
//echo $user;
if (isset($_POST['usernameAdmin'])){
$username = get_form_post('usernameAdmin');
$password = get_form_post('passAdmin');
	if($admin['name'] == $username && $admin['password'] == $password){
	set_session('logged_admin', TRUE);
	//echo $_SESSION['is_logged_in'];
	redirect('index.php');
}else{
redirect('loginadmin.php');
}

}else{
	
}

?>
	<div align=center>
	<form method=post action="loginadmin.php?do_login=1">
		<table>
		<tr>
			<td>username admin</td>
			<td><input type=text name="usernameAdmin"></td>
		</tr>
		<tr>
			<td>password admin</td>
			<td><input type=password name="passAdmin"></td>
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