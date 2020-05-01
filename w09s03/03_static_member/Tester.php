<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
	class Tester {
		public function start(){
			$car = new Car('Esemka Engine');
			echo ($car . '<br/>');
			
			$racingCar = new RacingCar('Perrari', 3.12);
			echo($racingCar . '<br/>');
			echo ('there are' . $racingCar::getProductionInfo(). ' unit(s) of' .get_class($racingCar). '<br/>');

			$anotherCar = new RacingCar('Wirsab Engine', 2.12);
			echo($anotherCar. '<br/>');
			$anotherRacingCar = new Car('Jaksem Engine');
			echo ($anotherRacingCar . '<br/>');

			echo('there are '. $racingCar::getProductionInfo(). ' unit(s) of' .get_class($racingCar). '<br/>');
		}
	}

?>