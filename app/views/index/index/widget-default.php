<?php foreach(Session::getFlashMsgs() as $flashmsg):?>
<div class="alert alert-danger">
<?php
echo $flashmsg;
?>
</div>
<?php endforeach;?>





<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2><i class="fa fa-rocket"></i> Bienvenido a Legobox 3.8</h2>
				<p>Me complace anunciar esta version porque tiene muchas mejoras contra la version anterior.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">		
			<h2>Componentes</h2>
			<p class="lead">Los componentes de legobox estan desarrollados para facilitar el desarrollo de aplicaciones.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h2>Models</h2>
			<p>Los modelos son representaciones en clase de las tablas de la base de datos.</p>
		</div>
		<!-- -->
		<div class="col-md-3">
			<h2>Boots</h2>
			<p>Los boots son trozos de codigo que se ejecutan antes de cargar el layout y cada vista.</p>
		</div>
		<!-- -->
		<div class="col-md-3">
			<h2>Views</h2>
			<p>Las vistas(views) son los elementos visuales que representan cada pantalla de la app. </p>
		</div>
		<!-- -->
		<div class="col-md-3">
			<h2>Actions</h2>
			<p>Las actions son rutinas de codigo que se pueden usar en cualquier momento.</p>
		</div>
		<!-- -->
	</div>
</div>
