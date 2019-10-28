<script language="javascript">
 function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
   
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }

</script>


<h3> Tambah Produk</h3>
<form action="index.php?halaman=saveproduk" method="POST">
    <div class="form-group">
        <br><label>ID Produk</label>
        <input type="text" name="Id_Produk" class="form-control" required>
    </br>
        <label>Nama Produk</label>
        <input type="text" name="Nama_Produk" class="form-control" required>
    </br>
	 <label>Tipe</label>	
        <input type="text" name="Tipe" class="form-control">
    </br>
		<tr></tr><a href="index.php?halaman=dataproduk" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
    <tr></tr><button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check-circle"></i> Simpan</button>
    </div>

</form>