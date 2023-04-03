<?php
$url = 'https://www.telugu360.com/wp-json/wp/v2/posts?_fields=id,title,content,slug,jetpack_featured_media_url&per_page=20';
$raw = file_get_contents($url);				// getting data from API

$data = json_decode( $raw ); 					// converting string data to our (php) format


// For loop to display each post (news article)
for ($i = 0; $i < count($data); $i++){

	$post = $data[$i]; 									// storing each post in $post
	$id = $post->id;
	$img = $post->jetpack_featured_media_url;
	$title = $post->title->rendered;
?>

	<div class="article">
		<a href="news_single.php?id=<?php echo $id; ?>">
			<img src="<?php echo $img; ?>">
		</a>
		<h1><?php echo $title; ?></h1>
	</div>
	
	<?php
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