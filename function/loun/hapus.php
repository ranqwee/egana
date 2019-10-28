<?php
	$id_periode=$_GET['id_periode'];
	$sql = mysql_query ("DELETE FROM periode WHERE id_periode='$id_periode'");
	if($sql){
    echo "<script>alert('data telah dihapus');</script>";
    echo "<script>window.location='index.php?halaman=dataperiode';</script>";
}
?>