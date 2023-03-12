<?php
$url = 'https://www.telugu360.com/wp-json/wp/v2/posts?_fields=id,title,content,slug,jetpack_featured_media_url&per_page=20';
$raw = file_get_contents($url);				// getting data from API

$data = json_decode( $raw ); 					// converting string data to our (php) format


// For loop to display each post (news article)
for ($i = 0; $i < count($data); $i++){

	$post = $data[$i]; 									// storing each post in $post
	
	echo '<div class="article">';
	echo '<img src="' . $post->jetpack_featured_media_url . '">';
	echo '<h1>' . $post->title->rendered . '</h1>';
	// echo '<p>' .  $post->content->rendered . '</p>';
	echo '</div>';
}


// Adding some css to improve design / look
// add each css property and see difference in output...
?>
<style type="text/css">
	img{
		width: 200px;
	}
	h1{
		font-size: 18px;
	}
	.article{
		background-color: skyblue;
		border: 2px solid;
		margin: 10px;
		padding:20px;
		width: 250px;
		min-height: 250px;
		display: inline-block;
		float: left;

		text-align: center;
		border-radius: 10px;
		font-family: Arial;
	}
</style>