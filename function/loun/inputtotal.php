<h3>Ubah Status Loading Unloading</h3>
<?php
$Id_LO= $_GET['Id_LO'];
$sql = mysql_query("SELECT load_unload.Id_LO, loun.Tanggal, SUM(load_unload.Jumlah_Tipis) AS Tipis, 
SUM(load_unload.Jumlah_Meler) AS Meler, SUM(load_unload.Jumlah_Serabut) AS Serabut, SUM(load_unload.Jumlah_Lecet) AS Lecet, 
SUM(load_unload.Jumlah_Kotor) AS Kotor, SUM(load_unload.Jumlah_Bintik) AS Bintik, SUM(load_unload.Jumlah) AS Jumlah FROM load_unload JOIN loun ON load_unload.Id_LO = loun.Id_LO where load_unload.id_LO='$Id_LO'");
if($data = mysql_fetch_array($sql)){
    $Id_LO = $data['Id_LO'];
	$Tanggal = $data['Tanggal'];
	$Total_Tipis = $data['Tipis'];
	$Total_Meler = $data['Meler'];
	$Total_Serabut = $data['Serabut'];
	$Total_Lecet = $data['Lecet'];
	$Total_Kotor = $data['Kotor'];
	$Total_Bintik = $data['Bintik'];
	$Total_NG = $data['Tipis']+$data['Meler']+$data['Serabut']+$data['Kotor']+$data['Lecet']+$data['Bintik'];
	$Total_OK = $data['Jumlah']-$Total_NG;
	}
?>
<form action="index.php?halaman=savetotal" method="POST">
	<div class="form-group">
		<table width="70%"><td>
		<br><label>ID LO</label>
		<input type="text" name="Id_LO" class="form-control" 
		readonly value="<?php echo $Id_LO ; ?>"> </br>
		<label>Tanggal</label>
		<input type="date" name="Tanggal" class="form-control" 
		readonly value="<?php echo $Tanggal ; ?>"> </br>
		<label>Total Tipis</label>
		<input type="text" name="Total_Tipis" value="<?php echo $Total_Tipis ; ?>" readonly class="form-control"> </br>
		<label>Total Meler</label>
		<input type="text" name="Total_Meler" value="<?php echo $Total_Meler ; ?>" readonly class="form-control"> </br>
		<label>Total Serabut</label>
		<input type="text" name="Total_Serabut" value="<?php echo $Total_Serabut ; ?>" readonly class="form-control"></td><td>
		<br><br><label>Total Lecet</label>
		<input type="text" name="Total_Lecet" value="<?php echo $Total_Lecet ; ?>" readonly class="form-control"> </br>
		<label>Total Kotor</label>
		<input type="text" name="Total_Kotor" value="<?php echo $Total_Kotor ; ?>" readonly class="form-control"> </br>
		<label>Total Bintik</label>
		<input type="text" name="Total_Bintik" value="<?php echo $Total_Bintik ; ?>" readonly class="form-control"> </br>
		<label>Total NG</label>
		<input type="text" name="Total_NG" value="<?php echo $Total_NG ; ?>" readonly class="form-control"> </br>
		<label>Total OK</label>
		<input type="text" name="Total_OK" value="<?php echo $Total_OK ; ?>" readonly class="form-control"> </br></td>
		</table>
	<br>
	<tr></tr><a href="index.php?halaman=dataloun" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check-circle"></i> Simpan</button>
</div></form>