<?php
	class mahasiswa{
		public $nama = "yayan";
		public $nim;
		public $prodi = "kedokteran";

		public function isi_krs(){
			return "Isi KRS!";
		}
		public function __construct(){
			echo "Mahasiswa dengan nama $this->nama berada di prodi $this->prodi";
		}

		public function __destruct(){
			echo "Objek telah dihancurkan";
		}
		
	}

	$yosepri = new Mahasiswa();
	$yosepri->nama = "Yosepri Berutu";
	$yosepri->nim = "11318066";
	$yosepri->prodi = "D3 Teknik Informatika";
	// echo $yosepri->perkenalan();
	unset($yosepri);

?>