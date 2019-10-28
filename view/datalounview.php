<?php
include('connect.php');
$no=0;
$total_t=0;
$total_m=0;
$total_k=0;
$total_s=0;
$total_l=0;
$total_b=0;
$total_n=0;
$total_o=0;
$blank='';
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
		<div>
			<tr>
			<td>
				<label>Tgl. Awal</label>
				<input type="date" name="dt1cari"> &nbsp&nbsp
				<label>Tgl. Akhir</label>
				<input type="date" name="dt2cari">
			</td>
		</tr>
		<input type="submit" name="button" id="button" value="CARI" class="btn btn-success">
		

		</div>
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
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Tanggal BETWEEN '$_POST[dt1cari]' AND '$_POST[dt2cari]' and loun.Status='Disetujui' and produk.Tipe='White'");
        }else{
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk where loun.Status='Disetujui' and produk.Tipe='White' ORDER BY Tipe, Tanggal ASC");
        }
        while($data=mysql_fetch_array($us))
        {
			$no++;
			$total_t+=$data['Total_Tipis'];
			$total_m+=$data['Total_Meler'];
			$total_k+=$data['Total_Kotor'];
			$total_s+=$data['Total_Serabut'];
			$total_l+=$data['Total_Lecet'];
			$total_b+=$data['Total_Bintik'];
			$total_n+=$data['Total_NG'];
			$total_o+=$data['Total_OK'];
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
                <a href="index.php?halaman=dataloadingqco&id=<?php echo $data['Id_LO'] ;?>&id2=<?php echo $data['Tanggal'] ; ?>" class="btn btn-default"><i class="fa fa-play-circle"></i> Detail</a>
            </td>
        </tr>
        <?php
    }
    ?>
	<tr align="right">
        <td colspan='6'><b>Sub Total</b></td>
        <td><b><?php echo $total_t ; ?></b></td>
		<td><b><?php echo $total_l ; ?></b></td>
		<td><b><?php echo $total_m ; ?></b></td>
		<td><b><?php echo $total_k ; ?></b></td>
		<td><b><?php echo $total_s ; ?></b></td>
		<td><b><?php echo $total_b ; ?></b></td>
		<td><b><?php echo $total_n ; ?></b></td>
		<td><b><?php echo $total_o ; ?></b></td>
		<td colspan="2"><b><?php echo $blank ; ?></b></td></tr>
	<?php
$total_t2=0;
$total_m2=0;
$total_k2=0;
$total_s2=0;
$total_l2=0;
$total_b2=0;
$total_n2=0;
$total_o2=0;
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk where loun.Status='Disetujui' and produk.Tipe='Blue Lokal' ORDER BY Tipe, Tanggal ASC");
        while($data=mysql_fetch_array($us))
        {
			$no++;
			$total_t2+=$data['Total_Tipis'];
			$total_m2+=$data['Total_Meler'];
			$total_k2+=$data['Total_Kotor'];
			$total_s2+=$data['Total_Serabut'];
			$total_l2+=$data['Total_Lecet'];
			$total_b2+=$data['Total_Bintik'];
			$total_n2+=$data['Total_NG'];
			$total_o2+=$data['Total_OK'];
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
                <a href="index.php?halaman=dataloadingqco&id=<?php echo $data['Id_LO'] ;?>&id2=<?php echo $data['Tanggal'] ; ?>" class="btn btn-default"><i class="fa fa-play-circle"></i> Detail</a>
            </td></tr>
        <?php
    }
    ?>
	<tr align="right">
        <td colspan='6'><b>Sub Total</b></td>
        <td><b><?php echo $total_t2 ; ?></b></td>
        <td><b><?php echo $total_l2 ; ?></b></td>
		<td><b><?php echo $total_m2 ; ?></b></td>
		<td><b><?php echo $total_k2 ; ?></b></td>
		<td><b><?php echo $total_s2 ; ?></b></td>	
		<td><b><?php echo $total_b2 ; ?></b></td>
		<td><b><?php echo $total_n2 ; ?></b></td>
		<td><b><?php echo $total_o2 ; ?></b></td>
		<td colspan="2"><b><?php echo $blank ; ?></b></td></tr>
		<?php
$total_t3=0;
$total_m3=0;
$total_k3=0;
$total_s3=0;
$total_l3=0;
$total_b3=0;
$total_n3=0;
$total_o3=0;
            $us = mysql_query("SELECT * FROM loun JOIN user ON loun.Id_User = user.Id_User JOIN produk ON loun.Id_Produk = produk.Id_Produk where loun.Status='Disetujui' and produk.Tipe='Blue Ekspor' ORDER BY Tipe, Tanggal ASC");
        while($data=mysql_fetch_array($us))
        {
			$no++;
			$total_t3+=$data['Total_Tipis'];
			$total_m3+=$data['Total_Meler'];
			$total_k3+=$data['Total_Kotor'];
			$total_s3+=$data['Total_Serabut'];
			$total_l3+=$data['Total_Lecet'];
			$total_b3+=$data['Total_Bintik'];
			$total_n3+=$data['Total_NG'];
			$total_o3+=$data['Total_OK'];
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
                <a href="index.php?halaman=dataloadingqco&id=<?php echo $data['Id_LO'] ;?>&id2=<?php echo $data['Tanggal'] ; ?>" class="btn btn-default"><i class="fa fa-play-circle"></i> Detail</a>
            </td>
		</tr>
        <?php
    }
    ?>
	<tr align="right">
        <td colspan='6'><b>Sub Total</b></td>
        <td><b><?php echo $total_t3 ; ?></b></td>
        <td><b><?php echo $total_l3 ; ?></b></td>
		<td><b><?php echo $total_m3 ; ?></b></td>
		<td><b><?php echo $total_k3 ; ?></b></td>
		<td><b><?php echo $total_s3 ; ?></b></td>
		<td><b><?php echo $total_b3 ; ?></b></td>
		<td><b><?php echo $total_n3 ; ?></b></td>
		<td><b><?php echo $total_o3 ; ?></b></td>
		<td colspan="2"><b><?php echo $blank ; ?></b></td></tr>
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