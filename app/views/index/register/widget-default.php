<div class="container">
	<div class="row">

		<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    <div class="panel-heading">
    Login
    </div>
    <div class="panel-body">
    <form role="form" method="post" action="./?r=index/processlogin">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-block btn-default">Acceder</button>
<br>  <a href="./?r=index/recover">Olvide mi contrase&ntilde;a ...</a>
</form>
    </div>
    </div>
<div class="panel panel-default">
		<div class="panel-heading">
		Registro
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="./?r=index/processregister">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Password</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Password" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" required> Acepto terminos y condiciones
    </label>
  </div>
  <button type="submit" class="btn btn-block btn-default">Registrar</button>
</form>
		</div>
		</div>
		</div>
	</div>
</div>
