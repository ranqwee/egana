<?php
	$Id_Loun = $_POST['Id_Loun'];
    $Id_LO = $_POST['Id_LO'];
	$No_Lot = $_POST['No_Lot'];
	$Jam_Load = $_POST['Jam_Load'];
	$Proses = $_POST['Proses'];
	$Jam_Un = $_POST['Jam_Un'];
	$Jumlah = $_POST['Jumlah'];
	$Jumlah_Tipis = $_POST['Jumlah_Tipis'];
	$Jumlah_Meler = $_POST['Jumlah_Meler'];
	$Jumlah_Kotor = $_POST['Jumlah_Kotor'];
	$Jumlah_Serabut = $_POST['Jumlah_Serabut'];
	$Jumlah_Lecet = $_POST['Jumlah_Lecet'];
	$Jumlah_Bintik = $_POST['Jumlah_Bintik'];
	$Keterangan = $_POST['Keterangan'];



$sql = mysql_query ("UPDATE load_unload SET Id_LO='$Id_LO', No_Lot='$No_Lot', Jam_Load='$Jam_Load', Proses='$Proses',  Jam_Un='$Jam_Un', Jumlah='$Jumlah', Jumlah_Tipis='$Jumlah_Tipis', Jumlah_Meler='$Jumlah_Meler', Jumlah_Kotor='$Jumlah_Kotor', Jumlah_Serabut='$Jumlah_Serabut', Jumlah_Lecet='$Jumlah_Lecet', Jumlah_Bintik='$Jumlah_Bintik', Keterangan='$Keterangan' WHERE Id_Loun='$Id_Loun'");
    if($sql){
    echo '<script language="javascript">alert("Data Berhasil Diubah"); 
	window.location.href="index.php?halaman=dataloading&id='.$Id_LO.'"</script>';
}
?>