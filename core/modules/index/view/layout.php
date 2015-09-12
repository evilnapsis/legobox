<html>
<head>
<title>Sistema de Registro, Login, Recuperacion y Administracion | RLRA</title>
<link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="res/font-awesome/css/font-awesome.min.css">

</head>

<body>
<header class="navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">RLRA</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
          <?php if(isset($_SESSION["user_id"])):?>
          <li><a href="./?view=home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>
<!-- - - - - - - - - - - - - - - -->
<?php 
	View::load("index");
?>
<!-- - - - - - - - - - - - - - - -->
<div class="container">
  <div class="row">
  <div class="col-md-12">
  <hr>
  <p>Evilnapsis &copy; 2015</p>
  </div>
  </div>
</div>
<script src="res/jquery.min.js"></script>
<script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>