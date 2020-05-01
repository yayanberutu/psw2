<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
class Car{
	//instance variable
	private $engine;
	private $speed;

	//constructor
	public function __construct($_engine){
		$this->engine = $_engine;
	}

	//getters
	public function getEngine(){
		return($this->engine);
	}

	public function getSpeed(){
		return($this->speed);
	}

	//setter
	public function setEngine($_engine){
		$this->engine = $_engine;
	}

	//services
	public function turnLeft($_degree){
		echo("turning left for" . $_degree . " degree at ". $this->speed . " Km/H.<br>");
	}

	public function turnRight($_degree){
		echo("turning right for ".$_degree . " degree at ". $this->speed . " Km/H. <br>");
	}

	public function increaseSpeed(){
		$this->speed++;
	}

	public function decreaseSpeed(){
		//only if it is moving
		if($this->speed-1 > 0){
			$this->speed--;
		}
	} 

	//to make this object printable
	public function __toString(){
		return ("car with" + $this->engine + " engine");
	}
}
?>