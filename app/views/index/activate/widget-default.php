<div class="container">
  <div class="row">

    <div class="col-md-12">
    <h1 class="text-primary">ACTIVACION DE CUENTA</h1>
</div>
</div>
  <div class="row">

    <div class="col-md-6">
    <h2>SOLICITAR CODIGO</h2>
    <p>Para activar tu cuenta necesitaras un codigo de 6 digitos que se envia a tu correo electronico una vez que te hayas registrado.</p>
    <p>Si por algun motivo perdiste el email o el codigo puedes solicitar uno nuevo aqui.</p>
    <br><div class="panel panel-default">
    <div class="panel-heading">
    Solicitar codigo
    </div>
    <div class="panel-body">
    <form role="form" method="post" action="./?r=index/getcode">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>
  <button type="submit" class="btn btn-block btn-default">Solicitar codigo</button>
</form>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <h2>INSERTAR CODIGO</h2>
    <p>A continuacion inserta tu correo electronico y el codigo que se te envio por correo.</p>
    <p>Una vez introducido el codigo valido podras iniciar sesion en tu cuenta.</p>
    <br>

    <!-- -->
<div class="panel panel-default">
    <div class="panel-heading">
    Ya tengo un codigo
    </div>
    <div class="panel-body">
    <form role="form" method="post" action="./?r=index/processactivation">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Codigo</label>
    <input type="password" name="code" class="form-control" id="exampleInputPassword1" placeholder="Codigo" required>
  </div>
  <button type="submit" class="btn btn-block btn-default">Registrar</button>
</form>
    </div>
    </div>
    </div>
  </div>
</div>
