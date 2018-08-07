<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Company
  
     $labels = array(
	'name' => _x('Company', 'post type general name'),
    'singular_name' => _x('Company', 'post type singular name'),
    'add_new' => _x('Add New', 'Company'),
    'add_new_item' => __('Add New Company'),
    'edit_item' => __('Edit Company'),
    'new_item' => __('New Company'),
    'view_item' => __('View Company'),
    'search_items' => __('Search Company'),
    'not_found' =>  __('No Company found'),
    'not_found_in_trash' => __('No Company found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Company'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('company',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type

  /*
##############################################
  Custom Taxonomies
*/
add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
// cusotm tax
    register_taxonomy( 'company_type', 'company',
   array( 
  'hierarchical' => true, // true = acts like categories false = acts like tags
  'label' => 'Organization Type', 
  'query_var' => true, 
  'rewrite' => true ,
  'show_admin_column' => true,
  'public' => true,
  'rewrite' => array( 'slug' => 'company-type' ),
  '_builtin' => true
  ) );
  
} // End build taxonomies