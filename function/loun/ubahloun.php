<h3>Ubah Status Loading Unloading</h3>
<?php
$Id_LO= $_GET['Id_LO'];
$sql = mysql_query("SELECT * from loun JOIN user ON loun.Id_User = user.Id_User WHERE Id_LO='$Id_LO'");
if($data = mysql_fetch_array($sql)){
    $Id_LO = $data['Id_LO'];
    $Id_User = $data['Id_User'];
	$Tanggal = $data['Tanggal'];
	$Status = $data['Status'];	
	}
?>
<form action="index.php?halaman=ubahloun" method="POST">
	<div class="form-group">
		<table width="50%"><td>
		<label>ID LO</label>
		<input type="text" name="Id_LO" class="form-control" 
		readonly value="<?php echo $Id_LO ; ?>"> </br>
		<label>Tanggal</label>
		<input type="date" name="Tanggal" class="form-control" 
		readonly value="<?php echo $Tanggal ; ?>"> </br>
		<label>Status</label>
		<select name="Status" class="form-control" required>
			<option value=""> ---- Silahkan Pilih ---- </option>
            <option value='Menunggu Persetujuan' <?php if($Status == "Menunggu Persetujuan") { echo "selected"; }?>>Menunggu Persetujuan</option>
            <option value='Disetujui' <?php if($Status == "Disetujui") { echo "selected"; }?>>Disetujui</option>
        </select></td></table>
	<br>
	<tr></tr><a href="index.php?halaman=lounfor" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check-circle"></i> Simpan</button>
</div></form>