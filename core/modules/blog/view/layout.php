<html>
<head>
<title>Usando Legobox 3</title>
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
      <a class="navbar-brand" href="#">Blogito</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> Panel de control</a></li>
          <li><a href="index.php?view=newpost"><i class="glyphicon glyphicon-file"></i> Nuevo</a></li>

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

<script src="res/jquery.min.js"></script>
<script src="core/modules/<?php echo Module::$module; ?>/res/redactor/redactor.min.js"></script>
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