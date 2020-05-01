<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->

<?php
	include_once("model/Book.php");
	class Model {
		public function getBookList(){
		// here goes some hardcoded values to simulate the database
			return array(
				"Secret Life of Brogila" => new Book("Secret Life of Brogila", "Parada Siahaan", "Humorous book"), "Moonwalker" => new Book("Moonwalker", "J. Walker", "Science book"), "Lucifer Bapa Peradaban Gelap" => new Book("Lucifer Bapa Peradaban Gelap", "Albert", "Are you sure?"), "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "Just for fun")
			);
		}
		public function getBook($title){
			$allBooks = $this->getBookList();
			return $allBooks[$title];
		}
	}
?>