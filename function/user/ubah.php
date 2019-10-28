<?php
    $Id_User = $_POST['Id_User'];
	$Nama_Lengkap = $_POST['Nama_Lengkap'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Jabatan = $_POST['Jabatan'];


$sql = mysql_query ("UPDATE user SET Nama_Lengkap='$Nama_Lengkap' , Username='$Username', Password='$Password' , Jabatan='$Jabatan' WHERE Id_User='$Id_User'");
    if($sql){
    echo "<script>alert('Data User berhasil Diubah');</script>";
    echo "<script>window.location='index.php?halaman=datauser';</script>";
}
?>