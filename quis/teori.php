<?php
	function add (&$x){
		$x += 20;
		return $x;
	}
	$value = 20;
	add($value);
	echo $value;

?>