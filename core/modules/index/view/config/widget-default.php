<?php
$user = UserData::getById($_SESSION["user_id"]);

?>
<br><br><br><br>
<div class="container">
	<div class="row">

		<div class="col-md-4 col-md-offset-4">
<!--
<div class="panel panel-default">
		<div class="panel-heading">
		Configuracion del usuario
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="./?r=index/processregister">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="lastname" value="<?php echo $user->lastname; ?>" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" value="<?php echo $user->email; ?>" readonly="" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico" required>
  </div>
  <button type="submit" class="btn btn-block btn-default">Actualizar Datos</button>
</form>
		</div>
		</div>
-->

<div class="panel panel-default">
    <div class="panel-heading">
    Cambiar contrase&ntilde;a
    </div>
    <div class="panel-body">
    <form role="form" method="post" action="./?action=changepassword">
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Password</label>
    <input type="password" name="confirm" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Password" required>
  </div>
  <button type="submit" class="btn btn-block btn-default">Cambiar contrase&ntilde;a</button>
</form>
    </div>
    </div>



		</div>
	</div>
</div>
<br><br><br>
