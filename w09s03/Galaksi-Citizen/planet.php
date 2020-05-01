<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
	class Planet{
		public $name;
		public $color;
		public $diameter;
		public $penghuni = "Monsville";

		public function evolution(){
			return "Berevolusi";
		}
		public function increase_speed_rotate(){
			return "Meningkatkan kecepatan rotasi";
		}
		public function decrease_speed_rotate(){
			return "Menurunkan kecepatan rotasi";
		}

		//agar printable
		public function __toString(){
			return "Anggota Galaksi Citizen dengan nama $this->name memiliki warna $this->color berdiameter $this->diameter memiliki penghuni berjenis $this->penghuni." . '<br/>';
		}

	}


	class Bintang extends Planet{
		public function pancarkan_cahaya(){
			return "Pancarkan cahaya";
		}

	}


?>