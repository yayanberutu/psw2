<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
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
							<a href="Home.php"><center><h4>HOME</h4></center></a>
						</div>
						<div class="tab">
							<a href="login.php" class="active"><center><h4>LOGIN</h4></center></a>
						</div>
					</div>

					<!-- awal login -->
					<center>
	  				<div class="col-sm-5" style="background-color: #4879EA;"> 
	  					<h2>Login Form </h2>
							<form action="" method="">
							  <div class="imgcontainer">
							    <img src="user.png" alt="Avatar" class="avatar">
							  </div>

							  <div class="container">
							    <label><b>Username</b></label>
							    <input type="text" placeholder="Enter Username" name="uname" required>

							    <label><b>Password</b></label>
							    <input type="password" placeholder="Enter Password" name="psw" required>
							        
							    <button type="submit">Masuk</button>
							    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
							  </div>

							  <div class="container" style="background-color:#f1f1f1">
							    <button type="button" class="cancelbtn">Cancel</button>
							    <span class="psw">Lupa <a href="#">password?</a></span>
							  </div>
							</form>
	  				</div>
	  				</center>
	  				<!-- akhir login -->

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
