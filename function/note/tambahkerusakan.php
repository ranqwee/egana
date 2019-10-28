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


<h3> Tambah Note Saran</h3>
<form action="index.php?halaman=save" method="POST">
    <div class="form-group">
    <input type="hidden" name="id_kerusakan">
	</br>
        <label>Jenis Kerusakan</label>
        <input type="text" name="jenis_kerusakan" class="form-control" required>
    </br>
	<label>Kategori Kerusakan</label>
        <select name="kategori_kerusakan" class="form-control" required>
            <option value=""></option>
			<option value="incoming">Incoming</option>
            <option value="outgoing">Outgoing</option>        
        </select>
    </br>
    </br>
		<tr></tr><a href="index.php?halaman=datakerusakan" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
    <tr></tr><button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check"></i> Simpan</button>
    </div>

</form>