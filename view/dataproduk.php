<?php
include('connect.php');
$no=0;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Data Produk</h3>
                        </div>
                        <div class="panel-body"></br>
                        <a href="index.php?halaman=tambahproduk" class="btn btn-primary"><i class="fa fa-share-square-o"></i> Tambah Produk</a>
                        </br></br>
                            <div class="table-responsive">
</br>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr bgcolor="#f2f2f2">
			<th>No</th>
			<th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Tipe</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM produk WHERE Nama_Produk LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM produk order by Id_Produk asc");
        }
        while($data=mysql_fetch_array($us))
        {
			$no++;
        ?>
        <tr>
		<td align="center"><b><?php echo $no ; ?></b></td>
		<td><?php echo $data['Id_Produk'] ?></td>
		<td><?php echo $data['Nama_Produk'] ?></td>
            <td><?php echo $data['Tipe'] ?></td>
            <td>
                <a href="index.php?halaman=ubahdataproduk&Id_Produk=<?php echo $data['Id_Produk']; ?>" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>
                <a href="index.php?halaman=hapusproduk&Id_Produk=<?php echo $data['Id_Produk']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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