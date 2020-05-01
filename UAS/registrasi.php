	<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
	-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" name="pendaftaran">
		<div>
			Email: <input type="email" name="email" placeholder="email anda..." required>
		</div>
		<div>
			Password: <input type="password" name="password" placeholder="password anda..." required>
		</div>
		<div>
			Tanggal Lahir: <input type="date" name="date_of_birth" placeholder="tanggal lahir" required>
			
		</div>
		Jenis Kelamin :
		<select name="gender">
			<option>M</option>
			<option>F</option>
		</select>
		<div>

		No Kontak: <input type="text" name="contact_number" placeholder="contact number" required>
			
		</div>
		<!-- <input type="" name=""> -->

		<input type="submit" name="daftar" value="Daftar">
	</form>

</body>
</html>