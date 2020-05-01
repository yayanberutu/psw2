<?php
	function tambah5($angka){
		$angka += 5;
	}
	function tambah6(&$angka){
		$angka += 6;
	}

	$originum =10;
	tambah5($originum);

	echo "original value is $originum <br/>";

	tambah6($originum);
	echo "original value is $originum <br/>";


?>