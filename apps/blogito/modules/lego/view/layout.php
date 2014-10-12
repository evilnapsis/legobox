<html>
<head>
<title>Usando Legobox 3</title>
<link rel="stylesheet" type="text/css" href="res/bootstrap3/css/bootstrap.min.css">
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
      <a class="navbar-brand" href="#">LegoBox 3</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Tienda</a></li>

      </ul>
    </nav>
  </div>
</header><br><br><br>
<div class='container'>
<div class="row">
<div class="col-md-12">
<?php 
	View::load("index");
?>
</div>
</div>
</div>
</body>

</html>