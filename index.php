<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

/* Start the Loop */
$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
if ( have_posts() ) : the_post(); 

$banner = get_field('main_banner');
$blue_title = get_field('blue_title');
$main_title = get_field('main_title');
$copy = get_field('copy');
$learn_more_link = get_field('learn_more_link');
$background_image = get_field('background_image');

endif;

// echo '<pre>';
// print_r($banner);
// echo '</pre>';
?>

<section class="main-banner">
	<img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>">
</section>

	<div class="content-area-full">
		<main id="main" class="site-main" role="main">

		<section class="home about">
			<div class="blue-title">
				<h2><?php echo $blue_title; ?></h2>
			</div>
			<div class="image">
				<img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>">
			</div>
			<div class="info">
				<h2><?php echo $main_title; ?></h2>
				<?php echo $copy; ?>
				<div class="button">
					<a href="<?php echo $learn_more_link; ?>">Learn More</a>
				</div>
			</div>
			
		</section>
<?php 
$bg_image = get_field('background_image_third');
$fb_image = get_field('first_block_image');
$sb_image = get_field('second_block_image');
$tb_image = get_field('third_block_image');
$fb_title = get_field('first_block_title');
$sb_title = get_field('second_block_title');
$tb_title = get_field('third_block_title');
$fb_copy = get_field('first_block_copy');
$sb_copy = get_field('second_block_copy');
$tb_copy = get_field('third_block_copy');
$fb_link = get_field('first_block_link');
$sb_link = get_field('second_block_link');
$tb_link = get_field('third_block_link');


 ?>
		<section class="third-section">
			<div class="flex">
				<div class="item">
					<a href="<?php echo $fb_link; ?>">
						<div class="image">
							<div class="circle">
								<img src="<?php bloginfo('template_url'); ?>/images/circle.png" />
							</div>
							<div class="back-image">
								<img src="<?php echo $fb_image['url']; ?>" alt="<?php echo $fb_image['alt']; ?>">
							</div>
						</div>
						<h2><?php echo $fb_title; ?></h2>
						<div class="desc">
							<?php echo $fb_copy; ?>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="<?php echo $sb_link; ?>">
						<div class="image">
							<div class="circle">
								<img src="<?php bloginfo('template_url'); ?>/images/circle.png" />
							</div>
							<div class="back-image">
								<img src="<?php echo $sb_image['url']; ?>" alt="<?php echo $sb_image['alt']; ?>">
							</div>
						</div>
						<h2><?php echo $sb_title; ?></h2>
						<div class="desc">
							<?php echo $sb_copy; ?>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="<?php echo $tb_link; ?>">
						<div class="image">
							<div class="circle">
								<img src="<?php bloginfo('template_url'); ?>/images/circle.png" />
							</div>
							<div class="back-image">
								<img src="<?php echo $tb_image['url']; ?>" alt="<?php echo $tb_image['alt']; ?>">
							</div>
						</div>
						<h2><?php echo $tb_title; ?></h2>
						<div class="desc">
							<?php echo $tb_copy; ?>
						</div>
					</a>
				</div>
			</div>
			<!-- <div class="bg-image">
				<img src="<?php echo $bg_image['url']; ?>">
			</div> -->
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
