<?php
include 'class.php';
if(empty($_SESSION['Id_User']))
{
    echo "<script>alert('login dulu');</script>";
    echo "<script>window.location='login.php';</script>";
}

if(isset($_GET['aksi']))
{
    if($_GET['aksi']=='logout')
    {
        $pengguna->logout_pengguna();
        echo "<script>alert('Anda Telah Keluar');</script>";
        echo "<script>window.location='login.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kurnia Manunggal Sejahtera</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- AUTO COMPLETE-->
  <link rel="stylesheet" href="js/jquery-ui.css">
  <link rel="shortcut icon" href="images/kms.jpg">
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b>|- KUMASE -|</b></a> 
            </div>
			
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?aksi=logout" class="btn btn-default square-btn-adjust"><i class ="fa fa-power-off"></i><b> Keluar</b></a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">					
                    <li>
                        <a  href="index.php?halaman=home"><i class="fa fa-ra fa-2x"></i> Beranda </a>
                    </li>
                        <?php
                        if(($_SESSION['Jabatan']=="QC Office")){
                        ?>
                    <li>
                        <a href="#"><i class="fa fa-database fa-2x"></i> Data Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?halaman=datauser">User</a>
                            </li>
                            <li>
                                <a href="index.php?halaman=dataproduk">Produk</a>
                            </li>
			            </ul>
                    </li>    
					<?php
						}
						?>
						<?php
                        if(($_SESSION['Jabatan']=="Operator")){
                        ?>    
                    <li>
                        <a href="index.php?halaman=dataloun"><i class="fa fa-pencil-square fa-2x"></i>Loading - Unloading<span></span></a>
                           </li>
					
                   <?php 
                        } 
                        ?>
					     <?php
                        if(($_SESSION['Jabatan']=="QC Office")){
                        ?>                            
                    <li>
                        <a href="index.php?halaman=lounqco"><i class="fa fa-file-text fa-2x"></i>Laporan<span></span></a>
                    
                    </li>  
					<?php 
                        }
                        ?>
					
					<?php
                        if(($_SESSION['Jabatan']=="Leader Produksi")){
                        ?>                            
                    <li>
                        <a href="index.php?halaman=lounview"><i class="fa fa-file-text fa-2x"></i>Laporan<span></span></a>
                    
                    </li>
                    <?php 
                        }
                        ?>
						 <?php
                        if(($_SESSION['Jabatan']=="Manajer Produksi")){
                        ?>                            
                    <li>
                        <a href="index.php?halaman=lounview"><i class="fa fa-file-text fa-2x"></i>Laporan<span></span></a>
                    
                    </li>
					
					<?php
						}
						?>
						<?php
                        if(($_SESSION['Jabatan']=="Manajer Produksi")){
                        ?>                            					
                    <li>
                        <a href="index.php?halaman=grafik"><i class="fa  fa-bar-chart fa-2x"></i>Grafik<span></span></a>
                    
                    </li>
                    <?php 
                        }
                        ?>
                        <?php
                        if(($_SESSION['Jabatan']=="Leader Produksi")){
                        ?>                            
                    <li>
                        <a href="index.php?halaman=notesaran"><i class="fa fa-clipboard fa-2x"></i>Note Saran<span></span></a>
                    </li>
                    <?php 
                        }
                        ?>
						<?php
                        if(($_SESSION['Jabatan']=="Leader Produksi")){
                        ?>                            					
                    <li>
                        <a href="index.php?halaman=grafikview"><i class="fa  fa-bar-chart fa-2x"></i>Grafik Evaluasi<span></span></a>
                    
                    </li>
                    <?php 
                        }
                        ?>
						<?php
                        if(($_SESSION['Jabatan']=="Foreman")){
                        ?>                            
                    <li>
                        <a href="index.php?halaman=lounfor"><i class="fa fa-pencil-square fa-2x"></i>Loading-Unloading<span></span></a>
                    </li>
                    <?php 
                        }
                        ?>
						
                                   
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
		<div class="content-header" align="center">
          <h1>
            <small><b>SISTEM INFORMASI PENGENDALIAN KUALITAS ACCUMULATOR</b></small>
          </h1>
		  
         
        </div>
        <div id="page-wrapper" >
            <div id="page-inner">
            <?php
            include "connect.php";

            if(isset($_GET['halaman']))
            {
                if($_GET['halaman']=='datauser')
                {
                    include 'view/datauser.php';
                }
                elseif ($_GET['halaman']=='tambahuser') 
                {
                        include 'function/user/tambahuser.php';
                }
                elseif($_GET['halaman']=='saveuser')
                {
                       include 'function/user/save.php';
                }    
                elseif ($_GET['halaman']=='ubahdatauser')
                {
                         include 'function/user/ubahuser.php';
                }                    
                elseif ($_GET['halaman']=='ubahuser') 
                {
                        include 'function/user/ubah.php';
                }
                elseif($_GET['halaman']=='hapususer')
                {
                    include 'function/user/hapus.php';
                }              
				elseif($_GET['halaman']=='dataproduk')
                {
                    include 'view/dataproduk.php';
                }				
				elseif($_GET['halaman']=='tambahproduk')
                {
                    include 'function/produk/tambahproduk.php';
                }	
				elseif($_GET['halaman']=='saveproduk')
                {
                    include 'function/produk/save.php';
                }					
				elseif($_GET['halaman']=='ubahdataproduk')
                {
                    include 'function/produk/ubahproduk.php';
                }	
				elseif($_GET['halaman']=='ubahproduk')
                {
                    include 'function/produk/ubah.php';
                }					
				elseif($_GET['halaman']=='hapusproduk')
                {
                    include 'function/produk/hapus.php';
                }	
				elseif($_GET['halaman']=='dataloun')
                {
                    include 'view/dataloun.php';
                }
                elseif ($_GET['halaman']=='tambahloun') 
                {
                     include 'function/loun/tambahloun.php';
                }
                elseif($_GET['halaman']=='saveloun')
                {
                       include 'function/loun/save.php';
                }    
                elseif ($_GET['halaman']=='ubahdataloun')
                {
                         include 'function/loun/ubahloun.php';
                }                    
                elseif ($_GET['halaman']=='ubahloun') 
                {
                        include 'function/loun/ubah.php';
                }
                elseif($_GET['halaman']=='hapusloun')
                {
                    include 'function/loun/hapus.php';
				}
				elseif($_GET['halaman']=='inputtotal')
                {
                    include 'function/loun/inputtotal.php';
				}
				elseif($_GET['halaman']=='savetotal')
                {
                    include 'function/loun/savetotal.php';
				}
				elseif($_GET['halaman']=='dataloading')
                {
                    include 'view/dataloading.php';
                }
                elseif ($_GET['halaman']=='tambahloading') 
                {
                     include 'function/loading/tambahloading.php';
                }
                elseif($_GET['halaman']=='saveloading')
                {
                       include 'function/loading/save.php';
                }    
                elseif ($_GET['halaman']=='ubahdataloading')
                {
                         include 'function/loading/ubahloading.php';
                }                    
                elseif ($_GET['halaman']=='ubahloading') 
                {
                        include 'function/loading/ubah.php';
                }
                elseif($_GET['halaman']=='hapusloading')
                {
                    include 'function/loading/hapus.php';
				}
				elseif($_GET['halaman']=='lounview')
                {
                    include 'view/datalounview.php';
				}
				elseif($_GET['halaman']=='lounqco')
                {
                    include 'view/datalounqco.php';
				}
				elseif($_GET['halaman']=='lounfor')
                {
                    include 'view/datalounfor.php';
				}
				elseif($_GET['halaman']=='ubahdataloun')
                {
                    include 'function/loun/ubahloun.php';
				}
				elseif($_GET['halaman']=='dataloadingfor')
                {
                    include 'view/dataloadingfor.php';
				}
				elseif($_GET['halaman']=='dataloadingqco')
                {
                    include 'view/dataloadingqco.php';
				}
				elseif($_GET['halaman']=='notesaran')
                {
                    include 'view/notesaran.php';
                }				
				elseif($_GET['halaman']=='tambahnote')
                {
                    include 'function/note/tambahnote.php';
                }
				elseif($_GET['halaman']=='savenote')
                {
                    include 'function/note/save.php';
                }					
				elseif($_GET['halaman']=='ubahdatanote')
                {
                    include 'function/note/ubahnote.php';
                }	
				elseif($_GET['halaman']=='ubahnote')
                {
                    include 'function/note/ubah.php';
                }
				elseif($_GET['halaman']=='hapusnote')
                {
                    include 'function/note/hapus.php';
                }				
				elseif($_GET['halaman']=='grafik')
                {
                    include 'view/grafik.php';
                }	
				elseif($_GET['halaman']=='grafikview')
                {
                    include 'view/grafikview.php';
                }	
				elseif($_GET['halaman']=='grafikviewman')
                {
                    include 'view/grafikviewman.php';
                }	

				elseif($_GET['halaman']=='cetaksaran')
                {
                    include 'cetak/cetak-saran.php';
                }
				elseif ($_GET['halaman']=='dataloadingacc') 
                {                                                     
                        include 'view/dataloadingacc.php';
                }
				elseif ($_GET['halaman']=='home') 
                {                                                     
                        include 'home.php';
                }
            }
            else
            {
                include 'home.php';
            }
            ?>
			 	 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <small><b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; Egana Pertiwi 2016<a href="http://stmi.ac.id"> Politeknik STMI Jakarta</a>.</strong> All rights reserved.</small>
      </footer>
            </div>
             <!-- /. PAGE INNER  -->
		
        </div>
         <!-- /. PAGE WRAPPER  -->
		 
		
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>