<?php
	$id_kerusakan	= $_POST['id_kerusakan'];
    $jenis_kerusakan	= $_POST['jenis_kerusakan'];
	$kategori_kerusakan	= $_POST['kategori_kerusakan'];

    $sql = mysql_query("INSERT INTO kerusakan (id_kerusakan, jenis_kerusakan, kategori_kerusakan) VALUES ('$id_kerusakan', '$jenis_kerusakan', '$kategori_kerusakan')");
    if($sql){
    echo "<script>alert('data telah tersimpan');</script>";
    echo "<script>window.location='index.php?halaman=datakerusakan';</script>";
}
?>