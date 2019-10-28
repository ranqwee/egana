<div class="panel-body">
<h3> Tambah Data Loading-Unloading </h3>
<form action="index.php?halaman=saveloun" method="POST">
    <div class="form-group">
        <input type="hidden" name="Id_LO" class="form-control">
		<input type="hidden" name="Id_User" value="<?php echo $_SESSION['Id_User'] ?>" class="form-control">
		<input type="hidden" name="Status" value="Menunggu Persetujuan" class="form-control">
    </br>
        <label>Tanggal</label>
        <input type="date" name="Tanggal" class="form-control" required maxlength="7">
    </br>
	<label>Nama Produk</label>
        <select name="Id_Produk" class="form-control" required>
            <option value=""></option>
                    <?php
                    include 'connect.php';
                    $sqlopt = "SELECT Id_Produk,Tipe FROM produk order by Id_Produk";
                    $queryopt = mysql_query($sqlopt);
                    while($result=mysql_fetch_array($queryopt))
					{
                        if($result['Id_Produk'] == $row['Tipe']) {
                        echo "<option value='$result[Id_Produk]' selected='selected'>$result[Tipe]</option>";
                        }else{
                        echo "<option value='$result[Id_Produk]'>$result[Tipe]</option>";
                        }
                    }	
                    ?>                  
        </select></br>
 
	<a href="index.php?halaman=dataloun" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check-circle"></i> Simpan</button>
</form>   </div></div>