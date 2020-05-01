<!--
Nama	: Yosepri Disyandro Berutu
NIM		: 11318066
Kelas	: 31TI2
-->
<?php
	include_once('autoload.php');
	// if(!get_session('is_logged_in')){
	// 	redirect($configs['main_page']);
	// }
	// open_page($configs['web_name']);
	// include_once('welcome_bar.php');
	$book = $empty_book;
?>

<form action="add_book_process.php" method="post">
	<table border="1">
		<?php
			foreach($book as $key => $value){
		?>
		<tr>
			<td><?php echo($key); ?></td>
			<td>:</td>
			<?php
				if($key == 'desc'){
			?>
			<td><textarea name="<?php echo($key); ?>"><?php echo($value); ?></textarea></td>
			<?php
				}else{
			?>
			<td><input type="text" name="<?php echo($key); ?>"
				value="<?php echo($value); ?>"></td>
			<?php
			}
		?>
		</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="3"><input type="submit" name="action"value="save"></td>
		</tr>
	</table>
</form>
<?php
// close_page();
?>