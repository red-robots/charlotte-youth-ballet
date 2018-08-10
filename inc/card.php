<?php 

$title = get_field('title');
$artist_photo = get_field('artist_photo');

 ?>
<div class="card">
	<?php if($artist_photo) { ?>
		<img src="<?php echo $artist_photo['url']; ?>" alt="<?php echo $artist_photo['alt']; ?>">	
	<?php } ?>
	<div class="content">
		<h2><?php the_title(); ?></h2>
		<?php if($title) { ?>
			<h3><?php echo $title; ?></h3>
		<?php } ?>	
	</div>	
	<div class="hover">
		<div class="button">
			<a href="<?php the_permalink(); ?>">READ BIO</a>
		</div>
	</div>
</div>	