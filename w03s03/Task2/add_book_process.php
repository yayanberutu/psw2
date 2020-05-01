<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	include_once('autoload.php');
	if(!get_session('is_logged_in')){
		redirect($configs['main_page']);
	}
	$book = $empty_book;
	foreach($book as $key => $value){
		$book[$key] = get_form_post($key);
	}
	$books[] = $book;
	set_session('books', $books);
	set_session('message', 'book saved.');
	redirect($configs['main_page']);
?>