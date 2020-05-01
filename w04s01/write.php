<?php

$file_name = "new_students.txt";
$mode = "w+";
$file = fopen($file_name, $mode);
$content = "11113212#wiro sableng#32TI1";
fwrite($file, $content);
$close = fclose($file);
//file_put_contents($file_name, $content);
?>