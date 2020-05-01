<?php
session_start();
include_once('functions.php');
if (isset($_SESSION['is_logged_in'])) {
redirect('index.php');
}
open_page('login');
?>
<form action="login_process.php" method="post">
<table border="1">
<tr>
<td>username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="3"><input type="submit" name="action"
value="login"></td>
</tr>
</table>
</form>
<?php
close_page();
?>