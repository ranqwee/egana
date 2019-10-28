<?php
    $Id_Produk = $_POST['Id_Produk'];
    $Nama_Produk = $_POST['Nama_Produk'];
	$Tipe = $_POST['Tipe'];
	
		$cek=mysql_num_rows(mysql_query
             ("SELECT Id_Produk, Nama_Produk, Tipe FROM produk 
               WHERE Id_Produk='$_POST[Id_Produk]'"));
    if ($cek > 0){
        echo "<script>alert('Komponen sudah ada');</script>";
        echo "<script>window.location='index.php?halaman=tambahproduk';</script>";
    }
    else{

    $sql = mysql_query("INSERT INTO produk (Id_Produk, Nama_Produk, Tipe) VALUES ('$Id_Produk', '$Nama_Produk', '$Tipe')");
    if($sql){
    echo "<script>alert('Data Produk Berhasil Disimpan');</script>";
    echo "<script>window.location='index.php?halaman=dataproduk';</script>";
	} }
?>