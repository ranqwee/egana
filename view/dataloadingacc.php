<?php
include('connect.php');
$no=0;
$apa=0;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Loading-Unloading</h3>
                        </div>
                        <div class="panel-body">
                        <a href="index.php?halaman=tambahloading" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah </a>
                        </br></br>
<form name="form1" method="post" action="">
				<label>Tanggal</label>
				<input type="date" name="dt1cari">
   </td>
		</tr>
		<input type="submit" name="button" id="button" value="CARI" class="btn btn-info">
</br>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr bgcolor="#f2f2f2">
		<th style='min-width:10px; vertical-align:middle' rowspan="2">No</th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2">Tanggal</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">Nama Produk</th>
			 <th style='min-width:10px; vertical-align:middle' rowspan="2">Tipe</th>
			<th colspan='5' style='min-width:20px'>Kerusakan</th>
			<th colspan='2' style='min-width:20px'>Jumlah</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Total</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">Aksi</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Status</th>
        </tr>
		<tr bgcolor="#f2f2f2">
<th><small>Cat Tipis</small></th>
<th><small>Cat Meler</small></th>
<th><small>Kotor</small></th>
<th><small>Minyak</small></th>
<th><small>Baret</small></th>
<th><small>NG</small></th>
<th><small>OK</small></th><tr>
    </thead>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM checksheet JOIN produk ON checksheet.Id_Produk = produk.Id_Produk WHERE kode_produksi LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM checksheet JOIN produk ON checksheet.Id_Produk = produk.Id_Produk order by kode_produksi asc");
        }
        while($data=mysql_fetch_array($us))
        {
			$apa=$data['Jumlah_NG']+$data['Jumlah_OK'];
			$no++;
        ?>
        <tr>
			<td><b><?php echo $no ; ?></b></td>
			<td><?php echo $data['Tanggal'] ?></td>
			<td><?php echo $data['Nama_Produk'] ?></td>
            <td><?php echo $data['Tipe'] ?></td>
			<td><?php echo $data['Jumlah_Tipis'] ?></td>
			<td><?php echo $data['Jumlah_Meler'] ?></td>
			<td><?php echo $data['Jumlah_Kotor'] ?></td>
			<td><?php echo $data['Jumlah_Minyak'] ?></td>
			<td><?php echo $data['Jumlah_Baret'] ?></td>
			<td><?php echo $data['Jumlah_NG'] ?></td>
			<td><?php echo $data['Jumlah_OK'] ?></td>
			<td><?php echo $apa ; ?></td>
            <td>
                <a href="index.php?halaman=ubahdataloading&Kode_Produksi=<?php echo $data['Kode_Produksi'] ;?>" class="btn btn-success	"><i class="fa fa-pencil"></i> Ubah</a>
                <a href="index.php?halaman=hapusloading&Kode_Produksi=<?php echo $data['Kode_Produksi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-warning"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</form>     
</div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>