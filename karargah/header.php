<?php 
ob_start();
session_start();
require_once 'baglan.php';
$yoneticisor=$db->prepare("SELECT * FROM yonetici where k_adi=:kadi");
$yoneticisor->execute(array(
  'kadi'=>$_SESSION['k_adi']






));
$say=$yoneticisor->rowCount();
if ($say==0) {
  header("Location:login.php?durum=izinsiz");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Danışman Akademi Portal - Admin Paneli</title>

  <!-- Bootstrap -->
  <link href="js/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- NProgress -->
  <link href="js/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="js/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="js/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="js/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="js/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="js/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="js/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="js/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Danışman</span></a>
          </div>

          <div class="clearfix"></div>


          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa </a></li>

                <li><a><i class="fa fa-plus-circle"></i> Ekle <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    
                    <li><a href="denemeekle.php">Deneme Ekle</a></li>
                    <li><a href="canliekle.php">Canlı Yayın Ekle</a></li>
                    <li><a href="cizelgeekle.php">Çizelge Ekle</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Üyeler <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="uyeler.php">Üye Listesi</a></li>
                    <li><a href="yoneticiler.php">Yönetici Listesi</a></li>
                    

                  </ul>
                </li>

                
                <li><a href="sayfalar.php"><i class="fa fa-file"></i> Sayfalar </a></li>

                <li><a href="cikis.php"><i class="fa fa-times-circle"></i> Güvenli Çıkış </a></li>


              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
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


          </nav>
        </div>
      </div>