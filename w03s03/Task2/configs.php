<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	$configs = array (
		'web_name' => 'Koper\'s book',
		'username' => 'admin',
		'password' => 'admin',
		'main_page' => 'books.php'
	);

	function get_init_data (){
		return(array());
	}
	$empty_book = array (
		'title' => '',
		'author' => '',
		'isbn' => '',
		'price'=> 0.00,
		'desc' => ''
	);
?>