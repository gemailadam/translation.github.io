<?php 
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function new_excerpt_more_qwe( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('[ Read More ]', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more_qwe' );

?>