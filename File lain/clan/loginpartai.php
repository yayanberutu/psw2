<?php
	/*browseall.php*/
	
/*include functions*/

require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

$is_logged_in = get_session('logged_partai');


//echo $pempartai['name'];
//print_r($pempartai2);
if (isset($_POST['usernamePartai'])){
	
$pempartai = getPemilikPartai($_POST['usernamePartai']);
$datapartai = mysqli_fetch_array($pempartai, MYSQLI_ASSOC);
print_r($datapartai);
$username = get_form_post('usernamePartai');
$password = get_form_post('passPartai');
//echo 'yeah eee';
	if($datapartai['name'] == $username && $datapartai['password'] == $password){
	set_session('logged_partai', TRUE);
	set_session('namepartai', $_POST['usernamePartai']);
	
	redirect('index.php');
}else{
redirect('loginpartai.php');
}
}else{
	//echo 'yeah';
}

?>
	<div align=center>
	<form method=post action="loginpartai.php?add=usernamePartai">
		<table>
		<tr>
			<td>username partai</td>
			<td><input type=text name="usernamePartai"></td>
		</tr>
		<tr>
			<td>password partai</td>
			<td><input type=password name="passPartai"></td>
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