<?php
include('connect.php');
$total_t=0;
$total_m=0;
$total_k=0;
$total_s=0;
$total_l=0;
$total_b=0;
$total_n=0;
$total_o=0;
$blank='';
$tgl_awal=$_GET['dt1cari'];
$tgl_akhir=$_GET['dt2cari'];
?>
<title>Laporan</title>
<style>
 @media print {
   .noPrint{
      display: none !important;
   }
}
</style>
<table width="100%" class="table" border="1">
  <tr bgcolor="#87CEEB">
    <td width="15%"><div style="text-align: center;">
<img src="images/kumase.jpg" width="175" height="80" />
</div></td>
    <td width="79%"><div align="center"><h3><b>Quality Monthly Report</b></h3>
      <h6><b>PT Kurnia Manunggal Sejahtera</b></h6>
    </div></td>
  </tr>
  <tr>
    <td colspan="2">Periode : <strong><?php echo $tgl_awal ; ?> s.d. <?php echo $tgl_akhir ; ?></strong></td>	
  </tr></table>  
<table width="100%" class="table" border="1" align="center">
    <thead>
        <tr bgcolor="#87CEEB">
            <th style='min-width:10px; vertical-align:middle' rowspan="2">No LO</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Nama Part</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Tipe</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="2">Penginput</th>
            <th style='min-width:10px; vertical-align:middle' rowspan="2">Tanggal</th>
			<th colspan='6' style='min-width:20px'>NG</th>
			<th colspan='2' style='min-width:20px'>Total</th>
        </tr>
<tr bgcolor="#B0E0E6">
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
			$total_t+=$data['Total_Tipis'];
			$total_m+=$data['Total_Meler'];
			$total_k+=$data['Total_Kotor'];
			$total_s+=$data['Total_Serabut'];
			$total_l+=$data['Total_Lecet'];
			$total_b+=$data['Total_Bintik'];
			$total_n+=$data['Total_NG'];
			$total_o+=$data['Total_OK'];
        ?>
        <tr align="center">
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
        </tr>
        <?php
    }
    ?>
	<tr align="center" bgcolor="#87CEEB">
        <td colspan='5'><b>Sub Total</b></td>
        <td><b><?php echo $total_t ; ?></b></td>
		<td><b><?php echo $total_l ; ?></b></td>
		<td><b><?php echo $total_m ; ?></b></td>
		<td><b><?php echo $total_k ; ?></b></td>
		<td><b><?php echo $total_s ; ?></b></td>
		<td><b><?php echo $total_b ; ?></b></td>
		<td><b><?php echo $total_n ; ?></b></td>
		<td><b><?php echo $total_o ; ?></b></td>
	</tr>
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
			$total_t2+=$data['Total_Tipis'];
			$total_m2+=$data['Total_Meler'];
			$total_k2+=$data['Total_Kotor'];
			$total_s2+=$data['Total_Serabut'];
			$total_l2+=$data['Total_Lecet'];
			$total_b2+=$data['Total_Bintik'];
			$total_n2+=$data['Total_NG'];
			$total_o2+=$data['Total_OK'];
        ?>
        <tr align="center">
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
        </tr>
        <?php
    }
    ?>
	<tr align="center" bgcolor="#87CEEB" align="center">
        <td colspan='5' ><b>Sub Total</b></td>
        <td><b><?php echo $total_t2 ; ?></b></td>
        <td><b><?php echo $total_l2 ; ?></b></td>
		<td><b><?php echo $total_m2 ; ?></b></td>
		<td><b><?php echo $total_k2 ; ?></b></td>
		<td><b><?php echo $total_s2 ; ?></b></td>	
		<td><b><?php echo $total_b2 ; ?></b></td>
		<td><b><?php echo $total_n2 ; ?></b></td>
		<td><b><?php echo $total_o2 ; ?></b></td>
	</tr>
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
			$total_t3+=$data['Total_Tipis'];
			$total_m3+=$data['Total_Meler'];
			$total_k3+=$data['Total_Kotor'];
			$total_s3+=$data['Total_Serabut'];
			$total_l3+=$data['Total_Lecet'];
			$total_b3+=$data['Total_Bintik'];
			$total_n3+=$data['Total_NG'];
			$total_o3+=$data['Total_OK'];
        ?>
        <tr align="center">
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
        </tr>
        <?php
    }
    ?>
	<tr align="center" bgcolor="#87CEEB">
        <td colspan='5' ><b>Sub Total</b></td>
        <td><b><?php echo $total_t3 ; ?></b></td>
        <td><b><?php echo $total_l3 ; ?></b></td>
		<td><b><?php echo $total_m3 ; ?></b></td>
		<td><b><?php echo $total_k3 ; ?></b></td>
		<td><b><?php echo $total_s3 ; ?></b></td>
		<td><b><?php echo $total_b3 ; ?></b></td>
		<td><b><?php echo $total_n3 ; ?></b></td>
		<td><b><?php echo $total_o3 ; ?></b></td>
	</tr>
    </tbody>
</table>
</form>
        
<div style="text-align:center;padding:20px;">
	<input class="noPrint" type="button" value="Cetak Halaman" onclick='window.print();' >
	<input class="noPrint" type="button" value="Tutup" onclick='window.close();' >
	</div>