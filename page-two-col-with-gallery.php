<?php
/**
 * Template Name: 2 col with Gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

get_template_part('inc/subnav');

?>
<div class="page-bg">
	<div class="wrapper">
		<div id="primary" class="content-area ">
			<main id="main" class="site-main" role="main">
				

				<?php
				while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php endwhile; // End of the loop. ?>
				
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="widget-area">
			<?php 
			$gallery = get_field('gallery');
			$size = 'full';
			// echo '<pre>';
			// print_r($gallery);
			// echo '</pre>';

			foreach ( $gallery as $image ) : ?>
				<div class="gal-image">
					<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
				</div>
			<?php endforeach; ?>

		
		</div>
	</div>
</div>
<?php
get_footer();
