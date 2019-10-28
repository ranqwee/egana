<?php
    $Id_LO = $_POST['Id_LO'];
    $Id_User = $_POST['Id_User'];
    $Status = $_POST['Status'];
    $Tanggal = $_POST['Tanggal'];
	$Id_Produk = $_POST['Id_Produk'];

    $sql = mysql_query("INSERT INTO loun (Id_LO, Id_User, Status, Tanggal, Id_Produk) VALUES ('$Id_LO', '$Id_User', '$Status', '$Tanggal', '$Id_Produk')");
    if($sql){
    echo "<script>alert('data telah tersimpan');</script>";
    echo "<script>window.location='index.php?halaman=dataloun';</script>";
}
?>