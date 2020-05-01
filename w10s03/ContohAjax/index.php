<html>
	<head>
		<title>Ajax</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="luar" class="luar" style="background-color: red">
		<div id="menu">
			<a href="home">Home</a>
			<a href="profil">Profil</a>
			<a href="kontak">Kontak</a>	
		</div>
		
		<div id="konten">
			
		</div>
		<script>
			$(document).ready(function(){
				// halaman default
				$('#konten').load('home.php');
 
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