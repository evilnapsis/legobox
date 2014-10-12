<?php
if(isset($_GET)){
$p = PostData::getById($_GET['id']);

if($p->is_public==0){
	// si el post no esta publicado entonces lo hacemos publico
	$p->is_public = 1;
}else if($p->is_public==1){
	// si el post esta publicado entonces lo ocultamos
	$p->is_public = 0;
}

$p->update();
print "<script>window.location='index.php';</script>";
}
?>