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
	<a href="index.php?view=newpost" class="btn btn-default pull-right"><i class='glyphicon glyphicon-file'></i> Nuevo Articulo</a>
		<div style="font-size:35px;">Lista de Articulos</div>
		<br>
		<?php
		/*
		$p = new PostData();
		$p->title = "Probando Legobox";
		$p->content = "Estamos haciendo pruebas utilizando el framework legoBox, por NeoWelder Labs.";
		$p->is_public = 0;
		$p->user_id = 1;
		$p->add();

		$f = $p->createForm();
		echo $f->label("title")." ".$f->render("title");
		*/
		?>
		<?php
		/*
		$u = new UserData();
		print_r($u);
		$u->name = "Agustin";
		$u->lastname = "Ramos";
		$u->email = "evilnapsis@gmail.com";
		$u->password = sha1(md5("l00lapal00za"));
		$u->add();


		$f = $u->createForm();
		print_r($f);
		echo $f->label("name")." ".$f->render("name");
		*/
		?>
		<?php

		$posts = PostData::getAll();
		if(count($posts)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Titulo</th>
			<th>Fecha de Creacion</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			</thead>
			<?php
			foreach($posts as $post){
				?>
				<tr>
				<td><?php echo $post->title; ?></td>
				<td><?php echo $post->created_at; ?></td>
				<td style="width:35px;">
					<?php  if($post->is_public==0){
						echo "<a href='index.php?view=publishpost&id=$post->id' class='btn btn-primary'><i class='glyphicon glyphicon-ok'></i></a>";
						}else{
						echo "<a href='index.php?view=publishpost&id=$post->id' class='btn btn-default'><i class='glyphicon glyphicon-eye-close'></i></a>";							
						}

						 ?>
				</td>
				<td style="width:35px;"><a href="index.php?view=post&id=<?php echo $post->id; ?>" target="_blank" class="btn btn-info"><i class='glyphicon glyphicon-eye-open'></i></a></td>
				<td style="width:35px;"><a href="index.php?view=editpost&id=<?php echo $post->id; ?>" class="btn btn-warning"><i class='glyphicon glyphicon-pencil'></i></a></td>
				<td style="width:35px;"><a href="" class="btn btn-danger"><i class='glyphicon glyphicon-trash'></i></a></td>
				<td style="width:35px;">
					<?php  if($post->is_public==1){
						echo "<a href='#' class='btn btn-default'><i class='glyphicon glyphicon-ok'></i></a>";
						} ?>
				</td>
				</tr>
				<?php

			}



		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>