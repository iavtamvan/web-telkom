<?php
session_start();
include 'api/telkom_apps/controller/config.php';
$nama= "" . $_SESSION["nama_user"];
if (!$nama){
    header('Location: ../../../pages/log/404.html');
}
$jumlahPoinKeseluruhan = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps;");
$ambilTotalPoin = mysqli_fetch_assoc($jumlahPoinKeseluruhan);
$jumlahPoin = "" . $ambilTotalPoin['total_point'];

$queryUserTeknisi = mysqli_query($db, "select * from user_apps where rule = 'Teknisi'");
$jumlahTeknisi = mysqli_num_rows($queryUserTeknisi);

$querryUserWilayah = mysqli_query($db, "select * from user_apps where rule = 'Wilayah'");
$jumlahWilayah = mysqli_num_rows($querryUserWilayah);

$sumWilayahSemarang = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Semarang';");
$ambilTotalPointSemarang = mysqli_fetch_assoc($sumWilayahSemarang);
$ambilpointSemarang = "" . $ambilTotalPointSemarang['total_point'];
$persenSemarang = $ambilpointSemarang / 100 * 100;

$sumWilayahYogyakarta = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Yogyakarta';");
$ambilTotalPointYogyakarta = mysqli_fetch_assoc($sumWilayahYogyakarta);
$ambilpointYogyakarta = "" . $ambilTotalPointYogyakarta['total_point'];
$persenYogyakarta = $ambilpointYogyakarta / 100 * 100;

$sumWilayahKudus = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Kudus';");
$ambilTotalPointKudus = mysqli_fetch_assoc($sumWilayahKudus);
$ambilpointKudus = "" . $ambilTotalPointKudus['total_point'];
$persenKudus = $ambilpointKudus / 100 * 100;


$sumWilayahSolo = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Solo';");
$ambilTotalPointSolo = mysqli_fetch_assoc($sumWilayahSolo);
$ambilpointSolo = "" . $ambilTotalPointSolo['total_point'];
$persenSolo = $ambilpointSolo / 100 * 100;

$sumWilayahMagelang = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Magelang';");
$ambilTotalPointMagelang = mysqli_fetch_assoc($sumWilayahMagelang);
$ambilpointMagelang = "" . $ambilTotalPointMagelang['total_point'];
$persenMagelang = $ambilpointMagelang / 100 * 100;

$sumWilayahPurwokerto = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Purwokerto';");
$ambilTotalPointPurwokerto = mysqli_fetch_assoc($sumWilayahPurwokerto);
$ambilpointPurwokerto = "" . $ambilTotalPointPurwokerto['total_point'];
$persenPurwokerto = $ambilpointPurwokerto / 100 * 100;

