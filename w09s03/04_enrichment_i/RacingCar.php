<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
Kelas : 31TI2
-->
<?php
class RacingCar extends Car{
	private static $PRODUCED = 0;

	public static function getProductionInfo(){
		return (self::$PRODUCED);
	}

}

?>