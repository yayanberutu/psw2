<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->
<?php

	include_once("model/Model.php");
	class Controller {
		public $model;
		public function __construct(){
			$this->model = new Model();
		}
		public function invoke(){
			if (!isset($_GET['book'])){
			// Pada bagian ini ditunjukkan semua data buku tersedia
				$books = $this->model->getBookList();
				include 'view/booklist.php';
			}
			else {
			// Pada bagian ini ditunjukkan data buku yang direquest
				$book = $this->model->getBook($_GET['book']);
				include 'view/viewbook.php';
			}
		}
	}
?>
