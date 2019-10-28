﻿<?php
include 'class.php';
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
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="shortcut icon" href="images/kms.jpg">

   <style type="text/css">
			body { background: url(images/1.JPG) !important; }
		</style>
		
</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2></h2>
                <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-transparent">
                            <div class="panel-heading" align="center">
                        <strong><img src="images/qc2.png" /></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><b>@</b></span>
                                            <input type="text" class="form-control" placeholder="Username" name="uid" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Password" name="pass" />
                                        </div>
                                    <div align="center"><button type="submit" name="melogin" class="btn btn-success"><i class="fa fa-power-off"></i><b> Login</b></button></div>
                                    <hr />
									
                                    </form>
									
                                    <?php
                                    if(isset($_POST['melogin']))
                                    {
                                      $cobalogin = $pengguna->login_pengguna($_POST['uid'],$_POST['pass']);
                                      if($cobalogin)
                                      {
                                        echo"<script>alert('Yes! Login Berhasil');</script>";
                                        echo"<script>window.location='index.php';</script>";
                                      }
                                      else
                                      {
                                        echo"<script>alert('Username atau Password Yang Anda Masukan Salah!');</script>";
                                        echo"<script>window.location='login.php';</script>";

                                      }
                                    }

                                    ?>
                            </div>
                           
                        </div>
                    </div>
                
        </div>
        <div class="row text-center ">
          <div class="col-md-12">
            <h5><b>PT Kurnia Manunggal Sejahtera</b></h5>
            <br />
          </div>
        </div>

    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
