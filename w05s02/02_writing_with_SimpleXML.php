<?php
	$xml_file = 'abc_books.xml';

	// instance an object of SimpleXML
	// supplied with a full text of xm
	$books = new SimpleXMLElement('<books></books>');

	// instance a child-element from the root
	$book = $books -> addChild('book');
	$book->addChild('title', 'Ada gula gak ada semut');
	$book->addChild('author', 'Wiro Sableng');
	$book->addChild('isbn', '0123123001');
	// the SimpleXMLElement::addChild method does have a returned object,
	// this object is also an element.
	// using this object element, adding new attributes is possible.

	$priceElement = $book->addChild('price', '11.02');
	$priceElement->addAttribute('disc', '11.20');
	$book->addChild('desc', '"Ada gula ada semut? Tidak!", "Sapi dapat berlari di atas air" dan banyak keunikan di dunia ini yang dapat anda temukan di buku ini dan Anda akan semakin mengagumi kehidupan.');

	//instance a new child right from the root, 'books'
	$book = $books->addChild('book');
	$book->addChild('title', 'Bukan pesan biasa');
	$book->addChild('author', 'Jaka Sembung');
	$book->addChild('isbn', '0123123002');
	$priceElement = $book->addChild('price', '14.28');
	$priceElement->addAttribute('disc', '5.00');
	$book->addChild('desc', 'Telodong Cu Lun, seorang bintang kenamaan yang digandrungi remaja alay saat ini menemukan sebuah gambar berbentuk bulat di dinding kamarnya. Keanehan lain yang ia temukan adalah kosongnya tudung saji di ruang makan dan kosongnya dompet. Suasana makin mencekam ketika sebuah pesan singkat diterimanya melalui telepon gengamnya, isi pesan itu tidak biasa... temukan kisahnya!');

	// take a peek what's inside the $books ?
	echo('<pre>');
	var_dump($books);
	// write to a new XML file
	$books->asXML($xml_file);

?>