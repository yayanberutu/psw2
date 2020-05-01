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

	$nama_xml = 'bukuPakKoper.xml';

	$books = new SimpleXMLElement('<books></books>');
	$counter;
	for($counter=0; $counter<5; $counter++){
			$book = $books -> addChild('book');
			$i=0;
			$book ->addChild('judul', $daftar_buku[$counter][$i]);
			$i++;
			$book->addChild('penulis', $daftar_buku[$counter][$i]);
			$i++;
			$book->addChild('isbn', $daftar_buku[$counter][$i]);
			$i++;
			$book->addChild('harga', $daftar_buku[$counter][$i]);
			$i++;
			$book->addChild('diskon', $daftar_buku[$counter][$i]);		
	}

	// foreach ($daftar_buku as $key => $value) {
	// 	foreach ($value as $a => $b) {
	// 		$book = $books -> addChild('book');
	// 		$book->addChild('judul', $b);
	// 		$book->addChild('penulis', $b);
	// 		$book->addChild('isbn', $b);
	// 		$book->addChild('harga', $b);
	// 		$book->addChild('diskon', $b);		
	// 	}
		
	// }

	// take a peek what's inside the $books ?
	echo('<pre>');
	var_dump($books);
	// write to a new XML file
	$books->asXML($nama_xml);

?>