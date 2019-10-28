<?php
	$Id_User=$_GET['Id_User'];
	$sql = mysql_query ("DELETE FROM user WHERE Id_User='$Id_User'");
	if($sql){
    echo "<script>alert('Data User Berhasil Dihapus');</script>";
    echo "<script>window.location='index.php?halaman=datauser';</script>";
}
?>