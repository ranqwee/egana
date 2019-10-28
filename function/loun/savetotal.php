<?php
    $Id_LO = $_POST['Id_LO'];
	$Tanggal = $_POST['Tanggal'];
	$Total_Tipis = $_POST['Total_Tipis'];
	$Total_Meler = $_POST['Total_Meler'];
	$Total_Serabut = $_POST['Total_Serabut'];
	$Total_Lecet = $_POST['Total_Lecet'];
	$Total_Kotor = $_POST['Total_Kotor'];
	$Total_Bintik = $_POST['Total_Bintik'];
	$Total_NG = $_POST['Total_NG'];
	$Total_OK = $_POST['Total_OK'];
	
$sql = mysql_query ("UPDATE loun SET Tanggal='$Tanggal', Total_Tipis='$Total_Tipis', Total_Meler='$Total_Meler', Total_Serabut='$Total_Serabut', Total_Lecet='$Total_Lecet', Total_Kotor='$Total_Kotor', Total_Bintik='$Total_Bintik', Total_NG='$Total_NG', Total_OK='$Total_OK' WHERE Id_LO='$Id_LO'");
    if($sql){
    echo "<script>alert('data berhasil diubah');</script>";
    echo "<script>window.location='index.php?halaman=dataloun';</script>";
}
?>