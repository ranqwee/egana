<h3>Ubah Produk</h3>
<?php
$Id_Produk = $_GET['Id_Produk'];
$sql = mysql_query("SELECT * from produk WHERE Id_Produk='$Id_Produk'");
if($data = mysql_fetch_array($sql)){
    $Id_Produk = $data['Id_Produk'];
    $Nama_Produk = $data['Nama_Produk'];
	$Tipe = $data['Tipe'];
	}
?>
<form action="index.php?halaman=ubahproduk" method="POST">
	<div class="form-group">
		<br><label>ID Material</label>
		<input type="text" name="Id_Produk" class="form-control" 
		readonly value="<?php echo $Id_Produk ; ?>"> </br>
		<label>Nama Produk</label>
		<input type="text" name="Nama_Produk" class="form-control" 
		value="<?php echo $Nama_Produk ; ?>">
	<br>
	<label>Tipe</label>
		<input type="text" name="Tipe" class="form-control" 
		value="<?php echo $Tipe ; ?>">
	<br><br>
	<tr></tr><a href="index.php?halaman=dataproduk" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check-circle"></i> Simpan</button>
</div></form>