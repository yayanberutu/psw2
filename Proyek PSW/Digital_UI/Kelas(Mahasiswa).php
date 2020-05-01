<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor Yuks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body> 
	<div class="container-fluid">
		<!-- header -->
		<div class="header">
  			<div class="p-2 bg">Tutor Yuks!</div>
		</div>
		<!-- akhir header -->

		<!-- Isi dan Menu Bar-->
		<div class="content"> 
			<div class="container-fluid">
				<div class="row" style="background-color: #4879EA;">
					<div class="menubar" style="">
						<div class="tab">
							<a href="loginuser"><center><h4>HOME</h4></center></a>
						</div>
						<div class="tab">
							<a href="loginuser.php"><center><h4>LOGIN</h4></center></a>
						</div>
						<div class="tab">
							<a href="pesertaAdmin.php"><center><h4>PESERTA</h4></center></a>
						</div>
						<div class="tab">
							<a href="polling.php"><center><h4>POLLING</h4></center></a>
						</div>
						<div class="tab">
							<a href="kelas.php"><center><h4>KELAS</h4></center></a>
						</div>
					</div>

	  				<div class="col-sm-10" style="background-color: #4879EA;">
	  					<!--Form Kelas(Mahasiswa)
	  					-->
						<form method=post action="kelass.php">
							<table id="me">
							<tr>	
								<td class="text">ID_Kelas</td>
								<td class="text">: <input type="text" name="idkelas"></td>
							</tr>
							<tr>
								<td class="text">ID_Pengajar</td>
								<td class="text">:  <input type="text" name="idpengajar"></td>
							</tr>
							<tr>
								<td class="text">Matakuliah</td>
								<td class="text">:  <input type="text" name="matakuliah"></td>
							</tr>
							
							</table>
								<br>
							<center><input type="submit" name="Enroll" value="Enroll" id="enrol"></center>
							
							
						</form>
	  				</div>
	  								</div>

			</div>


		</div>
		<!-- akhir isi -->

		<!--Footer-->
		<div class="footer">
  			<div class="p-2 bg">TutorYuks Copyright @2019</div>
		</div>
		<!--akhir footer-->
	</div>



</body>
</html>
