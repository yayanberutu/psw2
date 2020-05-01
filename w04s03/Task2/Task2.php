<?php
	$content = file ("motor.csv");

	echo("<pre>");
	print_r($content);
	$counter1; $counter2;

	$jlh =count ($content);
	// echo $jlh;
	echo ("<table border= '1'>");

	foreach ($content as $rows => $row) {
		echo ("<tr>");
		echo "<td>". $row . "</td>";
		// foreach ($row as $cols => $col) {
		// 	}	


	}
	echo "</tr></table";
	?>
