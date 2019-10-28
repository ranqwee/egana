<?php
include('connect.php');
$no=0;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3> Data User </h3>
                        </div>
                        <div class="panel-body"></br>
                        <a href="index.php?halaman=tambahuser" class="btn btn-primary"><i class="fa fa-share-square-o"></i> Tambah User </a>
                        </br></br>
                            <div class="table-responsive">
</br>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr bgcolor="#f2f2f2">
			<th>No</th>
			<th>ID User</th>
            <th>Nama Lengkap</th>
			<th>Username</th>
            <th>Password</th>
			<th>Jabatan</th>
			<th>Aksi</th>
        </tr>
    </tread>
    <tbody>
        <?php
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM user WHERE Nama_Lengkap LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM user order by Id_User asc");
        }
        while($data=mysql_fetch_array($us))
        {
			$no++;
        ?>
        <tr>
		<td align="center"><b><?php echo $no ; ?></b></td>
		<td><?php echo $data['Id_User'] ?></td>
		<td><?php echo $data['Nama_Lengkap'] ?></td>
            <td><?php echo $data['Username'] ?></td>
			<td><?php echo $data['Password'] ?></td>
			<td><?php echo $data['Jabatan'] ?></td>
            <td>
                <a href="index.php?halaman=ubahdatauser&Id_User=<?php echo $data['Id_User']; ?>" class="btn btn-default"><i class="fa fa-edit"></i> Ubah</a>
                <a href="index.php?halaman=hapususer&Id_User=<?php echo $data['Id_User']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
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