<?php include('connect.php'); 
$tgl_awal = $_GET['tgl_awal'];
		$tgl_akhir = $_GET['tgl_akhir']; ?> 
		<!-- Grafik-->
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart-gf',
        data: [
        <?php 
		$tgl_awal = $_GET['tgl_awal'];
		$tgl_akhir = $_GET['tgl_akhir'];
				
          $result=mysql_query("SELECT produk.Nama_Produk AS Nama, produk.Tipe AS Produk, SUM(Total_Tipis)AS ttp, SUM(Total_Meler)AS ttm, SUM(Total_Serabut)AS tts, SUM(Total_Lecet)AS ttl, SUM(Total_Kotor)AS ttk, SUM(Total_Bintik)AS ttb, SUM(Total_NG) AS tng, sum(Total_OK) AS tok FROM loun JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' and loun.Id_Produk='AC001'");
        
        while($data=mysql_fetch_array($result)){
        ?>
		
        {
			
            y: '<?php echo $data['Nama']?> <?php echo $data['Produk'] ?>',
            ttp: <?php echo $data['ttp'] ?>,
			ttm: <?php echo $data['ttm'] ?>,
			tts: <?php echo $data['tts'] ?>,
			ttl: <?php echo $data['ttl'] ?>,
			ttk: <?php echo $data['ttk'] ?>,
			ttb: <?php echo $data['ttb'] ?>,
			tng: <?php echo $data['tng'] ?>,
            tok: <?php echo $data['tok'] ?>
			
        },
        <?php
        }
        ?>
        ],
        xkey: 'y',	
        ykeys: ['ttp', 'ttm', 'tts', 'ttl', 'ttk', 'ttb', 'tng', 'tok'],
        labels: ['Total Tipis (pcs)', 'Total Meler (pcs)', 'Total Serabut (pcs)', 'Total Lecet (pcs)', 'Total Kotor (pcs)', 'Total Bintik (pcs)', 'Total NG (pcs)', 'Total OK (pcs)'],
        hideHover: 'auto',
        resize: true
    });

});

</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart-gf2',
        data: [
        <?php 
		$tgl_awal = $_GET['tgl_awal'];
		$tgl_akhir = $_GET['tgl_akhir'];
				
        $result=mysql_query("SELECT produk.Nama_Produk AS Nama, produk.Tipe AS Produk, SUM(Total_Tipis)AS ttp, SUM(Total_Meler)AS ttm, SUM(Total_Serabut)AS tts, SUM(Total_Lecet)AS ttl, SUM(Total_Kotor)AS ttk, SUM(Total_Bintik)AS ttb, SUM(Total_NG) AS tng, sum(Total_OK) AS tok FROM loun JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' and loun.Id_Produk='AC002'");
        
        while($data=mysql_fetch_array($result)){
        ?>
		
        {
			
            y: '<?php echo $data['Nama']?> <?php echo $data['Produk'] ?>',
            ttp: <?php echo $data['ttp'] ?>,
			ttm: <?php echo $data['ttm'] ?>,
			tts: <?php echo $data['tts'] ?>,
			ttl: <?php echo $data['ttl'] ?>,
			ttk: <?php echo $data['ttk'] ?>,
			ttb: <?php echo $data['ttb'] ?>,
			tng: <?php echo $data['tng'] ?>,
            tok: <?php echo $data['tok'] ?>
			
        },
        <?php
        }
        ?>
        ],
        xkey: 'y',	
        ykeys: ['ttp', 'ttm', 'tts', 'ttl', 'ttk', 'ttb', 'tng', 'tok'],
        labels: ['Total Tipis (pcs)', 'Total Meler (pcs)', 'Total Serabut (pcs)', 'Total Lecet (pcs)', 'Total Kotor (pcs)', 'Total Bintik (pcs)', 'Total NG (pcs)', 'Total OK (pcs)'],
        hideHover: 'auto',
        resize: true
    });

});

