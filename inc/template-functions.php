<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dgventures
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dgventures_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'dgventures_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dgventures_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dgventures_pingback_header' );




// Custom Functions


// add image sizes
add_image_size( 'interview-head-size', 1366, 693 );

// remove autop
remove_filter('the_content', 'wpautop');

// CPT TEAM 
function custom_post_type_team() {
 
    $labels = array(
        'name'                => _x( 'Team', 'Post Type General Name', 'dgventures' ),
        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'dgventures' ),
        'menu_name'           => __( 'Team', 'dgventures' ),
        'parent_item_colon'   => __( 'Parent Item:', 'dgventures' ),
        'all_items'           => __( 'All Team', 'dgventures' ),
        'view_item'           => __( 'View Team', 'dgventures' ),
        'add_new_item'        => __( 'Add New Team', 'dgventures' ),
        'add_new'             => __( 'Add New', 'dgventures' ),
        'edit_item'           => __( 'Edit Item', 'dgventures' ),
        'update_item'         => __( 'Update Item', 'dgventures' ),
        'search_items'        => __( 'Search Item', 'dgventures' ),
        'not_found'           => __( 'Not found', 'dgventures' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dgventures' ),
    );
    $args = array(
        'label'               => __( 'Team', 'dgventures' ),
        'description'         => __( 'Post Type Description', 'dgventures' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author' ),
        'taxonomies'          => array( '' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-businessperson',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
       
    );
    register_post_type( 'Team', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_post_type_team', 0 );

// Add custom taxonomy industry for portfolio
add_action( 'init', 'crunchify_create_deals_custom_taxonomy_status', 0 );

// Add custom taxonomy industry for portfolio
add_action( 'init', 'crunchify_create_deals_custom_taxonomy_teamgroup', 0 );

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy_teamgroup() {
 
  $labels = array(
    'name' => _x( 'Group', 'taxonomy general name' ),
    'singular_name' => _x( 'Group', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Group' ),
    'all_items' => __( 'All Groups' ),
    'parent_item' => __( 'Parent Group' ),
    'parent_item_colon' => __( 'Parent Group:' ),
    'edit_item' => __( 'Edit Group' ), 
    'update_item' => __( 'Update Group' ),
    'add_new_item' => __( 'Add New Group' ),
    'new_item_name' => __( 'New Group Name' ),
    'menu_name' => __( 'Group' ),
  ); 	
 
  register_taxonomy('group',array('team'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'status' ),
  ));
}





// CPT  Blog
function custom_post_type_blog() {
 
    $labels = array(
        'name'                => _x( 'Blog', 'Post Type General Name', 'dgventures' ),
        'singular_name'       => _x( 'Blog', 'Post Type Singular Name', 'dgventures' ),
        'menu_name'           => __( 'Blog', 'dgventures' ),
        'parent_item_colon'   => __( 'Parent Item:', 'dgventures' ),
        'all_items'           => __( 'All Blog', 'dgventures' ),
        'view_item'           => __( 'View Blog', 'dgventures' ),
        'add_new_item'        => __( 'Add New Blog', 'dgventures' ),
        'add_new'             => __( 'Add New', 'dgventures' ),
        'edit_item'           => __( 'Edit Item', 'dgventures' ),
        'update_item'         => __( 'Update Item', 'dgventures' ),
        'search_items'        => __( 'Search Item', 'dgventures' ),
        'not_found'           => __( 'Not found', 'dgventures' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dgventures' ),
    );
    $args = array(
        'label'               => __( 'Blog', 'dgventures' ),
        'description'         => __( 'Post Type Description', 'dgventures' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author' ),
				'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'menu_icon'           => 'dashicons-format-quote',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
       
    );
    register_post_type( 'Blog', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_post_type_blog', 0 );

add_action( 'init', 'crunchify_create_stage_custom_taxonomy_blog', 0 );
//create a custom taxonomy name it "Blog" for your posts
function crunchify_create_stage_custom_taxonomy_blog() {
 
  $labels = array(
    'name' => _x( 'Stage', 'taxonomy general name' ),
    'singular_name' => _x( 'Stage', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Stage' ),
    'all_items' => __( 'All Stages' ),
    'parent_item' => __( 'Parent Stage' ),
    'parent_item_colon' => __( 'Parent Stage:' ),
    'edit_item' => __( 'Edit Stage' ), 
    'update_item' => __( 'Update Stage' ),
    'add_new_item' => __( 'Add New Stage' ),
    'new_item_name' => __( 'New Stage Name' ),
    'menu_name' => __( 'Stage' ),
  ); 	
 
  register_taxonomy('stage',array('blog'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'stage' ),
  ));
}




// CPT  News
function custom_post_type_news() {
 
    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'dgventures' ),
        'singular_name'       => _x( 'News', 'Post Type Singular Name', 'dgventures' ),
        'menu_name'           => __( 'News', 'dgventures' ),
        'parent_item_colon'   => __( 'Parent Item:', 'dgventures' ),
        'all_items'           => __( 'All News', 'dgventures' ),
        'view_item'           => __( 'View News', 'dgventures' ),
        'add_new_item'        => __( 'Add New News', 'dgventures' ),
        'add_new'             => __( 'Add New', 'dgventures' ),
        'edit_item'           => __( 'Edit Item', 'dgventures' ),
        'update_item'         => __( 'Update Item', 'dgventures' ),
        'search_items'        => __( 'Search Item', 'dgventures' ),
        'not_found'           => __( 'Not found', 'dgventures' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dgventures' ),
    );
    $args = array(
        'label'               => __( 'News', 'dgventures' ),
        'description'         => __( 'Post Type Description', 'dgventures' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author' ),
        'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-edit',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
       
    );
    register_post_type( 'News', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_post_type_news', 0 );



// CPT  Interview
function custom_post_type_interview() {
 
    $labels = array(
        'name'                => _x( 'Interview', 'Post Type General Name', 'dgventures' ),
        'singular_name'       => _x( 'Interview', 'Post Type Singular Name', 'dgventures' ),
        'menu_name'           => __( 'Interview', 'dgventures' ),
        'parent_item_colon'   => __( 'Parent Item:', 'dgventures' ),
        'all_items'           => __( 'All Interviews', 'dgventures' ),
        'view_item'           => __( 'View Interview', 'dgventures' ),
        'add_new_item'        => __( 'Add New Interview', 'dgventures' ),
        'add_new'             => __( 'Add New', 'dgventures' ),
        'edit_item'           => __( 'Edit Item', 'dgventures' ),
        'update_item'         => __( 'Update Item', 'dgventures' ),
        'search_items'        => __( 'Search Item', 'dgventures' ),
        'not_found'           => __( 'Not found', 'dgventures' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dgventures' ),
    );
    $args = array(
        'label'               => __( 'Interviews', 'dgventures' ),
        'description'         => __( 'Post Type Description', 'dgventures' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author' ),
        'taxonomies'          => array( '' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-star-filled',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
       
    );
    register_post_type( 'Interview', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_post_type_interview', 0 );



// CPT  Portfolio
function custom_post_type_portfolio() {
 
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'dgventures' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'dgventures' ),
        'menu_name'           => __( 'Portfolio', 'dgventures' ),
        'parent_item_colon'   => __( 'Parent Item:', 'dgventures' ),
        'all_items'           => __( 'All Portfolio', 'dgventures' ),
        'view_item'           => __( 'View Portfolio', 'dgventures' ),
        'add_new_item'        => __( 'Add New Portfolio', 'dgventures' ),
        'add_new'             => __( 'Add New', 'dgventures' ),
        'edit_item'           => __( 'Edit Item', 'dgventures' ),
        'update_item'         => __( 'Update Item', 'dgventures' ),
        'search_items'        => __( 'Search Item', 'dgventures' ),
        'not_found'           => __( 'Not found', 'dgventures' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dgventures' ),
    );
    $args = array(
        'label'               => __( 'Portfolio', 'dgventures' ),
        'description'         => __( 'Post Type Description', 'dgventures' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'author' ),
        'taxonomies'          => array( 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-image-filter',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
       
    );
    register_post_type( 'Portfolio', $args );
 
}
 
// Hook into the 'init' action
add_action( 'init', 'custom_post_type_portfolio', 0 );

// Add custom taxonomy industry for portfolio
add_action( 'init', 'crunchify_create_deals_custom_taxonomy_industry', 0 );
 
//create a custom taxonomy name it "CPT" for your posts
function crunchify_create_deals_custom_taxonomy_industry() {
 
  $labels = array(
    'name' => _x( 'Industry', 'taxonomy general name' ),
    'singular_name' => _x( 'Industry', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Industries' ),
    'all_items' => __( 'All Industries' ),
    'parent_item' => __( 'Parent Industry' ),
    'parent_item_colon' => __( 'Parent Industry:' ),
    'edit_item' => __( 'Edit Industry' ), 
    'update_item' => __( 'Update Industry' ),
    'add_new_item' => __( 'Add New Industry' ),
    'new_item_name' => __( 'New Industry Name' ),
    'menu_name' => __( 'Industry' ),
  ); 	
 
  register_taxonomy('industry',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'industry' ),
  ));
}

// Add custom taxonomy industry for portfolio
add_action( 'init', 'crunchify_create_deals_custom_taxonomy_status', 0 );

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy_status() {
 
  $labels = array(
    'name' => _x( 'Status', 'taxonomy general name' ),
    'singular_name' => _x( 'Status', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Status' ),
    'all_items' => __( 'All Status' ),
    'parent_item' => __( 'Parent Status' ),
    'parent_item_colon' => __( 'Parent Status:' ),
    'edit_item' => __( 'Edit Status' ), 
    'update_item' => __( 'Update Status' ),
    'add_new_item' => __( 'Add New Status' ),
    'new_item_name' => __( 'New Status Name' ),
    'menu_name' => __( 'Status' ),
  ); 	
 
  register_taxonomy('status',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'status' ),
  ));
}



// custom pagination
function bittersweet_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' 				=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'	 		=> '?paged=%#%',
        'current' 		=> max( 1, get_query_var('paged') ),
        'total' 			=> $wp_query->max_num_pages,
        'type'  			=> 'array',
        'prev_text'   => __('Prev'),
				'next_text'   => __('Next'),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<nav><ul class="pagination justify-content-center">';
        foreach ( $pages as $page ) {
                echo '<li class="page-item">'.$page.'</li>';
        }
       echo '</ul></nav>';
        }
}




// WPMP language switcher
function icl_post_languages_link(){
  $languages = icl_get_languages('skip_missing=1');
  if(1 < count($languages)){
    echo __('');
    foreach($languages as $l){
      if(!$l['active']) $langs[] = $l['url'];
    }
    echo join(' ', $langs);
  }
}


// remove default POST
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});


/**
 * Show all Portfolio CPT items on archive
 *
 */

add_action( 'pre_get_posts', 'spigot_show_all_work' );

function spigot_show_all_work( $query ) {
    
    if ( ! is_admin() && $query->is_main_query() ) {
    
        if ( is_post_type_archive( 'portfolio' ) ) {
            
            $query->set('posts_per_page', -1 );
    
        }
    }
}






/**
 * Social media share buttons
 */
function wcr_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('share-template.php', false, false) );
}








