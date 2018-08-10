<nav class="subnav">
	<?php 
	$menu = get_field('choose');
					
	switch ( $menu ) {
		case 'About':
		wp_nav_menu( array( 'theme_location' => 'about' ) );
		break;
		case 'Company':
		wp_nav_menu( array( 'theme_location' => 'company' ) );
		break;
		case 'None':
		break;
	}
	?>
</nav>