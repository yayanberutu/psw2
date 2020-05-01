<!--

Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2

-->
<?php
	$file_name = 'books.xml';

	$books = simplexml_load_file($file_name);

	echo('<pre>');
	print_r($books);
?>