<?php
	$dataTesdarah =  array(
		'Hemoglobin' => "12g/dL",
		'Hematokrit' => "45 %",
		'Limfosit' => "30 %" 
	);
	echo "DATA TES DARAH<br>";
	foreach ($dataTesdarah as $key => $value) {
		echo "$key = $value<br>";
	}


?>