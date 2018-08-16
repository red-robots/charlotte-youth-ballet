<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
						<?php 
						if(is_page('sitemap')) {
							the_content();
							wp_nav_menu( array( 'theme_location' => 'sitemap' );
						} else {
							the_content();
						}
						 ?>
						
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php endwhile; // End of the loop. ?>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
