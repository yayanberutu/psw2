<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php
// class ini mengkonstruksikan bagaimana struktur data buku
	class Book {
		public $title;
		public $author;
		public $description;
		public function __construct($title, $author, $description){
			$this->title = $title;
			$this->author = $author;
			$this->description = $description;
		}
	}
?>