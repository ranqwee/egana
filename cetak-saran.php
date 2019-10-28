<?php
include('connect.php');
$Id_Note = $_GET['Id_Note'];
$sql = mysql_query("SELECT * FROM note JOIN user ON note.Id_User = user.Id_User WHERE Id_Note='$Id_Note'");
if($data = mysql_fetch_array($sql)){
    $Id_Note = $data['Id_Note'];
    $Id_User = $data['Id_User'];
	$Tanggal = $data['Tanggal'];
	$Periode = $data['Periode'];
	$Divisi = $data['Divisi'];
	$Nama_Lengkap = $data['Nama_Lengkap'];
	$Saran = $data['Saran'];
	}
?>
<title>Note</title>
<style>
 @media print {
   .noPrint{
      display: none !important;
   }
}
</style>
<table width="100%" class="table" border="1">
  <tr bgcolor="#87CEEB">
    <td width="79%"><div align="center"><h3><b>Note Saran Kebijakan Produksi</b></h3>
      <h6><b>PT Kurnia Manunggal Sejahtera</b></h6>
    </div></td>
  </tr>
  <tr bgcolor="#B0E0E6">
    <td colspan="2">No Note : <strong><?php echo $Id_Note ; ?></strong></td>	
  </tr>  
  <tr>
    <td colspan="2">Tanggal : <strong><?php echo $Tanggal ; ?></strong></td>	
  </tr>
  <tr bgcolor="#B0E0E6">
    <td colspan="2">Pembuat : <strong><?php echo $Nama_Lengkap ; ?></strong></td>	
  </tr>
  <tr>
    <td colspan="2">Evaluasi Berdasarkan Periode : <strong><?php echo $Periode ; ?></strong></td>	
  </tr>
  <tr  bgcolor="#B0E0E6">
    <td colspan="2">Kepada : <strong><?php echo "Divisi ".$Divisi ; ?></strong></td>	
  </tr>
</table>
<p></p>
<table width="100%" class="table" border="1" >
   <thead>
   <tr bgcolor="#87CEEB">
    <th width="80%">Saran</th>
</tr></thead><tbody>
		
   <tr align="left">
            <td><?php echo $data['Saran'] ?></td>
            </tbody></tr></table>
        
<div style="text-align:center;padding:20px;">
	<input class="noPrint" type="button" value="Cetak Halaman" onclick='window.print();' >
	<input class="noPrint" type="button" value="Tutup" onclick='window.close();' >
	</div>