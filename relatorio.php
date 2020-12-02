<?php

	$conn = new mysqli("localhost","root","","relatorios");	
	$sql = "SELECT * FROM cadastro WHERE id=".$_REQUEST["id"];	
	$res = $conn->query($sql);
	$row = $res->fetch_object();
	$nome = $row->nome;

	$email = $row->email;
	$fone = $row->fone;	
	
	require('fpdf.php');  //Chamando PDF

	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	$pdf->SetXY(10,10);
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(11,80,145);
	$pdf->Cell(0,10,$nome,0,0,'L');
	
	$pdf->SetXY(10,10);
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,30,$email);
	
	$pdf->SetXY(10,10);
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(255,0,0);
	$pdf->Cell(0,50,$fone);
	
	$pdf->Image('Koala.jpg',10,40,50,30);
	
	$pdf->Output();
	

?>





