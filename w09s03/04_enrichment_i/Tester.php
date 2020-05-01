<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
	class Tester {
		public function start(){
			$car = new Car('Esemka Engine');
			echo($car. '<br>');
			//omitted

			$racingCar = new RacingCar('Perarri', 3.12);
			echo($racingCar. '<br>');
			//omitted

			$driver = new Driver('0852-622-112-xx');
			$driver->setCar($car);

			echo($driver. '<br/>');
			echo($car. '<br>');
		}
	}
?>