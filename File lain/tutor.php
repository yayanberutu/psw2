<html>
	<head>
		<title>
			Tutorial PHP
		</title>
	</head>
	
	<body style= "background-color : green;">
		<?php
			$ArrI = Array (
			'Nama' => "Yosepri",
			'TTL' => 5,
			'A1' => 20,
			'A2' => 25
			);
			$temp = $ArrI['TTL'] + $ArrI['A1'] + $ArrI['A2'];
			echo("jumlahnya adalah ".$temp);
			
			
			//echo($temp);	
			//echo ($ArrI[1] + $ArrI[3] + $ArrI[4]);


		?>
		
	
	</body>

</html>