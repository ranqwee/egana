<?php
    $id_kerusakan = $_POST['id_kerusakan'];
    $jenis_kerusakan = $_POST['jenis_kerusakan'];
	
$sql = mysql_query ("UPDATE kerusakan SET jenis_kerusakan='$jenis_kerusakan' WHERE id_kerusakan='$id_kerusakan'");
    if($sql){
    echo "<script>alert('data berhasil diubah');</script>";
    echo "<script>window.location='index.php?halaman=datakerusakan';</script>";
}
?>