<?php
if(isset($_SESSION["user_id"])):
	$user = UserData::getById($_SESSION["user_id"]);
?>
<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="jumbotron">
	<h1>Hola, <?php echo $user->name;?></h1>
	<a href="./?view=config" class="btn btn-warning">Configurar</a>
	<a href="./?action=processlogout" class="btn btn-danger">Salir</a>
	</div>
	</div>
	</div>
</div>
<?php else: Core::redir("./"); endif;?>