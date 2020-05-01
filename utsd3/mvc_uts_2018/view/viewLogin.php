<?php
require_once(dirname(__FILE__).'/commons/header.php');
?>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $main = new UserController();
        $main->login();
    }
?>
<div align=center>
	<form method=post action="">
		<table>
		<tr>
			<td>username </td>
			<td><input type=text name="username"></td>
		</tr>
		<tr>
			<td>password </td>
			<td><input type=password name="password"></td>
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