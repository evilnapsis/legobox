<?php
// init.php
// archivo iniciarlizador del modulo
// librerias requeridas
// * ninguna

/// cargamos los modelos via autoload

function __autoload($classname){
//	echo "cargando ... $classname";
	$file = "apps/".App::$appname."/model/".$classname.".php";
	if(file_exists($file)){
		include $file;
	}
}

Module::load("blog");

?>