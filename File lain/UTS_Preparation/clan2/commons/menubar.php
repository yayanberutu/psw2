<?php

//session_start();

?>

<table width="200">
<tr>
	<td class="menu_item"> <a href="index.php">Home</a></td>
</tr>

	
	<!--tambahkan fungsi untuk mengecek session-->
	<?php
	//$user = getUser();
	if(get_session('logged_admin')){
echo( '<tr><td class="menu_item">Admin <a href="logoutadmin.php"> logout admin </a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>
');
}else if(get_session('logged_partai')){
echo( '<tr><td class="menu_item">'.$_SESSION['namepartai'].' <a href="logoutpartai.php"> logout partai </a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>');
}else if(get_session('logged_user')){
echo( '<tr><td class="menu_item"><a href="logoutuser.php">Logout User</a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>');
}else{
echo(
'<tr><td class="menu_item"><a href="loginadmin.php"> Login sebagai Admin </a></td></tr>
<tr><td class="menu_item"><a href="loginpartai.php">Login sebagai Pemilik Partai</a></td></tr>
<tr><td class="menu_item"><a href="loginuser.php">Masuk Sebagai User</a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>
');
}

	?>	
	</td>
</tr>

</table>