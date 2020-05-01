<?php
	class partai{
		public $id;
		public $name;
		public $password;
		public $role;
		public function __construct($id, $name, $password, $role){
			$this->id = $id;
			$this->name = $name;
			$this->password = $password;
			$this->role = $role;

		}

	}


?>