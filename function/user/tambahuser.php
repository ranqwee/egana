<h3> Tambah User </h3>
<form action="index.php?halaman=saveuser" method="POST">
    <div class="form-group">
        <input type="hidden" name="Id_User"><br>
		        <label>Nama Lengkap</label>
        <input type="text" name="Nama_Lengkap" class="form-control" required>
    </br>
        <label>Username</label>
        <input type="text" name="Username" class="form-control" required>
    </br>
         <label>Password</label>
        <input type="text" name="Password" class="form-control" required>
    </br>
        <label>Jabatan</label>
        <select name="Jabatan" class="form-control" required>
            <option value=""></option>
			<option value="Operator">Operator QCL</option>
			<option value="QC Office">QC Office</option>
            <option value="Leader Produksi">Leader Produksi</option>
			<option value="Manajer Produksi">Manajer Produksi</option>
			<option value="Foreman">Foreman</option>
        </select>
        <br>
    
	<a href="index.php?halaman=datauser" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check-circle"></i> Simpan</button>
</form></div>