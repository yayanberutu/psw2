<?php
$file_name = 'students.txt';
$mode ='r';
//open the file
$file = fopen($file_name, $mode);
//while(!feof($file))
//{
$read = fgets($file_name,4);
//if($read == null)break;
//echo $read;
//echo "<pre>";
//print_r($read);
//$read2 = fgets($file, 3);
//echo $read2;
//closing
//}
//closed = fclose($file);



?>