<?php
require 'fpdf.php';
$pdf=new FPDF("P","mm","a4");

$pdf->AddPage();
$pdf->SetFont("arial","B","15");
$pdf->cell(100,20,"Welcome",1,1,"C",0,"http://google.com");

$pdf->cell(100,20,"Welcome",0);
$pdf->ln();
$pdf->SetTextColor(255,0,0);
$pdf->image("info.png",100,100,50,150);
$pdf->SetLineWidth(5);
$pdf->SetDrawColor(0,0,255);
$pdf->line(0,150,250,150);
$pdf->cell(100,20,$pdf->PageNo(),0);


echo $pdf->Output("I","abc.pdf");

