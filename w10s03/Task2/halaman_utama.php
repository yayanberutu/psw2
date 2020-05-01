<html>
	<head>
		<title>Ajax</title>
		<link rel="stylesheet" type="text/css" href="css.css"> </link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div id="menu">
				<a href="halaman1">Halaman 1</a>
				<a href="halaman2">Halaman 2</a>
				<a href="halaman3">Halaman 3</a>	
			</div>
			
			<div id="konten">
				
			</div>
			<script>
				$(document).ready(function(){
					// halaman default
					$('#konten').load('halaman1.php');
	 
					// fungsi yang mengatur konten mana yang akan ditampilkan
					$('#menu a').click(function(){
						// mengambil data dari href
						var hal = $(this).attr('href');
						// konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
						$('#konten').load(hal+'.php');
						return false;
					});
				});
			</script>
		</div>
	</body>
</html>