<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor Yuks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/PollingMahasiswa.css">
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
							<a href="PollingMahasiswa.php"><center><h4>POLLING</h4></center></a>
						</div>
						<div class="tab">
							<a href="kelas.php"><center><h4>KELAS</h4></center></a>
						</div>
					</div>

<?php
require_once(dirname(__FILE__).'/functions/database.php');	

?>
	<div align=center>
	<form method=post action="PollingMahasiswa.php" style="width: 800px; height: 350px">
		<div class="container" style="font-size: 20px">
		<?
	session_start();
	$_SESSION['n1'] = 0;
	$_SESSION['n2'] = 0;
	$_SESSION['n3'] = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Task 3</title>
	<script type="text/javascript">
		function loadXMLDoc(url)
		{
			var xmlhttp;
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function()
			{
				if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
				{
					document.getElementById('result').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<p><b>Please Choose</b></p>
	<button type="button" onclick="loadXMLDoc('Polling_vote_result.php?temp=1')">Option 1</button>
	<button type="button" onclick="loadXMLDoc('Polling_vote_result.php?temp=2')">Option 2</button>
	<button type="button" onclick="loadXMLDoc('Polling_vote_result.php?temp=3')">Option 3</button>
	<p id="result"></p>
</body>
</html>

	    <br><br>
	<div class="col-md-1 col-md-offset-5">
		<button type="submit" class="btn btn-warning" onclick="this.form.reset();">Kirim</button>
	</div>
<br><br><br><br>
<?php
	require_once(dirname(__FILE__).'/commons/footer.php');
	?> 
</form>
	</div>	 
</body>
</html>