<div class="qwe-services-page">
<?php 
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		echo '<div class="qwe-post-wrapper">';

			echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';

			echo '<div class="qwe-page-body">';
			the_content();
			echo '</div>';

		echo '</div>';

		echo "</div>";
	}
}
?>
</div>
<!-- end qwe-page-class -->