</script>
<script type="text/javascript">
$(function() {
    Morris.Bar({
        element: 'morris-bar-chart-gf3',
        data: [
        <?php 
		$tgl_awal = $_GET['tgl_awal'];
		$tgl_akhir = $_GET['tgl_akhir'];
				
          $result=mysql_query("SELECT produk.Nama_Produk AS Nama, produk.Tipe AS Produk, SUM(Total_Tipis)AS ttp, SUM(Total_Meler)AS ttm, SUM(Total_Serabut)AS tts, SUM(Total_Lecet)AS ttl, SUM(Total_Kotor)AS ttk, SUM(Total_Bintik)AS ttb, SUM(Total_NG) AS tng, sum(Total_OK) AS tok FROM loun JOIN produk ON loun.Id_Produk = produk.Id_Produk WHERE Tanggal BETWEEN '$tgl_awal' AND '$tgl_akhir' and loun.Id_Produk='AC003'");
        
        while($data=mysql_fetch_array($result)){
        ?>
		
        {
			
            y: '<?php echo $data['Nama']?> <?php echo $data['Produk'] ?>',
            ttp: <?php echo $data['ttp'] ?>,
			ttm: <?php echo $data['ttm'] ?>,
			tts: <?php echo $data['tts'] ?>,
			ttl: <?php echo $data['ttl'] ?>,
			ttk: <?php echo $data['ttk'] ?>,
			ttb: <?php echo $data['ttb'] ?>,
			tng: <?php echo $data['tng'] ?>,
            tok: <?php echo $data['tok'] ?>
			
        },
        <?php
        }
        ?>
        ],
        xkey: 'y',	
        ykeys: ['ttp', 'ttm', 'tts', 'ttl', 'ttk', 'ttb', 'tng', 'tok'],
        labels: ['Total Tipis (pcs)', 'Total Meler (pcs)', 'Total Serabut (pcs)', 'Total Lecet (pcs)', 'Total Kotor (pcs)', 'Total Bintik (pcs)', 'Total NG (pcs)', 'Total OK (pcs)'],
        hideHover: 'auto',
        resize: true
    });

});

</script>
<title>Grafik</title>
<style>
 @media print {
   .noPrint{
      display: none !important;
   }
}
</style>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Grafik</h3>
                        </div>
						<div class="panel-body" align="center">
                        
                        <div class="panel-body">
                        
<body>
<div id="morris-bar-chart-gf"></div>
<div align="center"><img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> Tipis <img name="" src="" width="15" height="15" alt="" style="background-color: #7a92a3"> Meler <img name="" src="" width="15" height="15" alt="" style="background-color: #4da74d"> Serabut <img name="" src="" width="15" height="15" alt="" style="background-color: #afd8f8"> Lecet <img name="" src="" width="15" height="15" alt="" style="background-color: #edc240"> Kotor <img name="" src="" width="15" height="15" alt="" style="background-color: #cb4b4b"> Bintik <img name="" src="" width="15" height="15" alt="" style="background-color:#9440ed"> NG <img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> OK</div><br>  
 <div align="center"><b>Periode : <?php echo $tgl_awal ; ?>      -       <?php echo $tgl_akhir ;?></b></div><br>  
<div id="morris-bar-chart-gf2"></div>
<div align="center"><img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> Tipis <img name="" src="" width="15" height="15" alt="" style="background-color: #7a92a3"> Meler <img name="" src="" width="15" height="15" alt="" style="background-color: #4da74d"> Serabut <img name="" src="" width="15" height="15" alt="" style="background-color: #afd8f8"> Lecet <img name="" src="" width="15" height="15" alt="" style="background-color: #edc240"> Kotor <img name="" src="" width="15" height="15" alt="" style="background-color: #cb4b4b"> Bintik <img name="" src="" width="15" height="15" alt="" style="background-color:#9440ed"> NG <img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> OK</div><br> 
 <div align="center"><b>Periode : <?php echo $tgl_awal ; ?>      -       <?php echo $tgl_akhir ;?></b></div><br>  
<div id="morris-bar-chart-gf3"></div>
<div align="center"><img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> Tipis <img name="" src="" width="15" height="15" alt="" style="background-color: #7a92a3"> Meler <img name="" src="" width="15" height="15" alt="" style="background-color: #4da74d"> Serabut <img name="" src="" width="15" height="15" alt="" style="background-color: #afd8f8"> Lecet <img name="" src="" width="15" height="15" alt="" style="background-color: #edc240"> Kotor <img name="" src="" width="15" height="15" alt="" style="background-color: #cb4b4b"> Bintik <img name="" src="" width="15" height="15" alt="" style="background-color:#9440ed"> NG <img name="" src="" width="15" height="15" alt="" style="background-color:#0b62a4"> OK</div><br> 
 <div align="center"><b>Periode : <?php echo $tgl_awal ; ?>      -       <?php echo $tgl_akhir ;?></b></div>  

 </body>
</div></div></div></div></div>

        
<div style="text-align:center;padding:20px;">
	<input class="noPrint" type="button" value="Cetak Halaman" onclick='window.print();' >
	<input class="noPrint" type="button" value="Tutup" onclick='window.close();' >
	</div>