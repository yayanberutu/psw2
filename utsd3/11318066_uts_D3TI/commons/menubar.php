<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<table width="200">
<tr>
	<td class="menu_item"> <a href="index.php">Home</a></td>
</tr>

	<?php
	if(get_session('logged_admin')){
echo( '<tr><td class="menu_item">Admin <a href="logoutadmin.php"> logout admin </a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>
');
}else if(get_session('logged_kader')){
echo( '<tr><td class="menu_item"><a href="logoutkader.php">Logout Kader Partai</a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>');
}else{
echo(
'<tr><td class="menu_item"><a href="loginuser.php">Login</a></td></tr>
<tr><td class="menu_item"><a href="display.php">Informasi Pemilu</a></td></tr>
');
}

	?>	
	</td>
</tr>

</table>