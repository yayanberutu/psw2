<?php
	session_start();
	echo "Text as entered by user : $_POST[t1] <br>";
	echo "Captcha shown : $_SESSION[my_captcha] <br>";
	if($_POST['t1'] == $_SESSION['my_captcha']){
		echo "Captcha validation passed ";
	}
	else {
		echo "Captcha validation failed ";
	}

		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$file_name = 'data_registrasi.txt';
		$mode = 'w+';
		$file = fopen($file_name, $mode);
		$content = "$nama"."#"."$username". "#". "$password";
		fwrite($file, $content);
		$closed = fclose ($file);
		unset($_SESSION['my_captcha']);
?>


