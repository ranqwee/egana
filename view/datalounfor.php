<?php
include('connect.php');
$no=0;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Data Loading-Unloading</h3>
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
			<th style='min-width:10px; vertical-align:middle' rowspan="2">No</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">No LO</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Nama Part</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Tipe</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Penginput</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">Tanggal</th>
			<th colspan='6' style='min-width:20px'>NG</th>
			<th colspan='2' style='min-width:20px'>Total</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Status</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">Aksi</th>
        </tr>
		<tr bgcolor="#f2f2f2">
            <th><small>Tipis</small></th>
<th><small>Lecet</small></th>
<th><small>Meler</small></th>
<th><small>Kotor</small></th>
<th><small>Serabut</small></th>
<th><small>Bintik</small></th>
<th><small>NG</small></th>
<th><small>OK</small></th></tr>
    </thead>
    <tbody>
        <?php
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Tanggal LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk where loun.Status='Menunggu Persetujuan'");
        }
        while($data=mysql_fetch_array($us))
        {
			$no++;
        ?>
        <tr>
			<td><b><?php echo $no ; ?></b></td>
            <td><?php echo $data['Id_LO'] ?></td>
			<td><?php echo $data['Nama_Produk'] ?></td>
			<td><?php echo $data['Tipe'] ?></td>
			<td><?php echo $data['Nama_Lengkap'] ?></td>
            <td><?php echo $data['Tanggal'] ?></td>
			<td><?php echo $data['Total_Tipis'] ?></td>
            <td><?php echo $data['Total_Lecet'] ; ?></td>
            <td><?php echo $data['Total_Meler'] ?></td>
            <td><?php echo $data['Total_Kotor'] ?></td>
            <td><?php echo $data['Total_Serabut'] ?></td>
            <td><?php echo $data['Total_Bintik'] ?></td>
            <td><?php echo $data['Total_NG'] ?></td>
			<td><?php echo $data['Total_OK'] ?></td>
			<?php if($data['Status'] == "Menunggu Persetujuan") {echo "<td align='center' bgcolor='#FFCC66'><strong>Menunggu Persetujuan</strong></td>";} 
												else if($data['Status'] == "Disetujui") {echo "<td align='center' bgcolor='#66CCCC'><strong>Disetujui</strong></td>";} ?>
            <td>
                <a href="index.php?halaman=dataloadingfor&id=<?php echo $data['Id_LO'] ;?>&id2=<?php echo $data['Tanggal'] ; ?>" class="btn btn-default"><i class="fa fa-play-circle"></i> Detail</a>
				<a href="index.php?halaman=ubahdataloun&Id_LO=<?php echo $data['Id_LO']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Ubah</a>
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