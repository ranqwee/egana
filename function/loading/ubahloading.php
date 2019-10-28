<h3> Ubah Detail Loading Unloading </h3>
<?php
$Id_Loun = $_GET['Id_Loun'];
$sql = mysql_query("SELECT * FROM load_unload JOIN loun ON load_unload.Id_LO = loun.Id_LO JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Id_Loun='$Id_Loun'");
if($data = mysql_fetch_array($sql)){
	$Id_Loun = $data['Id_Loun'];
    $Id_LO = $data['Id_LO'];
	$No_Lot = $data['No_Lot'];
	$Jam_Load = $data['Jam_Load'];
	$Proses = $data['Proses'];
	$Jam_Un = $data['Jam_Un'];
	$Jumlah = $data['Jumlah'];
	$Jumlah_Tipis = $data['Jumlah_Tipis'];
	$Jumlah_Meler = $data['Jumlah_Meler'];
	$Jumlah_Kotor = $data['Jumlah_Kotor'];
	$Jumlah_Serabut = $data['Jumlah_Serabut'];
	$Jumlah_Lecet = $data['Jumlah_Lecet'];
	$Jumlah_Bintik = $data['Jumlah_Bintik'];
	$Keterangan = $data['Keterangan'];
    }
?>
<form action="index.php?halaman=ubahloading" method="POST">
	<div class="form-group">
	<table width='100%' align='center'>
    <tr>
       <td width='50%'>
	   <input type="hidden" name="Id_Loun" value="<?php echo $Id_Loun;?>">
	   <br><label>ID Loading-Unloading</label><br>
        <input type="text" name="Id_LO" readonly value="<?php echo $Id_LO ; ?>" class="form-control"><br>
	   	<label>Jam Loading</label><br>
        <input type="time" name="Jam_Load" value="<?php echo $Jam_Load ; ?>" class="form-control"><br>
		<label>No Lot</label><br>
        <input type="text" name="No_Lot" value="<?php echo $No_Lot ; ?>" class="form-control"><br>
		<label>Jam Unloading</label><br>
        <input type="time" name="Jam_Un" value="<?php echo $Jam_Un ; ?>" class="form-control"><br>
		<label>Proses</label>
		<select name="Proses" class="form-control" required>
			<option value=""> ---- Silahkan Pilih ---- </option>
            <option value='F' <?php if($Proses == "F") { echo "selected"; }?>>Material Fresh</option>
            <option value='R1' <?php if($Proses == "R1") { echo "selected"; }?>>Repair Material 1x</option>
			<option value='R2' <?php if($Proses == "R3") { echo "selected"; }?>>Repair Material 2x</option>

        </select><br>
		<label>Jumlah</label><br>
        <input type="text" name="Jumlah" value="<?php echo $Jumlah ; ?>" class="form-control"><br>
		<label>Cat Tipis</label><br>
        <input type="text" name="Jumlah_Tipis" value="<?php echo $Jumlah_Tipis ; ?>" class="form-control"><br></td><td>
		<br><br><label>Cat Meler</label><br>
        <input type="text" name="Jumlah_Meler" value="<?php echo $Jumlah_Meler ; ?>" class="form-control"><br>
		<label>Kotor</label><br>
        <input type="text" name="Jumlah_Kotor" value="<?php echo $Jumlah_Kotor ; ?>" class="form-control"><br>
		<label>Serabut</label><br>
        <input type="text" name="Jumlah_Serabut" value="<?php echo $Jumlah_Serabut ; ?>" class="form-control"><br>
		<label>Lecet</label><br>
        <input type="text" name="Jumlah_Lecet" value="<?php echo $Jumlah_Lecet ; ?>" class="form-control"><br>
		<label>Bintik</label><br>
        <input type="text" name="Jumlah_Bintik" value="<?php echo $Jumlah_Bintik ; ?>" class="form-control"><br>
		<label>Keterangan</label><br>
        <textarea name="Keterangan" rows="7" value="<?php echo $Keterangan ; ?>" class="form-control"><?php echo $Keterangan ; ?></textarea><br>
        </td></table><br><br>
	<tr></tr><a href="index.php?halaman=dataloading&id=<?php echo $Id_LO ;?>" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check-square"></i> Simpan</button><br><br>
	</div>
</form>