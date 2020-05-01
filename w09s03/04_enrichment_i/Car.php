<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
	class Car{
		private $engine;
		protected $speed;
		private $driver;

		//omitted...
		//setter
		public function setDriver($_driver){
			$this->driver = $_driver;
		}

		public function getEngine(){
			return $this->engine;
		}

		//omitted...

		public function __toString(){
			if(isset($this->driver)){
				return ('car with '.$this->engine . 'engine driven by a driver with driving license: '. $this->driver->getDrivingLicence());
			}
			else {
				return ('car with '. $this->engine. ' with no driver<br>');
			}
		}
	}


?>