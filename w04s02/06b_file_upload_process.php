<?php
	// file: 06b_file_upload_process.php
	// see what inside the $_FILES super global

	echo ('<pre>');
	var_dump($_FILES);

	//build the upload location
	$uploaded_path = 'X:\\AKADEMIK' . DIRECTORY_SEPARATOR . $_FILES['uploaded_file']['name'];

	//storing the file
	$copied = copy ($_FILES['uploaded_file']['tmp_name'],$uploaded_path
		);
	echo(($copied)? "uploaded succesfully" : "failed");


?>