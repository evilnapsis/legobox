<?php

/// el archivo boot.php define 3 acciones
/// accion de inicio
/// accion de layout
/// accion de fin


if(!isset($_REQUEST["action"])){
Layout::load("layout");
}else{
	Action::load($_REQUEST["action"]);
}


?>