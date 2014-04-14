

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class='glyphicon glyphicon-cog'></i> Opciones</h3>
            </div>
        	<div class="list-group">
					<a href='index.php' class='list-group-item'> Panel de Control</a>
					<a href='index.php?view=users' class='list-group-item'> Usuarios</a>
			</div>
        </div>
	</div>
	<div class="col-md-9">

<?php
$post = PostData::getById($_GET['id']);

if($post!=null):
?>

		<div style="font-size:35px;">Editar Articulo</div>

<form class="form-horizontal" method="post" action="index.php?view=updatepost" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" value="<?php echo $post->title; ?>" name="title" id="titulo" placeholder="Escribe un titulo" autocomplete="false" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Contenido</label>
    <div class="col-lg-10">
    	<textarea name="content" id="contenido" class="form-control" placeholder="Escriba el contenido de la publicacion." style="height:200px;" required><?php echo $post->content; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="is_public" <?php if($post->is_public=="1"){ echo "checked"; }?> > Este articulo esta publicado
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <input type="hidden" name="id" value="<?php echo $post->id; ?>">
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-saved"></i> Actualizar</button>
    </div>
  </div>
</form>

<?php endif; ?>
	</div>
</div>
