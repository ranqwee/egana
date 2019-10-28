<?php
	$Id_Loun = $_GET['Id_Loun'];
	$sql = mysql_query ("DELETE FROM load_unload WHERE Id_Loun = '$Id_Loun'");
	if($sql){
	echo '<script language="javascript">alert("Data berhasil dihapus !"); window.history.back();</script>';
}
?>