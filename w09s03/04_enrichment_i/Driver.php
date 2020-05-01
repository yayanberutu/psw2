<?php
	class Driver {
		//instance variables
		private $car;
		private $drivingLicence;
		//constructor
		public function __construct($_drivingLicence){
			$this->drivingLicence = $_drivingLicence;
		}

		//getter
		public function getDrivingLicence(){
			return ($this->drivingLicence);
		}

		//setter
		public function setCar($_car){
			$this->car = $_car;
			$this->car->setDriver($this);
		}

		//service
		public function driveTo($_location){
			if(isset($this->car)){
				echo('okay, i\'ll drive you to '. $_location. '<br/>');
			}
			else {
				echo('sorry, i have no car, can\'t drive you to '. $_location. '<br/>');
			}
		}

		//to make this object printable
		public function __toString(){
			if(isset($this->car)){
				return ('i drive a car with '. $this->car->getEngine(). '<br/>');
			}
			else{
				return ('i have no car<br>');

			}
		}

	}


?>