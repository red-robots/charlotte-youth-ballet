<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

$title = get_field('title');
$artist_photo = get_field('artist_photo');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="left">
					<img src="<?php echo $artist_photo['url']; ?>" alt="<?php echo $artist_photo['alt']; ?>">
				</div>
				<div class="right">
					<header class="entry-header artisit">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<h2><?php echo $title; ?></h2>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div>

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php 
get_footer();
