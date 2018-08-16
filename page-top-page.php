<?php
/**
 * Template Name: Top Page
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
		<div id="primary" class="content-area-full ">
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


				<section class="page-portals">
					<div class="flex">
						<?php $pageID = get_the_ID();
						$args = array(
						    'post_type'      => 'page',
						    'posts_per_page' => -1,
						    'post_parent'    => $pageID,
						    'order'          => 'ASC',
						    'orderby'        => 'menu_order'
						 );


						$parent = new WP_Query( $args );
						if ( $parent->have_posts() ) : 
							while ( $parent->have_posts() ) : $parent->the_post(); ?>
						<div class="portal js-blocks">
							<?php if(has_post_thumbnail() ) {
								the_post_thumbnail();
								}?>
								<div class="content">
									<h2><?php the_title(); ?></h2>
									<?php // the_excerpt(); ?>
									<div class="button">
										<a href="<?php the_permalink(); ?>">Read More</a>
									</div>
								</div>
							
						</div>
					<?php endwhile; endif; ?>

					</div>
				</section>

				<?php endwhile; // End of the loop. ?>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
