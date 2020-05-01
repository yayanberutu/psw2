<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php
	define('UPK', 100); #UPK :Uang Pak Koper
	$daftar_buku = array 
		(
			array("Ada gula gak ada semut", "Wiro Sableng", "0123123001", 11.02, htg_discount(10,11.02), " Ada gula ada semut? Tidak! Sapi dapat berlari di atas air dan banyak keunikan di dunia ini yang dapat anda temukan di buku ini dan Anda akan semakin mengagumi kehidupan. "),
			array("Bukan pesan biasa", "Jaka Sembung", "0123123002", 14.28, htg_discount(12,14.28), " Telodong Cu Lun, seorang bintang kenamaan yang digandrungi remaja alay saat ini menemukan sebuah gambar berbentuk bulat di dinding kamarnya. Keanehan lain yang ia temukan adalah kosongnya tudung saji di ruang makan dan kosongnya dompet. Suasana makin mencekam ketika sebuah pesan singkat diterimanya melalui telepon gengamnya, isi pesan itu tidak biasa... temukan kisahnya! "),
			array("Celana di jemuran ASPA, merah berbunga" , "Saras 008", "0123123003", 7.85, htg_discount(7,7.85), " Pada saat liburan semester yang lalu, seorang penanggungjawab bidang akademik berjalan di daerah jemuran Asrama Putra yang tengah ditinggal para penghuninya berlibur, namun karena beberapa hal ada beberapa mahasiswa yang masih tinggal di gedung megah itu. Terlihat sebuah celana merah dengan corak bunga bangkai, terjatuh dari jemuran pakaian, alamak! Investigasi dilakukan, dan hal tidak disangka pun terkuak."),
			array("Di mana ada PHP, aman!", "Arman Maulagi", "0123123004", 18.99, htg_discount(10,18.99), " Pengembang web sering kesulitan dalam memanajemen situs statis yang mereka kembangkan. Mereka harus mengubah kode yang sudah mereka tulis setiap kali ada perubahan konten. PHP sebagai salah satu server-side programming language dapat mengeliminir persoalan tersebut. Buku ini menjelaskan bagaimana caranya."),
			array("Tiki-taka pemrograman" , "Pandapotan Bangsa", "0123123005", 10.50,htg_discount(20,10.50), "Tidak mudah memahami konsep pemrograman. Buku ini memberikan tutorial dengan cara pandang berbeda untuk memahami konsep-konsep tersebut. Dilangkapi dengan contoh kasus yang mudah dipahami dan penyelesaian yang sistematis dan tepat sasaran. "	) 
		);
	function sum_cost($daftar_buku){
		$jumlah = count ($daftar_buku);
		$temp = 0;
		for ($counter = 0; $counter < $jumlah; $counter++){
				$temp += $daftar_buku[$counter][3];
		}
		return $temp;
	}
	function htg_discount($persen, $ha){ 
		$hsd = ((100 - $persen)/100)* $ha;
		return $hsd;
	}
	function hswd($daftar_buku){ //hitung sisa with discount
		$jumlah = count ($daftar_buku);
		$temp = 0;
		for ($counter = 0; $counter < $jumlah; $counter++){
				$temp += $daftar_buku[$counter][4];
		}
		return $temp;
	}
	
?>
<html>
	<head>
		<title>Buku Pak Koper</title>
	</head>
	
	
	<body>
		Sekarang pukul :
		<?php 
			echo(date('d F Y, G:i A'). "<br><br>"); 
		?><br>
		<?php
			$jumlah = count($daftar_buku);
		
			for($counter = 0;  $counter<$jumlah; $counter++){
				for ($counter2 = 0; $counter2<$jumlah+1; $counter2++){
					echo("Judul: ". $daftar_buku[$counter][$counter2]). '<br>';
					$counter2++;
					echo("Penulis: ". $daftar_buku[$counter][$counter2]. '<br>');
					$counter2++;
					echo("ISBN :". $daftar_buku[$counter][$counter2]). '<br>';
					$counter2++;
					echo("Harga: ". "$".$daftar_buku[$counter][$counter2]). '<br>';
					$counter2++;
					echo ("Harga Setelah diskon: ". "$". $daftar_buku[$counter][$counter2].'<br>');
					$counter2++;
					echo("Deskripsi: ". $daftar_buku[$counter][$counter2]). '<br>';
				}
				echo ("<br> <br> <br>");
			
			}
			echo("Jumlah buku yang dimiliki pak koper: ". $jumlah. "<br><br>");

			echo ("Jumlah Uang yang telah dikeluarkan Pak Koper: ". "$". sum_cost($daftar_buku). "<br><br>");
		
			echo ("Sisa Uang Pak Koper Tanpa Diskon : $" . (UPK - sum_cost($daftar_buku)) . "<br><br>");
			echo ("Sisa Uang Pak Koper Dengan Diskon : $" . (UPK - hswd($daftar_buku)) . "<br><br>");
		?>
		
	
	</body>


</html>