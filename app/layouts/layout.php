<?php
//print $cntrllr->hola;

$meta = $data["meta"];

?>
<html>
<head>
<meta charset="utf8"/>
<title><?php echo $meta["title"];?></title>

<link rel="stylesheet" type="text/css" href="res/bootstrap3/css/bootstrap.min.css">
<script src="../res/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="res/font-awesome/css/font-awesome.min.css">
<?php Core::includeCSS(); ?>
<?php Core::includeJS(); ?>
</head>
<?php 
/// print_r($_GLOBAL); 
?>
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
      <a class="navbar-brand" href="./">MyApp</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <?php if(Session::exists("user_id")):
          $user = UserData::getById(Session::get("user_id"));
          ?>
          <li><a href="./"><i class="glyphicon glyphicon-user"></i> <?php echo $user->name; ?></a></li>
          <li><a href="./?r=index/processlogout"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
        <?php else:?>
          <li><a href="./">Inicio</a></li>
          <li><a href="./?r=index/register">Registro</a></li>
           <li><a href="./?r=index/activate">Activar</a></li>
          <li><a href="./?r=index/login">Login</a></li>
          <li><a href="./?r=index/recover">Recuperar</a></li>

          <?php endif;?>

      </ul>

    </nav>
  </div>
</header>
<div class="clearfix"></div>
<?php 
	require_once(View::$content);
?>
<div class="container">
<div class="row">
<div class="col-md-12">
</div>
</div>
</div>

<script src="res/bootstrap3/js/bootstrap.min.js"></script>

</body>

</html>