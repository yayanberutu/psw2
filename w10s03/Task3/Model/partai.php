<?php
	class partai{
		public $id_partai;
		public $name;
		public $image;
		public $ketua;
		public function __construct($id_partai, $name, $image, $ketua){
			$this->id_partai = $id_partai;
			$this->name = $name;
			$this->image = $image;
			$this->ketua = $ketua;

		}

	}


?>