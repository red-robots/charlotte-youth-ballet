<?php
/**
 * Template Name: Company
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

				<?php endwhile; // End of the loop. ?>

				<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'company',
				'posts_per_page' => -1,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'company_type', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'pricipal', 'featured-artist' ) // the terms (categories) you created
					)
				)
			));
				if ($wp_query->have_posts()) : ?>
				<section class="company entry-content">
					<h2>Prinicipals &amp; Featured Artists</h2>
					<div class="flex">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post();
							get_template_part('inc/card');
						 endwhile; ?>
					 </div>
				</section>
			<?php endif; ?>


			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'company',
				'posts_per_page' => -1,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'company_type', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'guest-artist', 'dancer' ) // the terms (categories) you created
					)
				)
			));
				if ($wp_query->have_posts()) : ?>
				<section class="company entry-content">
					<h2>Guest Artists</h2>
					<div class="flex">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post();
							get_template_part('inc/card');
						 endwhile; ?>
					 </div>
				</section>
			<?php endif; ?>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();