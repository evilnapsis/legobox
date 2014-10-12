<?php

$post = PostData::getById($_GET['id']);
if($post!=null):
?>

<div class="row">
	<div class="col-md-9">
		<h2><?php echo $post->title; ?></h2>
		<p><?php echo $post->content; ?></p>
	</div>
</div>
<?php else:?>
	<h1>404 Post Not Found !!</h1>
<?php endif; ?>