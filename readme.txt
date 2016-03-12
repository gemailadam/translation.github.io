
Inspiration Inspection Web Development

Insperation Is Every Where Just Learn Every Day a New Things and You Will See What You Can't Imagine

<?php

 function register_my_menus() {
  register_nav_menu('header-menu' , 'Header Menu' );
}
add_action( 'init', 'register_my_menus' ); 

?>

<div class="qwe-nav">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>

<?php

function register_my_menu() {
  register_nav_menu('header-menu1',__( 'Header Menu 2' ));
}
add_action( 'init', 'register_my_menu' );


 function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu2' => __( 'Header Menu 2' ),
      'extra-menu2' => __( 'Extra Menu 2' )
    )
  );
}
add_action( 'init', 'register_my_menus' ); 

?>



<div class="qwe-nav">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'extra-menu2', 'container_class' => 'my_extra_menu_class' ) ); ?>
</div>

<style>

/*nvigation menu*/
.qwe-nav {background: #000;width: 100%;float: left;}/* or display:block with float:left*/

.qwe-nav div > ul > li {display:inline-block;float: left;position: relative;background: #555;}
.qwe-nav div > ul > li li {position: relative;display:inline-block;float: none;}
.qwe-nav li a {display: inline-block;float: left;white-space:nowrap;background: #999;}

.qwe-nav div > ul > li ul {display:none;position: absolute;z-index: 1;}
.qwe-nav div > ul > li:hover > ul {display:inline-block;bottom:auto;background-color: red;left: 0;}
.qwe-nav div > ul > li li:hover > ul {display:inline-block;bottom:auto;background-color: green;right: auto;}

</style>
<?php 
	echo '<div class="description1"><a href="';echo get_theme_mod('text_description_link1_qwe','');echo '">';echo get_theme_mod('description1_qwe','write your description , please make it just one line');
	echo '</a></div><a href="';echo get_theme_mod('button_description_link1_qwe','');echo '"><input type="submit" onClick="" name="button1" value="';echo get_theme_mod( 'button1_qwe','button 1' );echo '"/></a></div>';

?>

<?php 
function qwe_slideshow(){
// slide 1

        $wp_customize->add_setting('image1_qwe',array('default' => $qwe_image . '/images/image1.jpg','sanitize_callback'=>'sanitize_text_field' ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image1_qwe',array(
            'label' =>'Upload Image 1',
            'priority'=>1,
            'section' => 'slideshow' ,
            'settings' => 'image1_qwe' ,
            'active_callback' => 'is_front_page',)));

        $wp_customize->add_setting('description1_qwe',array('default' => 'write your description' ,'sanitize_callback'=>'esc_textarea'));
        $wp_customize->add_control('desc1_qwe',array(
                'description' =>'add one line description to your image',        
                'settings' => 'description1_qwe', 
                'type' => 'textarea',
                'label' => 'Description 1',
                'priority'=>2,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                'active_callback' => 'is_front_page',   
                
            )
        );


        $wp_customize->add_setting('text_description_link1_qwe',array('default' => '#','sanitize_callback'=>'esc_url' ));

        $wp_customize->add_control('txt_description_link1_qwe',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'text_description_link1_qwe', 
                'type' => 'text',
                'label' => 'Slideshow image Text link refrance',
                'priority'=>3,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                'active_callback' => 'is_front_page',
                
            )
        );


        $wp_customize->add_setting('button1_qwe',array('default' => 'link 1','sanitize_callback'=>'sanitize_text_field' ));
        $wp_customize->add_control('btn1_qwe',array(
                'description' =>'add link text to your button',        
                'settings' => 'button1_qwe', 
                'type' => 'text',
                'label' => 'Button link text 1',
                'priority'=>4,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                'active_callback' => 'is_front_page',
                
            )
        );
                

        $wp_customize->add_setting('button_description_link1_qwe',array('default' => '#' ,'sanitize_callback'=>'esc_url'));

        $wp_customize->add_control('btn_description_link1_qwe',array(
                'description' =>'add hyperlink to your button',        
                'settings' => 'button_description_link1_qwe', 
                'type' => 'text',
                'label' => 'Button link refrance',
                'priority'=>5,
                'section' => 'slideshow',
                'transport' => 'postMessage',
                'active_callback' => 'is_front_page',
                
            )
        );


}
add_action('customize_register','qwe_slideshow' );
   
?>


							if(have_posts()) : 
								while ( have_posts() ) : the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-adam' ); ?>>
<?php							
							echo '<div class="rect">';
							echo '<h1><a>';
							the_title();
							echo '</a></h1>';
							echo '<br/>';
							echo '<br/>';
							the_content('<br/>Read more >>');
							echo "</div>";
							echo '<div class="postedby">';
							echo '<a href="';
							the_author_link();
							echo '">  ';
							the_author();
							echo '</a>';
							echo '<a href="';
							the_permalink();	
							echo '">  ';
							the_date('F Y');
							echo '</a>';

							the_category();
							echo '<br/>';

							echo '</div>';
							
							echo '</div>';//post-id and post-class


							endwhile;
							else :
								echo "No Content Found , or there is nothing Page By you yet";
							endif;

							?>	

							<span class="">
								<?php previous_post_link(); ?>
							</span>

							<span class="fl-ri">
								
								<?php next_post_link(); ?>
							</span>  

//////////////////////////////////////////////////////////////////////////////////////////////////////
			    //total number of images you will add to slideshow
				$imageTotal=8;
				$description[1]='First article about 3DaVinci Portfolio theme designed for WordPress , its compleatly free with GPL v2 licences for more information click the button';
				$description[2]='some description text 2 ';
			 <div class="gallerycontainer">
			 
			 	<!--h1>Gallery Title</h1-->
			 
			 	<!--div class="galleryThumbnilContainer">
			 		<div class="galleryThumbnil">
			 			<?php 
			 				for ($t=1; $t<=$imageTotal; $t++) { 
			 					echo '<a href="javascript: changeimage('.$t.')" class="thumbnilsimage'.$t.'"><img src="';
			 					?><?php
			 					bloginfo('template_directory');?><?php echo "/images/thumb/image";echo "$t.jpg";echo " width='auto' height='100' alt=''/></a>";
			 				}
			 			 ?>
			 		</div>
			 	</div-->

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_sections_controls_settings ($wp_customize){

// Header Title

    $wp_customize->add_panel( 'panel_qwe', array(
      'priority'       => 1,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => 'Theme Options',
      'description'    => '',
      'active_callback' => 'is_page',
    ) );


    $wp_customize->add_section('qwe_header_section',array(
        'title' =>'Header Titles' ,
        'description' => 'change and modify header title',
        'priority' => 1 ,
        'panel'=> 'panel_qwe',
        ));


        $wp_customize->add_setting('qwe-description1',array('default' => 'write your description' ,'sanitize_callback'=>'esc_textarea'));
        $wp_customize->add_control('qwe-description1-control',array(
                'description' =>'modify description to your header title',        
                'settings' => 'qwe-description1', 
                'type' => 'textarea',
                'label' => 'Description 1',
                'priority'=>1,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                // 'active_callback' => 'is_front_page',   
                
            )
        );


        $wp_customize->add_setting('qwe-description1-link',array('default' => '#','sanitize_callback'=>'esc_url' ));

        $wp_customize->add_control('qwe-description1-link-control',array(
                'description' =>'add hyperlink to your slideshow gray text area',        
                'settings' => 'qwe-description1-link', 
                'type' => 'text',
                'label' => 'description 1 link refrance',
                'priority'=>2,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                // 'active_callback' => 'is_front_page',
                
            )
        );


}

// add_action('customize_register','customize_register_qwe' );
add_action('customize_register','add_sections_controls_settings' );




                
			 