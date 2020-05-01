<!--
	Nama	: Yosepri Disyandro Berutu 
	NIM		: 11318066
	Kelas	: 31TI2
--><!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	include_once('autoload.php');
	open_page($configs['web_name']);
	// include_once('welcome_bar.php');
	echo('<a href="add_book.php">add new book</a><br>');
	echo('<a href="index.php">logout</a><br>');
	foreach($books as $kbook => $book){
?>
		<table border="1">
			<?php
			foreach($book as $key => $value){
			?>
			<tr>
				<td><?php echo($key); ?></td>
				<td>:</td>
				<td><?php echo($value); ?></td>
			</tr>
			<?php
			}
			?>
		</table><br>
		<?php
	}
	?>
	<?php
	// close_page();
?>
