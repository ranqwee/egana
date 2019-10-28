<?php
	$Id_Note = $_POST['Id_Note'];
    $Id_User = $_POST['Id_User'];
	$Tanggal = $_POST['Tanggal'];
	$Periode = $_POST['Periode'];
	$Divisi = $_POST['Divisi'];
	$Saran = $_POST['Saran'];

    $sql = mysql_query("INSERT INTO note(Id_Note, Id_User, Tanggal, Periode, Divisi, Saran) VALUES ('$Id_Note', '$Id_User', '$Tanggal', '$Periode', '$Divisi', '$Saran')");
    if($sql){
    echo "<script>alert('data telah tersimpan');</script>";
    echo "<script>window.location='index.php?halaman=notesaran';</script>";
}
?>