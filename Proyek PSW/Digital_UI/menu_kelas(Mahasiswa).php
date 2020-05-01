<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor Yuks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script.  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
<?php
require_once(dirname(__FILE__).'/functions/database.php');	

?>	
	<div class="col-sm-10">
	<form method=post action="menu_kelas(Mahasiswa).php">
		<h2>Kelas</h2>
<table>
	<tr>
		<td class="text"><input type="radio" name="kelas"></td>
		<td class="text">Kelas A</td>
	</tr>
	<tr>
		<td class="text"><input type="radio" name="kelas"></td>
		<td class="text">Kelas B</td>
	</tr>	
	<tr>
		<td class="text"><input type="radio" name="kelas"></td>
		<td class="text">Kelas C</td>
	</tr>	
</table>
	</form>	
	</div>


</body>
</html>
