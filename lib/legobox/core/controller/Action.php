<?php


// 12 de Octubre del 2014
// Action.php
// @brief Un action corresponde a una rutina de un modulo.

class Action {
	/**
	* @function load
	* @brief la funcion load carga una vista correspondiente a un modulo
	**/	
	public static function load($action){
		// Module::$module;
		if(!isset($_GET['action'])){
			include "apps/".App::$appname."/modules/".Module::$module."/action/".$action."/widget-default.php";
		}else{


			if(Action::isValid()){
				include "apps/".App::$appname."/modules/".Module::$module."/action/".$_GET['action']."/widget-default.php";				
			}else{
				Action::Error("<b>404 NOT FOUND</b> Action <b>".$_GET['action']."</b> folder  !!");
			}



		}
	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
	**/	
	public static function isValid(){
		$valid=false;
		if(file_exists($file = "apps/".App::$appname."/modules/".Module::$module."/action/".$_GET['action']."/widget-default.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

}



?>