<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JC - <?php echo $pagetitle;  ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap 3.3.6 -->
<!--   <link rel="stylesheet" href="<?php echo ROOT_URL ; ?>assets/css/bootstrap.css"> -->

  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo ROOT_URL ; ?>assets/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="<?php echo ROOT_URL ; ?>assets/css/skins/skin-blue.min.css">
 <link rel="stylesheet" href="<?php echo ROOT_URL ; ?>assets/css/admincss.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">


    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
          <li><a target="_blank" class="btn_return" href="<?php echo ROOT_URL ; ?>">Return to Main Site <i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
          <li><a class="btn_logout" href="<?php echo ROOT_URL ; ?>admin/authenticate/logout">Logout</a></li>
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

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="text-center image">
          <img src="<?php echo ROOT_URL ; ?>assets/images/jc.png" alt="JC Web Development">
        </div>

      </div>


      <!-- Sidebar Menu -->
      <?php include "sidebar.php"; ?>
      <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
  </aside>