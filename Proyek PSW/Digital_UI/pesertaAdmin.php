<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor Yuks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/pesertaAdmin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script.  <script src="https://cdnjs.cloudflare.com/ajax/libs/poppegr.js/1.14.7/umd/popper.min.js"></script>
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
					<div class="menubar">
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
	<!--End Of 'Heading Navigation'-->

		<div class="container form-register" style="background-color: #fcffff width:500px;">
			<form method=post action="pesertaAdmin.php" class="well form-horizontal" id=register_form method="post" role="form" style="width: 900px; height: 650px">
				<fieldset>
					<legend>
						
					</legend>
					<div class="form-group">
						<label class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="full_name" placeholder="Full Name" class="form-control">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">UserName</label>
						<div class="col-sm-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="email" placeholder="User Name" class="form-control">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="text" name="Nomor" class="form-control">
							</div>	
						</div>
					</div>
					
				<div class="form-group">
						<label class="col-sm-3 control-label">NIM</label>
						<div class="col-sm-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="email"  class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Prodi</label>
						<div class="col-sm-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
								<select name="Pilih" class="form-control">
									<option>--Prodi--</option>
									<option>HIMATIF</option>
									<option>HIMADEMTIKA</option>
									<option>Others</option>
								</select>
							</div>
						</div>
					</div>
			
					<div class="form-group">
						<label class="control-label col-sm-3"></label>
							<div class="checkbox col-sm-8">
								<label>
									<input type="checkbox" name="accept"/>I agree for submission
								</label>
							</div>
						</label>
					</div>

					<div class="col-md-1 col-md-offset-5">
						<button type="submit" class="btn btn-warning" onclick="this.form.reset();">Kirim</button>
					</div>
				</fieldset>
			</form>
		</div>

</body>
</html>
