<?php
echo('<pre>');
var_dump($_FILES);

$upload_path = __DIR__ .DIRECTORY_SEPARATOR .$_FILES['upload_file']['name'];
$copied = copy (
	$_FILES['upload_file']['tmp_name'],
	$upload_path
);

echo(($copied)?"upload succesfully" : "failed");

?>