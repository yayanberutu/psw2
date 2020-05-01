<?php 
	class anggotapartai{
		public $id;
		public $idpartai;
		public $name;
		public $datetime;

		public function __construct($id, $idpartai, $name, $datetime){
			$this->id = $id;
			$this->idpartai = $idpartai;
			$this->name = $name;
			$this->datetime = $datetime;
		}

	}



?>