$sumWilayahPekalongan = mysqli_query($db, "SELECT SUM(total_point) AS total_point FROM user_apps WHERE wilayah_user = 'Pekalongan';");
$ambilTotalPointPekalongan = mysqli_fetch_assoc($sumWilayahPekalongan);
$ambilpointPekalongan = "" . $ambilTotalPointPekalongan['total_point'];
$persenPekalongan = $ambilpointPekalongan / 100 * 100;



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TELKOM| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="234652364!21273$&5632547.php" class="logo">
            <span class="logo-mini"><b>TEL</b>KOM</span>
            <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b>INDIE</b>KU</span> </a>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php
                                echo "" . $_SESSION["nama_user"];
                                //                                echo "".$_SESSION["nama_user"];
                                ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php
                                    echo "" . $_SESSION["nama_user"];
                                    //                                echo "".$_SESSION["nama_user"];
                                    ?>
                                    <small><?php
                                        echo "" . $_SESSION["no_hp_user"];
                                        ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="api/telkom_apps/controller/signout_api.php"
                                       class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php
                        echo "" . $_SESSION["nama_user"];
                        //                                echo "".$_SESSION["nama_user"];
                        ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview menu-open">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="234652364!21273$&5632547.php"><i class="fa fa-circle-o"></i>
                                Dashboard</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/caption_all.php"><i class="fa fa-circle-o"></i> Ubah Caption</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">

                        <li><a href="pages/tables/data_user.php"><i class="fa fa-circle-o"></i> Data Teknisi</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">User Wilayah</span>
                            <span class="info-box-number"><?php echo $jumlahWilayah ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!--        <div class="col-md-3 col-sm-6 col-xs-12">-->
                <!--          <div class="info-box">-->
                <!--            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>-->
                <!---->
                <!--            <div class="info-box-content">-->
                <!--              <span class="info-box-text">Likes</span>-->
                <!--              <span class="info-box-number">41,410</span>-->
                <!--            </div>-->
                <!--            <!-- /.info-box-content -->
                <!--          </div>-->
                <!--          <!-- /.info-box -->
                <!--        </div>-->
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">User Teknisi</span>
                            <span class="info-box-number"><?php echo $jumlahTeknisi ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Poin</span>
                            <span class="info-box-number"><?php echo $jumlahPoin ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Daftar Witel di Jawa Tengah</h3>


                            <!--                            <div class="box-tools pull-right">-->
                            <!--                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i-->
                            <!--                                            class="fa fa-minus"></i>-->
                            <!--                                </button>-->
                            <!--                                <div class="btn-group">-->
                            <!--                                    <button type="button" class="btn btn-box-tool dropdown-toggle"-->
                            <!--                                            data-toggle="dropdown">-->
                            <!--                                        <i class="fa fa-wrench"></i></button>-->
                            <!--                                    <ul class="dropdown-menu" role="menu">-->
                            <!--                                        <li><a href="#">Action</a></li>-->
                            <!--                                        <li><a href="#">Another action</a></li>-->
                            <!--                                        <li><a href="#">Something else here</a></li>-->
                            <!--                                        <li class="divider"></li>-->
                            <!--                                        <li><a href="#">Separated link</a></li>-->
                            <!--                                    </ul>-->
                            <!--                                </div>-->
                            <!--                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i-->
                            <!--                                            class="fa fa-times"></i></button>-->
                            <!--                            </div>-->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">

                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Jumlah Poin Per-Wilayah</strong>
                                    </p>

                                    <div class="progress-group">
                                        <span class="progress-text">Semarang</span>
                                        <span class="progress-number"><?php echo $ambilpointSemarang ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua"
                                                 style="width:  <?php echo $persenSemarang ?>%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Yogyakarta</span>
                                        <span class="progress-number"><?php echo $ambilpointYogyakarta ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red"
                                                 style="width: <?php echo $persenYogyakarta ?>%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Kudus</span>
                                        <span class="progress-number"><?php echo $ambilpointKudus ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green"
                                                 style="width: <?php echo $persenKudus ?>%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Solo</span>
                                        <span class="progress-number"><?php echo $ambilpointSolo ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-yellow"
                                                 style="width: <?php echo $persenSolo ?>%"></div>
                                        </div>
                                    </div>

                                    <div class="progress-group">
                                        <span class="progress-text">Magelang</span>
                                        <span class="progress-number"><?php echo $ambilpointMagelang ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua"
                                                 style="width:  <?php echo $persenMagelang ?>%"></div>
                                        </div>
                                    </div>


                                    <div class="progress-group">
                                        <span class="progress-text">Purwokerto</span>
                                        <span class="progress-number"><?php echo $ambilpointPurwokerto ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-yellow"
                                                 style="width: <?php echo $persenPurwokerto ?>%"></div>
                                        </div>
                                    </div>

                                    <div class="progress-group">
                                        <span class="progress-text">Pekalongan</span>
                                        <span class="progress-number"><?php echo $ambilpointPekalongan ?> Poin</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red"
                                                 style="width: <?php echo $persenPekalongan ?>%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>

                                <div class="col-md-8">
                                    <!--                                    <p class="text-center">-->
                                    <!--                                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>-->
                                    <!--                                    </p>-->
                                    <!---->
                                    <!--                                    <div class="chart">-->
                                    <!--                                        Sales Chart Canvas-->
                                    <!--                                        <canvas id="salesChart" style="height: 180px;"></canvas>-->
                                    <!--                                    </div>-->

                                    <!-- SELECT2 EXAMPLE -->
                                    <div class="box box-default">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Form Pendaftaran</h3>

                                            <div class="box-tools pull-right">
                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                            class="fa fa-minus"></i></button>
                                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                            class="fa fa-remove"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <form action="api/telkom_apps/controller/register_api_web.php"
                                                              method="post">
                                                            <div class="form-group">


                                                                <label>Nama Lengkap</label>

                                                                <div class="input-group">
                                                                    <input type="text" name="nama_user">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                            <div class="form-group">
                                                                <label>No.Hp</label>

                                                                <div class="input-group">
                                                                    <input type="text" name="no_hp_user">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>

                                                            <label>Pilih Witel</label>
                                                            <select class="form-control select2" style="width: 100%;"
                                                                    name="wilayah_user">
                                                                <option name="wilayah_user" id="wilayah_user">Semarang
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">
                                                                    Yogyakarta
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">Solo
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">Kudus
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">Magelang
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">
                                                                    Purwokerto
                                                                </option>
                                                                <option name="wilayah_user" id="wilayah_user">
                                                                    Pekalongan
                                                                </option>
                                                            </select>
                                                    </div>
                                                    <?php


                                                    ?>

                                                    <div class="form-group">
                                                        <label>Pilih Datel</label>
                                                        <select class="form-control select2" style="width: 100%;"
                                                                name="datel_user">
                                                            <option name="datel_user" id="wilayah_user">---- WITEL
                                                                Semarang ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL KENDAL
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL UNGARAN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL
                                                                Yogyakarta ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL BANTUL
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL SLEMAN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL Solo
                                                                ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL SRAGEN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL WONOGIRI
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL KLATEN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL SALATIGA
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL Kudus
                                                                ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL BLORA
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL JEPARA
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL PATI
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL
                                                                PURWODADI
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL
                                                                Magelang ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL KEBUMEN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL MUNTILAN
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL
                                                                PURWOREJO
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL
                                                                TEMANGGUNG
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL WONOSOBO
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL
                                                                Purwokerto ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL
                                                                BANJARNEGARA
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL CILACAP
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL
                                                                PURBALINGGA
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">---- WITEL
                                                                Pekalongan ----
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL BATANG
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL BREBES
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL SLAWI
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL PEMALANG
                                                            </option>
                                                            <option name="datel_user" id="wilayah_user">DATEL TEGAL
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">


                                                        <label>Username</label>

                                                        <div class="input-group">
                                                            <input type="text" name="username_user">
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>

                                                        <div class="input-group">
                                                            <input type="text" name="password_user">
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>

                                                    <button type="submit">Daftarkan!</button>


                                                    </form>


                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->

                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->

    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->

        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
