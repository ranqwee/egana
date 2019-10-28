<?php
	$Id_Produk = $_GET['Id_Produk'];
	$sql = mysql_query ("DELETE FROM produk WHERE Id_Produk = '$Id_Produk'");
	if($sql){
    echo "<script>alert('Data Produk Berhasil Dihapus');</script>";
    echo "<script>window.location='index.php?halaman=dataproduk';</script>";
}
?>