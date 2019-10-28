<?php
include('connect.php');
$no=0;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Note Saran Kebijakan Produksi</h3>
                        </div>
                        <div class="panel-body">
                        
<form name="form1" method="post" action="">
    <input type="date" name="tcari" id="tcari">
    <input type="submit" name="button" id="button" value="CARI" class="btn btn-success">
                            <div class="table-responsive">
</br>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr bgcolor="#f2f2f2">
			<th>No</th>
			<th>No Note</th>
			<th>Tanggal</th>
			<th>Pembuat</th>
            <th>Untuk Periode</th>
			<th>Divisi</th>
			<th>Saran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM note JOIN user ON note.Id_User = user.Id_User WHERE Tanggal LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM note JOIN user ON note.Id_User = user.Id_User order by Id_Note asc");
        }
        while($data=mysql_fetch_array($us))
        {
			$no++;
        ?>
        <tr>
            <td align="center"><b><?php echo $no ; ?></b></td>
			<td><?php echo $data['Id_Note'] ?></td>
			<td><?php echo $data['Tanggal'] ?></td>
			<td><?php echo $data['Nama_Lengkap'] ?></td>
            <td><?php echo $data['Periode'] ?></td>	
			<td><?php echo $data['Divisi'] ?></td>
			<td><?php echo $data['Saran'] ?></td>
            <td>
                <a href="javascript:void(0);" plain="true" onclick="window.open('cetak-saran.php?Id_Note=<?php echo $data['Id_Note']?>','size=1200','height=1200','scrollbars=yes','resizeable=no')" class="btn btn-default"><i class="fa fa-print"></i> Cetak</a>
                <a href="index.php?halaman=hapusnote&Id_Note=<?php echo $data['Id_Note']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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