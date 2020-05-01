<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php
	$daftar_buku = array 
		(
			array("Ada gula gak ada semut", "Wiro Sableng", "21800449", 11.02, 0.15),
			array("Bukan pesan biasa", "Jaka Sembung", "21800450", 14.28, 0.14),
			array("Celana di jemuran ASPA, merah berbunga" , "Saras 008", "21800451", 7.85, 0.09),
			array("Di mana ada PHP, aman!", "Arman Maulagi", "21800452", 18.99, 0.12),
			array("Tiki-taka pemrograman" , "Pandapotan Bangsa", "21800453", 10.50, 0.25) 
		);
	$count = count($daftar_buku);
	$counter;
	echo "<h1><center>Daftar Buku Pak Koper</h1>";
	echo "<center>";
	echo "<table border=1><tr><th>ID</th><th>Judul</th><th>Penulis</th><th>ISBN</th><th>Harga</th><th>Diskon</th><th>Action</th></tr>";
	for($counter=0; $counter<$count; $counter++){
		$i=0;
		echo "<tr>"; $temp = $counter+1;
		echo "<td>$temp</td>";
		while($i!=5){
			echo "<td>";
				print_r($daftar_buku[$counter][$i]);	
			echo "</td>";
			$i++;
		}
			echo "<td><a href='form-edit.php?>Edit</a>"; echo "<a href='delete.php?>Delete</a></td>";
		echo "</tr>";

		
	}
	echo "</table><br><br>";
	echo "<a href='tambahbuku.php'>Tambah</a> ";
	echo "<a href='index.php'>Logout</a>" ;
?>
