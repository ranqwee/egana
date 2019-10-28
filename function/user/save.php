<?php
	$Id_User = $_POST['Id_User'];
	$Nama_Lengkap = $_POST['Nama_Lengkap'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Jabatan = $_POST['Jabatan'];

    $sql = mysql_query("INSERT INTO user (Id_User, Nama_Lengkap, Username, Password, Jabatan) VALUES ('$Id_User', '$Nama_Lengkap', '$Username', '$Password','$Jabatan')");
    if($sql){
    echo "<script>alert('Data User Berhasil Disimpan');</script>";
    echo "<script>window.location='index.php?halaman=datauser';</script>";
}
?>