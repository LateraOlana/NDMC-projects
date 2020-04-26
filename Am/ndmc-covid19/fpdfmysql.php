<?php
//SHOW A DATABASE ON A PDF FILE
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE
session_start();
require('fpdf.php');

//Connect to your database


$pdf=new FPDF();
$pdf->AddPage();


$Y_Fields_Name_position = 20;

$Y_Table_Position = 26;

$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','',12);
$pdf->SetY($Y_Table_Position);
$pdf->MultiCell(150,16,"Ethiopian Public Health Institute
NDMC
Internal Data Use-Access Request Form
");
$pdf->MultiCell(180,6,"Name of dataset: "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"Year of conducted: "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"Data type: "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"Level of disaggregation of data:  "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"remarks: "."Name of dataset: ",1);
$pdf->MultiCell(180,6,"Objective "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"Specific_activities "."Name of dataset: ",1);

$pdf->MultiCell(180,6,"data use /study period: "."Name of dataset: ",1);


$pdf->MultiCell(180,6," For The Head, National Data Management Center for health (NDMC) and NDMC expert(s)
The data requested has been acknowledged for the intended use and access to the specified data is approved as per the NDMC data access framework and the letter of authorization agreement for data access expressed below.

Letter of authorization for accessing data from EPHI server
The National Data Management Center, NDMC is mandated broadly to create a coordinated and centralized system that continuously collects, stores, manages, analyzes and synthesizes, and disseminate public health and biomedical data available at EPHI, research institutes, academics and agencies in Ethiopia as well as data that can legitimately be accessed from international data repositories.
The National Data Management Center for health (NDMC) confirms the authorization of." ."Name of dataset: ". "  "."Name of dataset: "." to have full access to "."Name of dataset: "." for the intended use as expressed in the Internal Data Use-Access Request Form
Mr./Mrs."."Name of dataset: ".", hereby confirms to comply with EPHI principles and standards to protect unauthorized access, protect unauthorized data sharing to a third party, ensures confidentiality, protects privacy, ensures data integrity, maximizes data utility, ensures data security and is accountable for breach of duty, while discharging his duties and responsibilities.

",1);
$pdf->MultiCell(100,6,"approved by manager: ",1);
$pdf->MultiCell(100,6,"signed: "."Name of dataset: ". "Name of dataset: ",1);
$pdf->MultiCell(100,6,"Approved Date: "."Name of dataset: ",1);





$pdf->Output();
?>
