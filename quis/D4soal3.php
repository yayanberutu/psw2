<?php
	$datanilai = array(
		'Anton' => array(70 , 81),
		'Beni' => array(90, 60)
	);

	$counter=0;
	foreach ($datanilai as $key => $value) {
		echo "$key = ";
			if ($value[1] <70){
				echo "D";
			}
			else if ($value[$counter] >=70){
				echo "A";	 
			}
			else if ($value[$counter] > 60 && $value[$counter] <70){
				echo "B";
			}
			else if ($value[$counter]<=60){
				echo "C";
			}
			echo "<br>";
		++$counter;
	}
?>
