<?php
	echo "<table border=1><tr><th>Judul</th><th>Penulis</th><th>ISBN</th><th>Harga</th><th>Diskon</th></tr>";
	$i=0;
		echo "<tr><form method='post'>"; 
		while($i!=5){
			echo "<td>";
				echo "<input type='text'";	
			echo "</td>";
			$i++;
		}
		echo "</tr><br><br>";
	echo "<input type ='submit' name='submit' value='tambah'></form>";
	echo "<a href='daftarbuku.php'>Kembali</a>";
	?>