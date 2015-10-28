<?php
if(isset($_SESSION["user_id"])):
	$user = UserData::getById($_SESSION["user_id"]);
?>
<div class="container">
	<div class="row">
	<div class="col-md-12">
<div class="btn-toolbar pull-right">
<div class="btn-group">
	<a href="./?view=config" class="btn btn-warning">Configurar</a>
</div>
<div class="btn-group">
	<a href="./?action=processlogout" class="btn btn-danger">Salir</a>
</div>
</div>
	<h2>Hola, <?php echo $user->name;?></h2>
<hr>
<p>Bienvenido al dashboard.</p>
	</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php else: Core::redir("./"); endif;?>