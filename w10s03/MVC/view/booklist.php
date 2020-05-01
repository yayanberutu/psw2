<!--
	Nama	: Yosepri Disyandro Berutu
	NIM		: 11318066
	Kelas	: 31TI2
-->
<html>
	<head></head>
	<body>
		<table>
			<tr>
				<td><b>Title</b></td>
				<td><b>Author</b></td>
				<td><b>Description</b></td>
			</tr>
			<?php
				foreach ($books as $title => $book){
					echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
				}
			?>
		</table>
	</body>
</html>