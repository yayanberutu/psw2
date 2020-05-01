<?php
	session_start();
	include_once('functions.php');
	open_page('index');
?>
this site is dedicated by Pak Koper to you, mate!<br>
<a href="add_book.php">add books</a><br>
<a href="books.php">all books</a><br>
<?php
	if (isset($_SESSION['is_logged_in'])) {
		echo('<a href="logout.php">logout</a><br>');
	} else {
		echo('<a href="login.php">login</a><br>');
			}
	close_page();
?>