<?php


class App {

	public static $appname;

	public  function setApp($appname){
		self::$appname = $appname;
	}

	public static function load($appname){
		self::setApp($appname);
		// echo "load $appname";
				include "apps/".self::$appname."/init.php";

	}



}



?>