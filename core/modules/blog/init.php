<?php
// init.php
// archivo iniciarlizador del modulo
// librerias requeridas
// * Database
// * Session

include "core/modules/".Module::$module."/model/UserData.php";
include "core/modules/".Module::$module."/model/PostData.php";


Module::loadLayout("index");

?>