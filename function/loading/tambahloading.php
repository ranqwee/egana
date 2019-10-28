
<div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li><a href="#detail" data-toggle="tab">Tambah Detail</a>
                                </li></ul>
<div class="tab-content">
								<div class="tab-pane fade in active" id="all">
										<br>
									</div>
                                <div class="tab-pane fade" id="detail">
								<div class="panel panel-default">
								<p>
<form action="index.php?halaman=saveloading" method="POST">
    <div class="form-group">
	<table width='100%' align='center'>
    <tr>
       <td width='50%'>
	   <input type="hidden" name="Id_LO" value="<?php echo $id ; ?>">
	   	<label>Jam Loading</label><br>
        <input type="time" name="Jam_Load" class="form-control"><br>
		<label>No Lot</label><br>
        <input type="text" name="No_Lot" class="form-control"><br>
		<label>Jam Unloading</label><br>
        <input type="time" name="Jam_Un" class="form-control"><br>
		<label>Proses</label>
		<select name="Proses" class="form-control" required>
			<option value=""> ---- Silahkan Pilih ---- </option>
            <option value='F'>Material Fresh</option>
            <option value='R1'>Repair Material 1x</option>
			<option value='R2'>Repair Material 2x</option>
        </select><br>
		<label>Jumlah</label><br>
        <input type="text" name="Jumlah" class="form-control"><br>
		<label>Cat Tipis</label><br>
        <input type="text" name="Jumlah_Tipis" class="form-control"><br>
		<label>Cat Meler</label><br>
        <input type="text" name="Jumlah_Meler" class="form-control"><br></td><td>
		<label>Kotor</label><br>
        <input type="text" name="Jumlah_Kotor" class="form-control"><br>
		<label>Serabut</label><br>
        <input type="text" name="Jumlah_Serabut" class="form-control"><br>
		<label>Lecet</label><br>
        <input type="text" name="Jumlah_Lecet" class="form-control"><br>
		<label>Bintik</label><br>
        <input type="text" name="Jumlah_Bintik" class="form-control"><br>
		<label>Keterangan</label><br>
        <textarea name="Keterangan" rows="7" class="form-control"></textarea><br>
        </td></table><br><br>
	<button type="reset" class="btn btn-default" name="Reset"><i class="fa fa-warning"></i> Bersihkan</button>
    <tr></tr><button type="submit" class="btn btn-primary" name="save"><i class="fa fa-check"></i> Simpan</button>
    </div>

</form></p></div></div>