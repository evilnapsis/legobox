<?php
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
require "lib/Slim/Slim.php";
 include "lib/legobox/autoload.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array("debug"=>true ));

$app->get('/hello', function () {
     //echo "<br><br><br>Hello";
    //$app->render("index.php");
 App::load("wellcome");
});

$app->run();

// cargamos el modulo iniciar.

?>