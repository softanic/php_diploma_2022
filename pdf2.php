<?php


require 'fpdf.php';
$pdf=new fpdf("P","mm","A4");
$pdf->addPage();
$pdf->setfont("Arial","b","16");
$pdf->cell(80,20,"hello world",1,0,"C",0,"google.com");
$pdf->ln();
$pdf->Image("info.png",null,null,150,100);
$pdf->cell(100,20,"hello world",1,0,"C",0,"google.com");
$pdf->SetLineWidth(5);
$pdf->SetDrawColor(150);
$pdf->line(0,100,500,100);
$pdf->cell(50,120,$pdf->pageNo(),1,1,"C",1);
$pdf->cell(50,120,$pdf->pageNo(),1,1,"C",1);
echo $pdf->output("i","demo.pdf");