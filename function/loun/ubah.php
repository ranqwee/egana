<?php
    $Id_LO = $_POST['Id_LO'];
	$Tanggal = $_POST['Tanggal'];
	$Status = $_POST['Status'];
	
$sql = mysql_query ("UPDATE loun SET Tanggal='$Tanggal', Status='$Status' WHERE Id_LO='$Id_LO'");
    if($sql){
    echo "<script>alert('data berhasil diubah');</script>";
    echo "<script>window.location='index.php?halaman=lounfor';</script>";
}
?>