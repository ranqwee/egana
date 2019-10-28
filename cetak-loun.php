<?php
include "connect.php";
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database
$tgl_awal=$_GET['dt1cari'];
$tgl_akhir=$_GET['dt2cari'];
$garis = '-';
$result=mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE loun.Status='Disetujui' and Tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' ORDER BY Tipe, Tanggal ASC"); 

//Inisiasi untuk membuat header kolom
$column_tgl_awal = "";
$column_tgl_akhir = "";
$column_Id_LO = "";
$column_Nama_Produk = "";
$column_Tipe = "";
$column_Tanggal = "";
$column_Total_Tipis = "";
$column_Total_Meler = "";
$column_Total_Serabut = "";
$column_Total_Lecet = "";
$column_Total_Kotor = "";
$column_Total_Bintik = "";
$column_Total_NG = "";
$column_Total_OK = "";


//For each row, add the field to the corresponding column
while($rows = mysql_fetch_array($result))
{
	$tgl_awal=$_GET['dt1cari'];
	$tgl_akhir=$_GET['dt2cari'];
    $Id_LO=$rows['Id_LO'];
	$Nama_Produk=$rows['Nama_Produk'];
	$Tipe=$rows['Tipe'];
	$Tanggal=$rows['Tanggal'];
	$Total_Tipis=$rows['Total_Tipis'];
	$Total_Meler=$rows['Total_Meler'];
	$Total_Serabut=$rows['Total_Serabut'];
	$Total_Lecet=$rows['Total_Lecet'];
	$Total_Kotor=$rows['Total_Kotor'];
	$Total_Bintik=$rows['Total_Bintik'];
	$Total_NG=$rows['Total_NG'];
	$Total_OK=$rows['Total_OK'];
	
	$column_tgl_awal = $tgl_awal ;
	$column_tgl_akhir = $tgl_akhir ;
	$column_Id_LO = $column_Id_LO.$Id_LO."\n";
    $column_Nama_Produk = $column_Nama_Produk.$Nama_Produk."\n";
	$column_Tipe = $column_Tipe.$Tipe."\n";
	$column_Tanggal = $column_Tanggal.$Tanggal."\n";
	$column_Total_Tipis = $column_Total_Tipis.$Total_Tipis. "\n";
	$column_Total_Meler = $column_Total_Meler.$Total_Meler. "\n";
	$column_Total_Serabut = $column_Total_Serabut.$Total_Serabut."\n";
	$column_Total_Lecet = $column_Total_Lecet.$Total_Lecet."\n";
    $column_Total_Kotor = $column_Total_Kotor.$Total_Kotor."\n";
	$column_Total_Bintik = $column_Total_Bintik.$Total_Bintik."\n";
    $column_Total_NG = $column_Total_NG.$Total_NG."\n";
    $column_Total_OK = $column_Total_OK.$Total_OK."\n";
	
//Create a new PDF file
$pdf = new FPDF('L','mm',array(210,385)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar

$pdf->Image('images/kumase.JPG',5,5,-115);
$pdf->SetFont('Arial','B',23);
$pdf->Cell(150);
$pdf->Cell(80,10,'Quality Monthly Report',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',13);
$pdf->Cell(150);
$pdf->Cell(80,10,'PT Kurnia Manunggal Sejahtera',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Periode_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,360);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Periode_position);
$pdf->SetX(5);
$pdf->Cell(375,8,'Periode		:',1,0,'L',1);

$pdf->SetY($Y_Fields_Periode_position);
$pdf->SetX(30);
$pdf->Cell(30,8,$column_tgl_awal,2,'C');
$pdf->SetX(60);
$pdf->Cell(15,8,$garis,2,'C');
$pdf->SetX(75);
$pdf->Cell(30,8,$column_tgl_akhir,2,'C');
//Fields Name position
$Y_Fields_Name_position = 38;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,360);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(30,8,'ID Load-Unload',1,0,'C',1);
$pdf->SetX(35);
$pdf->Cell(35,8,'Nama Produk',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(35,8,'Tipe',1,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(35,8,'Tanggal',1,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(30,8,'Tipis',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(30,8,'Meler',1,0,'C',1);
$pdf->SetX(200);
$pdf->Cell(30,8,'Minyak',1,0,'C',1);
$pdf->SetX(230);
$pdf->Cell(30,8,'Baret',1,0,'C',1);
$pdf->SetX(260);
$pdf->Cell(30,8,'Kotor',1,0,'C',1);
$pdf->SetX(290);
$pdf->Cell(30,8,'Bintik',1,0,'C',1);
$pdf->SetX(320);
$pdf->Cell(30,8,'Total NG',1,0,'C',1);
$pdf->SetX(350);
$pdf->Cell(30,8,'Total OK',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 46;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(30,6,$column_Id_LO,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(35);
$pdf->MultiCell(35,6,$column_Nama_Produk,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(35,6,$column_Tipe,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(105);
$pdf->MultiCell(35,6,$column_Tanggal,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,6,$column_Total_Tipis,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,6,$column_Total_Meler,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(200);
$pdf->MultiCell(30,6,$column_Total_Serabut,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(230);
$pdf->MultiCell(30,6,$column_Total_Lecet,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(260);
$pdf->MultiCell(30,6,$column_Total_Kotor,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(290);
$pdf->MultiCell(30,6,$column_Total_Bintik,1,'C');


$pdf->SetY($Y_Table_Position);
$pdf->SetX(320);
$pdf->MultiCell(30,6,$column_Total_NG,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(350);
$pdf->MultiCell(30,6,$column_Total_OK,1,'C');

$pdf->Output();
?>
