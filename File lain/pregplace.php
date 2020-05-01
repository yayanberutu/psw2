<?php
	$first = "Indonesia";
	$last = "Selamat Pagi";
	$last = preg_replace("^", "$", $last);
	echo preg_replace("$", $first, $last);

?>