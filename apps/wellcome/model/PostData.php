<?php
class PostData {
	public static $tablename = "post";

	public  function createForm(){
		$form = new lbForm();
	    $form->addField("title",array('type' => new lbInputText(array("label"=>"Nombre")),"validate"=>new lbValidator(array())));
	    $form->addField("content",array('type' => new lbInputText(array("label"=>"Apellido")),"validate"=>new lbValidator(array())));
	    $form->addField("image",array('type' => new lbInputText(array()),"validate"=>new lbValidator(array())));
	    return $form;

	}

	public function PostData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->user_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (title,content,image,user_id,is_public,created_at) ";
		$sql .= "value (\"$this->title\",\"$this->content\",\"$this->image\",$this->user_id,$this->is_public,$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PostData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set title=\"$this->title\",content=\"$this->content\",image=\"$this->image\",is_public=\"$this->is_public\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new PostData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->title = $r['title'];
			$data->content = $r['content'];
			$data->image = $r['image'];
			$data->is_public = $r['is_public'];
			$data->user_id = $r['user_id'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new PostData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->title = $r['title'];
			$array[$cnt]->content = $r['content'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->is_public = $r['is_public'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or content like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new PostData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->title = $r['title'];
			$array[$cnt]->content = $r['content'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->is_public = $r['is_public'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


}

?>