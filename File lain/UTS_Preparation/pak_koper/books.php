<?php
	include_once('functions.php');

	open_page('books');

	$database = new mysqli('127.0.0.1', 'root', '', 'library');
	$query = 'SELECT * FROM book';

	$result_set = $database->query($query);

	echo('<table border="1">');
	echo('<tr>');
	echo('<td>id</td>');
	echo('<td>author_id</td>');
	echo('<td>publisher_id</td>');
	echo('<td>isbn</td>');
	echo('<td>title</td>');
	echo('<td>price</td>');
	echo('<td>year</td>');
	echo('<td>description</td>');
	echo('</tr>');

	while($row = $result_set->fetch_assoc()){
		echo('<tr>');
		echo('<td>' .$row['id']. '</td>');
		echo('<td>' .$row['author_id']. '</td>');
		echo('<td>' .$row['publisher_id']. '</td>');
		echo('<td>' .$row['isbn']. '</td>');
		echo('<td>' .$row['title']. '</td>');
		echo('<td>' .$row['price']. '</td>');
		echo('<td>' .$row['year']. '</td>');
		echo('<td>' .$row['description']. '</td>');
		echo('<td><a href="update.php?id='.$row['id'].'">Update</a></td>');
		echo('<td><a href="delete_process.php?id='.$row['id'].'">Delete</a></td>');
		echo('</tr>');
	}

	echo('</table>');

	$database->close();

	close_page();
?> 