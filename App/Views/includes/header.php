<html>
<head>
  <title><?php echo $pagetitle ;  ?></title>
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.js"></script>
</head>
<body>
  <!-- START == /App/Views/includes/header.php == -->
  <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="http://jcadima.dev"><img src="https://jcadima.dev/images/logo.png"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>blog">Blog</a></li>
            <li><a href="<?php echo ROOT_URL; ?>contact">Contactus</a></li>
          </ul>

          <ul class="nav navbar-nav pull-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <!--
            <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
          -->
            <li><a href="<?php echo ROOT_URL; ?>admin/authenticate/logout">Logout</a></li>

          <?php else :  ?>
            <li><a href="<?php echo ROOT_URL; ?>admin/authenticate/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL; ?>admin/authenticate/register">Register</a></li>
            <?php endif; ?>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!--  END == /App/Views/includes/header.php == -->
