<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
// a special class which responsible to simulate a certain scenario 
class Tester{

	
	public function start(){
		//using the existing class by intantiating an object of it 
		$car = new Car('Esemka Engine');

		//invokes the instance's methods
		$car->increaseSpeed();
		$car->turnLeft(12.3);
		$car->increaseSpeed();
		$car->turnRight(32.1);
		$car->decreaseSpeed();
		$car->turnLeft(20.9);
		$car->decreaseSpeed();
	}

}

?>