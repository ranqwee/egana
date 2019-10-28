<?php
	$Id_LO = $_POST['Id_LO'];
	$Jam_Load = $_POST['Jam_Load'];
    $No_Lot = $_POST['No_Lot'];
	$Jam_Un = $_POST['Jam_Un'];
	$Proses = $_POST['Proses'];
	$Jumlah = $_POST['Jumlah'];	
	$Jumlah_Tipis = $_POST['Jumlah_Tipis'];
	$Jumlah_Meler = $_POST['Jumlah_Meler'];
	$Jumlah_Kotor = $_POST['Jumlah_Kotor'];
	$Jumlah_Serabut = $_POST['Jumlah_Serabut'];
	$Jumlah_Lecet = $_POST['Jumlah_Lecet'];
	$Jumlah_Bintik = $_POST['Jumlah_Bintik'];
	$Keterangan = $_POST['Keterangan'];
	
    if ($Jam_Un < $Jam_Load){
        echo '<script language="javascript">alert("Jarak Antara Jam Loading dan Unloading kurang dari 3 jam"); 
	window.location.href="index.php?halaman=dataloading&id='.$Id_LO.'"</script>';
}
    else{
	
    $sql = mysql_query("INSERT INTO load_unload (Id_LO, Jam_Load, No_Lot, Jam_Un, Proses, Jumlah, Jumlah_Tipis, Jumlah_Meler, Jumlah_Kotor, Jumlah_Serabut, Jumlah_Lecet, Jumlah_Bintik, Keterangan) 
	VALUES ('$Id_LO', '$Jam_Load', '$No_Lot', '$Jam_Un', '$Proses', '$Jumlah', '$Jumlah_Tipis', '$Jumlah_Meler', '$Jumlah_Kotor', '$Jumlah_Serabut', '$Jumlah_Lecet', '$Jumlah_Bintik', '$Keterangan')");
    if($sql){
    echo '<script language="javascript">alert("Data Telah Tersimpan"); 
	window.location.href="index.php?halaman=dataloading&id='.$Id_LO.'"</script>';
}
?>
	<?php } ?>