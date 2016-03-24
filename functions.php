<?php
require_once ('includes/customize.php');
require_once ('includes/modules.php');
require_once ('includes/essential.php');

// register navigation menus
function register_nav_menu_qwe(){

	register_nav_menu( 'header', 'Header Menu' );
}
add_action('init','register_nav_menu_qwe' );

// register sidebar 

function register_sidebar_qwe(){

$args = array(
	'name'          => __( 'sidebar-right', 'theme_text_domain' ),
	'id'            => 'sidebar-right',
	'description'   => 'Right Sidebar',
        // 'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

	register_sidebar($args);
}
add_action('widgets_init','register_sidebar_qwe');


function register_footers_qwe(){

$args = array(
	'name'          => __( 'footer %d', 'theme_text_domain' ),
	'id'            => 'footer',
	// 'description'   => '',
 //        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

	register_sidebars(3,$args);
}
add_action('widgets_init','register_footers_qwe');


?>