<?php

class IndexController {
	public $default_layout = "layout";

	public function indexAction(){
		$meta = array("title"=>"Hello LB");

		View::render($this,"index/index",array("meta"=>$meta));
	}

	public function homeAction(){
		$meta = array("title"=>"Hello LB");
		Session::setFlashMsg("mensaje","Hola wey");
		Core::redir("./?r=index/index");
		//View::render($this,"index",array("meta"=>$meta));
	}


}


?>