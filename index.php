<?php 
ob_start(); 
session_start();
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendors/datepicker/datepicker.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="build/css/cart.css" rel="stylesheet">
    <link href="vendors/autocomplete/easy-autocomplete.min.css" rel="stylesheet">
	<style>
	 .fa:hover{cursor:pointer}
	</style>
	<!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="vendors/bootbox/bootbox.min.js"></script>
	<script src="vendors/datepicker/datepicker.min.js"></script>
  <script src="vendors/autocomplete/jquery.easy-autocomplete.min.js"></script>
	
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
				  <a><i class="fa fa-home"></i> Home</a>
                    
                  </li>
				  <li><a><i class="fa fa-archive"></i> Bahan Baku<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tbahan">Tambah Bahan Baku</a></li>
                      <li><a href="index.php?page=dbahan">Data Bahan Baku</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-archive"></i> Bahan Baku Masuk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tbahanm">Tambah BBM</a></li>
                      <li><a href="index.php?page=dbahanm">Data BBM</a></li>
                    </ul>
                  </li>
				   <li><a><i class="fa fa-archive"></i> Bahan Baku Keluar<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tbahank">Tambah BBK</a></li>
                      <li><a href="index.php?page=dbahank">Data BBK</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-archive"></i> Produk<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tproduk">Tambah Produk</a></li>
                      <li><a href="index.php?page=dproduk">Data Produk</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-archive"></i> Produk Masuk<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tprodukm">Tambah PM</a></li>
                      <li><a href="index.php?page=dprodukm">Data PM</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-archive"></i> Penjualan<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=tpenjualan">Tambah Penjualan</a></li>
                      <li><a href="index.php?page=dpenjualan">Data Penjualan Cunsomer</a></li>
                      <li><a href="index.php?page=dpenjualans">Data Penjualan Sales</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-archive"></i> Kasbon<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?page=dkasbon">Data Kasbon</a></li>
                      <li><a href="index.php?page=bkasbon">Bayar Kasbon</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
		
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php
			if(isset($_GET["page"])){
				switch($_GET["page"]){
					case "dbahan": include("page/bahan_baku/dbahan.php"); break;
					case "tbahan": include("page/bahan_baku/tbahan.php"); break;
					case "ebahan": include("page/bahan_baku/ebahan.php"); break;
					case "tbahanm": include("page/bahan_bakum/tbahanm.php");  break; 
					case "dbahanm": include("page/bahan_bakum/dbahanm.php"); break;
					case "tbahank": include("page/bahan_bakuk/tbahank.php"); break;
					case "dbahank": include("page/bahan_bakuk/dbahank.php"); break;
					case "tproduk": include("page/produk/tproduk.php"); break;
					case "dproduk": include("page/produk/dproduk.php"); break;
					case "eproduk": include("page/produk/eproduk.php"); break;
					case "tprodukm": include("page/produk_masuk/tprodukm.php"); break;
          case "dprodukm": include("page/produk_masuk/dprodukm.php"); break;
          case "tpenjualan": include("page/penjualan/tpenjualan.php"); break;
          case "dpenjualan": include("page/penjualan/dpenjualan.php"); break;
          case "dpenjualan_sales": include("page/penjualan/dpenjualan_sales.php"); break;
          case "dkasbon": include("page/penjualan/dkasbon.php"); break;
          case "bkasbon": include("page/penjualan/bkasbon.php"); break;

				}
			}
			else{
				
			}
		  
		  ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
     <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
