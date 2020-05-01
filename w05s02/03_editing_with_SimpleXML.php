<?php
	$xml_file = 'books.xml';
	// instance an object of SimpleXML
	// supplied with a full text of xml-formated string
	$books = new SimpleXMLElement(file_get_contents($xml_file));
	// take a peek what's inside the $books ?
	echo('<pre>');
	var_dump($books);
	// modify an element, the title
	echo($books->book[1]->title . '<br>');
	$books->book[1]->title = 'new ' . $books->book[1]->title;
	echo($books->book[1]->title . '<br>');
	// modify an elemet's attribute, the discount
	echo($books->book[1]->price->attributes()->disc . '<br>');
	$books->book[1]->price->attributes()->disc = 25.58;
	echo($books->book[1]->title . '<br>');
	// write to a new XML file
	$new_xml_file = 'new_' . $xml_file;
	$books->asXML($new_xml_file);
?>