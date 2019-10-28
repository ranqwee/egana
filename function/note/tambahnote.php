<?php include('connect.php');
$tgl_awal =$_GET['tgl_awal'];
		$tgl_akhir =$_GET['tgl_akhir'];
		?>

<h3> Tambah Note Saran</h3>
<form action="index.php?halaman=savenote" method="POST">
    <div class="form-group">
	<table width="50%"><td>
    <input type="hidden" name="Id_Note">
	<input type="hidden" name="Id_User" value="<?php echo $_SESSION['Id_User'];?>">
	</br>
        <label>Tanggal Pembuatan Note</label>
        <input type="date" name="Tanggal" class="form-control" required>
    </br>
	<label>Untuk Periode</label>
        <textarea type="text" name="Periode" value="<?php echo $tgl_awal; ?> s.d. <?php echo $tgl_akhir; ?>" readonly class="form-control"><?php echo $tgl_awal; ?> s.d. <?php echo $tgl_akhir; ?></textarea>
    </br>
        <label>Kepada Divisi</label>
        <input type="text" name="Divisi" class="form-control" required>
    </br></td><td>
        <br><label>Saran</label>
        <textarea type="text" name="Saran" rows="10" class="form-control" width="80%" required></textarea>
    </br></td></table>
	
		<tr></tr><a href="index.php?halaman=notesaran" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
    <tr></tr><button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check-circle"></i> Simpan</button>
    </div>

</form>