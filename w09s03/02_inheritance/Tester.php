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
		echo $car. '<br>';
		//invokes the instance's methods
		$car->increaseSpeed();
		$car->turnLeft(12.3);
		$car->increaseSpeed();
		$car->turnRight(32.1);
		$car->decreaseSpeed();
		$car->turnLeft(20.9);
		$car->decreaseSpeed();

		$racingCar = new RacingCar('Perarri', 3.12);
		echo($racingCar . '<br>');
		$racingCar->increaseSpeed();
		$racingCar->useNos();
		$racingCar->turnLeft(12.3);
		$racingCar->increaseSpeed();
		$racingCar->useNos();
		$racingCar->turnRight(32.1);
		$racingCar->decreaseSpeed();
		$racingCar->useNos();
		$racingCar->turnLeft(20.9);
		$racingCar->decreaseSpeed();
		$racingCar->useNos();

		// what will happen ?
	// you give a try
	// $anotherCar = new RacingCar('Wirsab Engine', 2.12);
	// how about this one ?
	// $anotherRacingCar = new Car('Jaksem Engine');


	}

}

?>