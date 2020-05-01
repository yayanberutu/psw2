<?php
	session_start();

	include_once('functions.php');

	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}

	open_page('add book');
?>

<form action="add_book_process.php" method="post">
	<table border="1">
		<tr>
			<td>author id</td>
			<td>:</td>
			<td><input type="text" name="author_id"></td>
		</tr>
		<tr>
			<td>publisher id</td>
			<td>:</td>
			<td><input type="text" name="publisher_id"></td>
		</tr>
		<tr>
			<td>isbn</td>
			<td>:</td>
			<td><input type="text" name="isbn"></td>
		</tr>
		<tr>
			<td>title</td>
			<td>:</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>price</td>
			<td>:</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>year</td>
			<td>:</td>
			<td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>description</td>
			<td>:</td>
			<td><textarea name="description"></textarea></td>
		</tr>
		<tr><td colspan="3"><input type="submit" name="action" value="save"></td>
		</tr>
	</table>
</form>

<?php
	close_page();
?>