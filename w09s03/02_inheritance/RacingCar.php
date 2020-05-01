<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
class RacingCar extends Car{
	private $nosCapacity;
	private $speed;
	public function __construct($_engine, $_nosCapacity){
		parent::__construct($_engine);
		$this->nosCapacity = $_nosCapacity;
	}

	//getter
	public function getNosCapacity(){
		return ($this->nosCapacity);
	}

	//services
	public function addNos($_addition){
		$this->nosCapacity += $_addition;
		return ($this->nosCapacity);
	}

	public function useNos(){
		if($this->nosCapacity - 1 > 0){
			$this->nosCapacity--;
			$this->speed++;
		}
	}
}



?>