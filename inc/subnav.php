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
		case 'Outreach':
		wp_nav_menu( array( 'theme_location' => 'outreach' ) );
		break;
		case 'Support':
		wp_nav_menu( array( 'theme_location' => 'support' ) );
		break;
		case 'Dance with Us':
		wp_nav_menu( array( 'theme_location' => 'dance' ) );
		break;
		case 'Performances':
		wp_nav_menu( array( 'theme_location' => 'performances' ) );
		break;
		case 'None':
		break;
	}
	?>
</nav>