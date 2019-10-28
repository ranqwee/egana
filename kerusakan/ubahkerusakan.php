<h2>Ubah Jenis Kerusakan</h2>
<?php
$id_kerusakan = $_GET['id_kerusakan'];
$sql = mysql_query("SELECT * from kerusakan WHERE id_kerusakan='$id_kerusakan'");
if($data = mysql_fetch_array($sql)){
    $id_kerusakan = $data['id_kerusakan'];
    $jenis_kerusakan = $data['jenis_kerusakan'];
	}
?>
<form action="index.php?halaman=ubahkerusakan" method="POST">
	<div class="form-group">
		<label>ID Kerusakan</label>
		<input type="text" name="id_kerusakan" name="id_kerusakan" class="form-control" 
		readonly value="<?php echo $id_kerusakan ; ?>"> </br>
		<label>Jenis Kerusakan</label>
		<input type="text" name="jenis_kerusakan" name="jenis_kerusakan" class="form-control" 
		value="<?php echo $jenis_kerusakan ; ?>">
	<br><br>
	<tr></tr><a href="index.php?halaman=datakerusakan" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check"></i> Simpan</button>
</div></form>