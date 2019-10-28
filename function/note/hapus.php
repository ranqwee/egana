<?php
	$Id_Note = $_GET['Id_Note'];
	$sql = mysql_query ("DELETE FROM note WHERE Id_Note = '$Id_Note'");
	if($sql){
    echo "<script>alert('data telah dihapus');</script>";
    echo "<script>window.location='index.php?halaman=notesaran';</script>";
}
?>