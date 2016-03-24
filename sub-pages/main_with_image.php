<?php 
	if (have_posts()) {
		$qweImage=get_template_directory_uri().'/images/post1.jpg';
		$oddeven=1;

		while (have_posts()) {
			the_post();
			echo '<div id="post-';the_ID();echo '"';post_class();echo '>';
			echo '<div class="qwe-post-wrapper qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
			
			if ($oddeven %2 == 0) {
			echo '<div class="qwe-left-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';				
			echo '<div class="qwe-article">';				
				echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';
				the_content();
				
			echo '</div>';
			echo '</div>';
			echo '<div class="qwe-right-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
				echo '<img class="previewImage" src="';echo get_theme_mod('image_qwe',$qweImage);echo '" alt=""/>';
			echo '</div>';
			}else{
			echo '<div class="qwe-left-part qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';
				echo '<img class="previewImage" src="';echo get_theme_mod('image_qwe',$qweImage);echo '" alt=""/>';
			echo '</div>';
			echo '<div class="qwe-right-part qwe-article qwe-col-xl-6 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">';				
			echo '<div class="qwe-article">';
				echo '<h1 class="qwe-page-title"><a href="';the_permalink();echo '">';the_title();echo '</a></h1>';
				the_content();
			echo '</div>';
			echo '</div>';
			}

			echo '</div>';
			echo "</div>";

			$oddeven=$oddeven+1;
		}
	}
?>

