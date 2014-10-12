<?php


// 13 de Abril del 2014
// Module.php
// @brief tareas que se realizan con modulos.

class Layout {
	public static $layout;
	public static $view;
	public static $message;

	public  function setModule($layout){
		self::$layout = $layout;
	}

	public static function load($layout){
		$file = "apps/".App::$appname."/layout/$layout.php";
		//echo "<br><br><br><br>".$file;
		include $file;
	}

	// validacion del modulo
	public static function isValid(){
		$valid = false;
		$folder = "core/modules/".Module::$layout;
		
			if(is_dir($folder)){
				$valid=true;

			}else { self::$message= "<b>404 NOT FOUND</b> Module <b>".Module::$layout."</b> folder  !!"; }
		
	
		return $valid;
	}

	public static function Error(){
		echo self::$message;
		die();
	}

}



?>