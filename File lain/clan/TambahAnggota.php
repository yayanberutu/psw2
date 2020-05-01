<?php
require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

$is_logged_in = get_session('logged_admin');
?>
<form method="POST" action="tambahAnggotaProcess.php"> 
	<input type="text" name="id" placeholder="ID"><br/>
	<input type="text" name="id_partai" placeholder="ID Partai"><br/>
	<input type="text" name="name" placeholder="nama"><br/>
	<input type="date" name="date_time" placeholder="tanggal"><br/>
	<input type="submit" name="submit" value = "daftar">
</form>