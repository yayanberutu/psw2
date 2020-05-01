<?php
	$filexml = 'keluarga.xml';
	$keluarga = new SimpleXMLelement('<keluarga></keluarga>');
	$kel = $keluarga->addchild('kel');
	$kel->addchild('nama', 'berutu');
	$kel->addchild('jlh_anak', 3);
	$kel->addchild('alamat', 'medan');
	// $keluarga->addchild('nama_kel', 'berutu');

	$keluarga->asXML($filexml);
?>