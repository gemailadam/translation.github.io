<?php 

// callback

function recent_posts_function($atts, $content = null) {

   extract(shortcode_atts(array(
      'posts' => 1,
   ), $atts));


   $return_string = '<h3>'.$content.'</h3>';
   $return_string .= '<ul>';

   query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => 1));
   if (have_posts()) :
      while (have_posts()) : the_post();
         $return_string = '<a href="'.get_permalink().'">'.get_the_title().'</a>';
      endwhile;
   endif;
   wp_reset_query();
   return $return_string;
}


// register shortcode 

//[ remmber repeated function in php cant be used except in function not like c/c++ override]

function register_shortcodes(){
   add_shortcode('recent-posts', 'recent_posts_function');
}

// hook

add_action( 'init', 'register_shortcodes');


// [recent-posts posts="5"]

?>