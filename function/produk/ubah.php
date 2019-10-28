<?php
    $Id_Produk = $_POST['Id_Produk'];
    $Nama_Produk = $_POST['Nama_Produk'];
	$Tipe = $_POST['Tipe'];
	
$sql = mysql_query ("UPDATE produk SET Nama_Produk='$Nama_Produk', Tipe='$Tipe' WHERE Id_Produk='$Id_Produk'");
    if($sql){
    echo "<script>alert('Data Produk Berhasil Diubah');</script>";
    echo "<script>window.location='index.php?halaman=dataproduk';</script>";	
}
?>