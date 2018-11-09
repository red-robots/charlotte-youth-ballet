<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script async src='https://tag.simpli.fi/sifitag/dbfeee40-c121-0136-532a-067f653fa718'></script>
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>


<?php wp_head(); 

$facebook = get_field('facebook_link', 'option');
$twitter = get_field('twitter_link', 'option');
$instagram = get_field('instagram_link', 'option');

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		

		<div class="upper-header">
			<div class="wrapper flextop ">
				<section class="social">
					<ul>
						<?php if( $facebook != '' ) { ?>
							<li>
								<a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
							</li>
						<?php } ?>
						<?php if( $twitter != '' ) { ?>
							<li>
								<a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
							</li>
						<?php } ?>
						<?php if( $instagram != '' ) { ?>
							<li>
								<a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
							</li>
						<?php } ?>
					</ul>
				</section>
				<nav class="top">
					<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
			</div>
		</div>
		<div class="headerflex wrapper">
			<?php if(is_home()) { ?>
	            <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
		            </a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
		            </a>
	            </div>
	        <?php } ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>	
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
