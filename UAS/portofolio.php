	<!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
	-->
<a href="index.php">Home</a>
<?php
include "phpfpdf/fpdf.php";
if (isset($_POST['generate'])) {
	if($_POST['generate']){
		$pdf = new FPDF('l', 'mm', 'A5');
		
		$pdf->AddPage();

		$pdf->SetFont('Arial', 'B', 16);
		
		$pdf->Cell(190, 7,'Curiculum Vitae');

		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(190, 7, 'Untuk Mencari Kerja');

		//memberikan space kebawah agar tidak terlalu rapat
		// $pdf->Cell(10,7, '', 0,1);
		
	    $pdf->Cell(25,6,$_POST['namadepan'],1,0);
	    $pdf->Cell(25,6,$_POST['namabelakang'],1,0);
	    $pdf->Cell(25,6,$_POST['univ'],1,0);
	    $pdf->Cell(25,6,$_POST['major'],1,1);
	    $pdf->Cell(25,6,$_POST['start'],1,1); 
	    $pdf->Cell(25,6,$_POST['end'],1,1);
	    $pdf->Cell(25,6,$_POST['gpa'],1,1);
	$pdf->Output();
	
	}
}

?>



<form method="post">
	<input type="text" name="namadepan" placeholder="Nama Depan"> <br>
	<input type="text" name="namabelakang" placeholder="Nama Belakang"> <br>
	<input type="text" name="univ" placeholder="Universitas"><br>
	<input type="text" name="major" placeholder="Jurusan"><br>
	<input type="date" name="start" placeholder="Tanggal Mulai"> <br>
	<input type="date" name="end" placeholder="Tanggal Selesai"> <br>
	<input type="text" name="gpa" placeholder="IPK"><br>
	<input type="submit" name="generate" value="Buat CV">
</form>