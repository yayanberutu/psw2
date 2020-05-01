
<?php
require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');
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