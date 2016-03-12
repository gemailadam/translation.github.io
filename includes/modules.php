<?php
/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/////////////////////////////////////////////
///////////// Float sidebar /////////////////
/////////////////////////////////////////////

function qwe_register_float_newsletter() {
$args = array('name' =>'newsletter',
	'id'=>'newsletter' ,
	'description'=> 'add wigjet to float newsletter signin',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args);

}

add_action('widgets_init','qwe_register_float_newsletter');



?>