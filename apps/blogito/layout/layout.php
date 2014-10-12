<html>
<head>
<title>Usando Legobox 4</title>
<link rel="stylesheet" type="text/css" href="res/bootstrap3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="core/modules/<?php echo Module::$module; ?>/res/redactor/redactor.css">

</head>

<body>
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Legobox 4</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <li><a href="./"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>

      </ul>
    </nav>
  </div>
</header><br><br><br>
<?php 
	View::load("index");
?>

<script src="res/jquery.min.js"></script>
</body>

</html>