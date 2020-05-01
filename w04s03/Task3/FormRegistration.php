<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="captcha_proses.php" method="post">
		<input type="text" name="nama" placeholder="Masukkan nama anda..."><br>
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="password" placeholder="password"><br>

		<input type=text name=t1>
		<img src=captcha_creator.php id="capt"><br>
		<input type=button onClick=reload(); value='Reload Captcha'><br>
		<input type=submit value='submit'>
	</form>

</body>
</html>