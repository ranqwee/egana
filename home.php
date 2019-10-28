	 <?php 
$date = date('Y-m-d');               
?>			
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Selamat Datang</h3>
                        </div>
                        <div class="panel-body">
                           <ul class="nav nav-pills">
								<?php
								if(($_SESSION['Jabatan']=="Foreman")){
								?>  
								<li class="">
								<a href="#alert" data-toggle="tab" aria-expanded="true">Notifikasi !</a>
                                </li>
								<?php } ?>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Hallo <?php echo $_SESSION['Nama_Lengkap']; ?> <?php echo '(' ?> <?php echo $_SESSION['Jabatan']; ?><?php echo ')' ?> </h4>
                                </div>
								<div class="tab-pane fade" id="alert">	
                                    <div class="panel-heading">
  <div class="panel-body">
 <div style='width: 40%' >
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead><tr bgcolor="#f2f2f2">
		<th>Uraian</th>
		<th>Total</th>
</tr></thead>
<tbody>
<?php
		$query=mysql_query("SELECT * FROM loun where loun.Tanggal='$date'");
		$total1 = mysql_num_rows($query);
		while ($s=mysql_fetch_array($query)){	
?>
<?php
		}
?>
<tr>
<td bgcolor='#b3c6d7'>Data Loading Unloading Masuk Hari Ini</td>
<td align="center"  bgcolor='#b3c6d7'><strong><?php echo $total1; ?></strong></td>
</tr>
<?php
		$query=mysql_query("SELECT * FROM loun where loun.Status='Menunggu Persetujuan'");
		$total2 = mysql_num_rows($query);
		while ($s=mysql_fetch_array($query)){	
?>
<?php
		}
?>
<tr>
<td bgcolor='#FFCC66'>Data Loading Unloading Menunggu Persetujuan</td>
<td align="center" bgcolor='#FFCC66'><strong><?php echo $total2; ?></strong></td>
</tr></tbody></table>
								</div>
                            </div>
							</div></div></div></div></div>