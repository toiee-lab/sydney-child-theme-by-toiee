<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {
//    global $wp_scripts;

    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );    
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

function wpb_list_child_pages() { 

	global $post; 
	
	if ( is_page() && $post->post_parent )
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}
	
	return $string;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');


register_sidebar(array(
     'name'				=> '固定ページ サイドバー' ,
     'id'				=> 'pasge-sidebar-1' ,
     'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
     'after_widget' 	=> '</aside>',
     'before_title' 	=> '<h3 class="widget-title">',
     'after_title' 		=> '</h3>'
));

