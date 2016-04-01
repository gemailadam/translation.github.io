
<section class="qwe-slideshow" >

	<?php 

	$logo_qwe=get_template_directory_uri() .'/images/logo.png';
	


	?>
	<div class="gallerycontainer">

 	<div class="galleryPreviewContainer">
 		<div class="galleryPreviewImage">
 			<?php 
 			for ($count_qwe=1; $count_qwe <=3 ; $count_qwe++) { 
			
			$image_qwe=get_template_directory_uri() .'/images/slice'.$count_qwe.'.jpg';
 			$image_id_qwe=array('image1_qwe','image2_qwe','image3_qwe');	
			
			echo '<img class="previewImage'.$count_qwe.'" src="';echo get_theme_mod($image_id_qwe[$count_qwe],$image_qwe);
			echo '" alt=""/>';

 			}

 			?>
 		</div>

		<!-- Title STaRT-->
		<div class="qwe-site-title">
		<p>
			<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
			<a href="<?php echo get_theme_mod( 'qwe-description1-link', '#' ); ?>"><?php echo get_theme_mod( 'qwe-description1', '- WELCOME -' ); ?></a>	
			<a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a>
			<!-- <a href="#"><button><?php echo get_theme_mod('qwe-title-button','BUTTON' ); ?></button></a>	 -->
		</p>
		</div>
		<!-- Title END -->
 	
 		<div class="logo">
 			<?php echo '<img id="logo" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';
 			?>
 		</div>


 		<?php 
 		//$qwe_dir=get_theme_mod( 'qwe-rtl', 'ltr' );

 		//if ($qwe_dir=='ltr'){
 			?>
<!-- 
 			<div class="galleryPreviewarrow">
 				<a class="previousslidearrow qwe-row-static-1" href="#" >&lt;</a>
 				<a href="#" class="nextslidearrow qwe-row-static-1">&gt;</a>
 			</div>
 -->
 			<?php 
 		//}
 		//elseif($qwe_dir=='rtl')
 		//{ 
 			?>

 			<!--div class="galleryPreviewarrow">
 				<a class="previousslidearrow qwe-row-static-1" href="#" >&gt;</a>
 				<a href="#" class="nextslidearrow qwe-row-static-1">&lt;</a>
 			</div-->


 			<?php
 			// }
 			 ?>

 		</div>
 		<div class="gallerydescription">
 			<?php 

 			for ($count_qwe=1; $count_qwe <=3 ; $count_qwe++) { 
 			$text_description_link_id_qwe='text_description_link'.$count_qwe.'_qwe';
 			echo '<div class="description'.$count_qwe.'"><div class="desbg"><p><a href="';
 			echo get_theme_mod($text_description_link_id_qwe,'#');
 			echo '">';
 			$description_qwe='description'.$count_qwe.'_qwe';
 			echo get_theme_mod($description_qwe,'To Inspire Some You Must Inspire Your Self First');
 			echo '</p></a></div><p><a href="';
 			$button_description_link_id_qwe='button_description_link'.$count_qwe.'_qwe';
 			echo get_theme_mod($button_description_link_id_qwe,'#');
 			$button_description_id_qwe='button_description_id'.$count_qwe.'_qwe';
 			$button_description_qwe=array('SERVICES','CONTACT','JOBS');
 			echo '"><input type="submit" onClick="" name="button'.$count_qwe.'" value="';
 			echo get_theme_mod( $button_description_id_qwe,$button_description_qwe[$count_qwe-1] );
 			echo '"/></p></a></div>';

 			}
 			
 			?>

 		</div>	

 		<div class="galleryNavigationBullets">
 			<?php 
 			echo '<p>';	
 			//if ($qwe_dir=='ltr'){
 			$Total_count=3;//u can use total count for the avove for loops
			for ($b=1; $b <=$Total_count ; $b++) { 
				echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
 				}
 			//}elseif($qwe_dir=='rtl'){
 				//for ($b=8; $b >=1 ; $b--) { 
 				//	echo '<a href="javascript: changeimage('.$b.')" class="galleryBullets'.$b.'"><span>Bullet</span></a>';			 			
 				//}
 			//} 
 			echo '</p>';	
 			?>


 		</div>

 	</div>
 </section>