<?php

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
      <a class="navbar-brand" href="./">LegoBox</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <li><a href="./"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
          <li><a href="index.php?view=page1"><i class="glyphicon glyphicon-file"></i> Pagina 1</a></li>
          <li><a href="index.php?r=index/home"><i class="glyphicon glyphicon-cog"></i> Action</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>
</header>
<div class="clearfix"></div>
<?php 
	require_once(View::$content);
?>


<script src="../res/bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript">


  $(document).ready(
    function()
    {
      $('#contenido').redactor();
    }
  );
  </script>
</body>

</html>