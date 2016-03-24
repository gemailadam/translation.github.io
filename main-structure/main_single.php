<section class="qwe-single">

<?php 
if (have_posts()) {
// while (have_posts()) {
the_post();
echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

echo '<div class="qwe-post-wrapper">';

echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';

echo '<div class="postedby">';
echo '<b>';
echo '<a href="';
the_author_link();
echo '"><span>author: ';
the_author();
echo ' , </span></a>';
echo '<a href="';
the_permalink();	
echo '"><span> at : ';
the_date( get_option( 'date_format', 'F Y'));
echo '</span></a>';
echo '<a><span> , Category : ';
the_category();
echo '</span></a><a><span> , Tags :';
the_tags();
echo "</span></a>";
echo '</b>';
echo '</div>';
echo '<!-- END post by class -->';

the_content();
?>

<div class="qwe-next-prev-post">
	<span class="qwe-prev-post">
		<?php previous_post_link(); ?>
	</span>
	<span class="qwe-next-post">
		<?php next_post_link(); ?>
	</span>  
</div>

<div class=" col-xs-9 col-lg-9 col-md-12 col-sm-12 col-vs-12">
	<div class="qwe-comments">
 		<?php comments_template( $file, $separate_comments ); ?>
 	</div>
</div>

<?php

echo '</div>';
echo "</div>";

} //end if

?>

</section>
<!-- end qwe-single -->