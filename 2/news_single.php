<?php
$id = $_GET['id'];

$url='https://www.telugu360.com/wp-json/wp/v2/posts/'.$id.'?_fields=id,title,jetpack_featured_media_url,content';
$raw = file_get_contents($url);
$post = json_decode($raw);
$img = $post->jetpack_featured_media_url;
$title = $post->title->rendered;
$content = $post->content->rendered;
?>


<div class="article">
	<img src="<?php echo $img; ?>" height="300">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $content; ?></p>
</div>
<style type="text/css">
	.article{
		text-align: center;
	}
	p{
		font-size: 20px;
		font-family: Arial;
		text-align: justify;
	}
	h1{
		color: darkblue;
		font-family: Arial;
		text-align: center;
	}
	body{
		max-width: 800px;
		margin: auto;
	}
</style>