<h3> Ubah User </h3>
<?php
$Id_User = $_GET['Id_User'];
$sql = mysql_query("SELECT * from user where Id_User='$Id_User'");
if($data = mysql_fetch_array($sql)){
    $Id_User = $data['Id_User'];
	$Nama_Lengkap = $data['Nama_Lengkap'];
    $Username = $data['Username'];
    $Password = $data['Password'];
    $Jabatan = $data['Jabatan'];
    }
?>
<form action="index.php?halaman=ubahuser" method="POST">
	<div class="form-group">
		<br><label>ID User</label>
		<input type="text" name="Id_User" name="Id_User" class="form-control" readonly value="<?php echo $Id_User ; ?>"><br>
		<label>Nama Lengkap</label>
		<input type="text" name="Nama_Lengkap" name="Nama_Lengkap" class="form-control" value="<?php echo $Nama_Lengkap ; ?>"></br>
		<label>Username</label>
		<input type="text" name="Username" name="Username" class="form-control" value="<?php echo $Username ; ?>"> </br>
        <label>Password</label>
        <input type="text" name="Password" class="form-control" value="<?php echo $Password ; ?>"><br>
		<label>Jabatan</label>
        <select name="Jabatan" class="form-control" required>
            <option value=""></option>
			<option value='Operator' <?php if($Jabatan == "Operator") { echo "selected"; }?>>Operator QCL</option>
            <option value='QC Office' <?php if($Jabatan == "QC Office") { echo "selected"; }?>>QC Office</option>
            <option value='Leader Produksi' <?php if($Jabatan == "Leader Produksi") { echo "selected"; }?>>Leader Produksi</option>
			<option value='Manajer Produksi' <?php if($Jabatan == "Manajer Produksi") { echo "selected"; }?>>Manajer Produksi</option>
			<option value='Foreman' <?php if($Jabatan == "Foreman") { echo "selected"; }?>>Foreman</option>
        </select>
        <br>
	
	<a href="index.php?halaman=datauser" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
	<button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-check-circle"></i> Simpan</button>
</form></div>