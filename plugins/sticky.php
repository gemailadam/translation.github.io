<section class="qwe-sticky">

			<div class="qwe-sticky-gallery-container">

				<?php 
				
				for ($num=1; $num <=3 ; $num++) { 
				
				$image_indicator= array('indicator_image1_qwe','indicator_image2_qwe','indicator_image3_qwe' );
				
				$image_indicator_description_link= array('indicator1_description_link_qwe','indicator2_description_link_qwe','indicator3_description_link_qwe' );
				
				$image_indicator_description= array('indicator1_description_qwe','indicator2_description_qwe','indicator3_description_qwe' );				
				
				$image_button_caption_indicator_link= array('button_caption_indicator1_link_qwe','button_caption_indicator2_link_qwe','button_caption_indicator3_link_qwe' );
				
				$image_button_caption_indicator= array('button_caption_indicator1_qwe','button_caption_indicator2_qwe','button_caption_indicator3_qwe' );
				
				$image=get_template_directory_uri() .'/images/sticky'.$num.'.jpg';
				
				?>
				<div class="qwe-sticky-wrapper">
					<!-- indicator 1 -->
					<div class="qwe-sticky-images">
						<?php echo '<img src="';echo get_theme_mod($image_indicator[$num],$image);echo '" alt=""/>';?>
					</div>

					<div class="qwe-sticky-description">
						
						<?php 
						$description_sticky_qwe = array('','You will find that we try to be the fastest' ,'Time Is Money So , We will save your time','Communication With our clients 24 7 365' );
						echo '<a href="';
						echo get_theme_mod($image_indicator_descrription_link[$num],'#');echo '"><p>';echo get_theme_mod($image_indicator_description[$num],$description_sticky_qwe[$num]);echo '</p></a>'; ?>

						<br/>
						
						<?php 
						$button_sticky_qwe=array('','SPEED','TIME','COMMUNICATION');
						echo '<a href="';
						echo get_theme_mod($image_button_caption_indicator_link[$num],'#');
						echo '"><input type="submit" name="btn_indicator1_qwe" value="';
						echo get_theme_mod( $image_button_caption_indicator[$num],$button_sticky_qwe[$num] );
						echo '"/></a>'; ?>

					</div>
				</div>
				<?php
				}
				?>
			
				

			</div>

		</section>
