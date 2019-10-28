<?php
include('connect.php');
$id='';
$id2='';
if(ISSET($_GET['id']))
{
	$id=$_GET['id'];
}
if(ISSET($_GET['id2']))
{
	$id2=$_GET['id2'];
}
if(ISSET($_POST['hddID']))
{
	$id=$_POST['hddID'];
	$searching = $_POST['searching'];
}
if(ISSET($_GET['data']))
{
	$id=$_GET['id'];
	$searching = $_GET['data'];
}
if(ISSET($_POST['hddID']))
{
	$id2=$_POST['hddID'];
	$searching = $_POST['searching'];
}
if(ISSET($_GET['data']))
{
	$id2=$_GET['id2'];
	$searching = $_GET['data'];
}
$no=0;
$total_jml=0;
$total_OK=0;
$total_NG=0;
$total_tipis=0;
$total_meler=0;
$total_serabut=0;
$total_kotor=0;
$total_lecet=0;
$total_bintik=0;
$total_jml=0;
$blank="";
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Detail Loading-Unloading - <b><?php echo $id; ?></b> - <b><?php echo $id2; ?></b></h3>
                        </div>
                        <div class="panel-body">
						<br><a href="index.php?halaman=lounfor" class="btn btn-success"><i class="fa fa-arrow-circle-left"></i> Kembali</a><br>
                        </br>
		<div class="panel panel-default"><div class="panel-heading"><b>Note Proses : <br>F : Material Fresh <br> R1 : Repair Material 1x <br> R2 : Repair Material 2x</b></div></div> 
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr bgcolor="#f2f2f2">
			<th style='min-width:10px; vertical-align:middle' rowspan="3">No</th>
			<th colspan='6' style='min-width:20px'>Loading</th>
			<th colspan='9' style='min-width:20px'>Unloading</th>
			<th style='min-width:10px; vertical-align:middle' rowspan="3">Keterangan</th>
        </tr>
		<tr bgcolor="#f2f2f2">
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Jam</small></th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>No Lot</small></th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Nama Part</small></th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Tipe</small></th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Proses</small></th>
		<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Jumlah</small></th>
<th style='min-width:10px; vertical-align:middle' rowspan="2"><small>Jam</small></th>
<th colspan="6"><small>NG</small></th>
		<th colspan="2"><small>Jumlah</small></th></tr>
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
		$conditions="";
		if(ISSET($_GET['id']))
{
	$conditions = " and load_unload.Id_LO='".$_GET['id']."'";
}
if(ISSET($_POST['hddID']))
{
	$conditions = "  and load_unload.Id_LO='".$_POST['hddID']."'";
}
if(ISSET($_GET['data']))
{
	$conditions = "  and load_unload.Id_LO='".$_GET['id']."'  AND (Tanggal LIKE '%".$_GET['data']."%')";
}
        if(isset($_POST['button'])){
            $tcari=$_POST['tcari'];
            $us = mysql_query("SELECT * FROM load_unload JOIN loun ON load_unload.Id_LO = loun.Id_LO JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Id_Loun LIKE '%$tcari%'");
        }else{
            $us = mysql_query("SELECT * FROM load_unload JOIN loun ON load_unload.Id_LO = loun.Id_LO JOIN produk ON loun.Id_Produk = produk.Id_Produk $conditions");
        }
        while($data=mysql_fetch_array($us))
        {
			$jml_NG=$data['Jumlah_Tipis']+$data['Jumlah_Meler']+$data['Jumlah_Serabut']+$data['Jumlah_Kotor']+$data['Jumlah_Lecet']+$data['Jumlah_Bintik'];
			$jml_OK=$data['Jumlah']-$jml_NG;
			$total_OK+=$jml_OK ;
			$total_NG+=$jml_NG ;
			$total_jml+=$data['Jumlah'];
			$total_tipis+=$data['Jumlah_Tipis'];
			$total_meler+=$data['Jumlah_Meler'];
			$total_serabut+=$data['Jumlah_Serabut'];
			$total_kotor+=$data['Jumlah_Kotor'];
			$total_lecet+=$data['Jumlah_Lecet'];
			$total_bintik+=$data['Jumlah_Bintik'];
			$no++;
        ?>
        <tr align="center">
			<td><b><?php echo $no ; ?></b></td>
			<td><?php echo $data['Jam_Load'] ?></td>
			<td><?php echo $data['No_Lot'] ?></td>
			<td><?php echo $data['Nama_Produk'] ; ?></td>
			<td><?php echo $data['Tipe'] ; ?></td>
			<td><?php echo $data['Proses'] ; ?></td>
			<td><?php echo $data['Jumlah'] ; ?></td>
			<td><?php echo $data['Jam_Un'] ?></td>
			<td><?php echo $data['Jumlah_Tipis'] ?></td>
			<td><?php echo $data['Jumlah_Lecet'] ?></td>
			<td><?php echo $data['Jumlah_Meler'] ?></td>
			<td><?php echo $data['Jumlah_Kotor'] ?></td>
			<td><?php echo $data['Jumlah_Serabut'] ?></td>
			<td><?php echo $data['Jumlah_Bintik'] ?></td>
			<td><?php echo $jml_NG ; ?></td>
			<td><?php echo $jml_OK ; ?></td>
			<td><?php echo $data['Keterangan'] ?></td>
        </tr>
        <?php
    }
    ?>
	<tr>
        <td colspan='6' align='center' bgcolor="#f2f2f2"><b>Total</b></td>
		 <td align='center' bgcolor="#f2f2f2"><b><?php echo $total_jml ; ?></b></td>
		 <td align='center' bgcolor="#f2f2f2"><b><?php echo $blank ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_tipis ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_lecet ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_meler ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_kotor ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_serabut ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_bintik ; ?></b></td>	
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_NG ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $total_OK ; ?></b></td>
<td align='center' bgcolor="#f2f2f2"><b><?php echo $blank ; ?></b></td>	
        </tr>
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