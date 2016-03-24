<?php 

function customize_register_qwe( $wp_customize ) {

// Header Title Modification -THEME-

    $wp_customize->add_panel( 'panel_qwe', array(
      'priority'       => 1,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => 'Theme Options',
      'description'    => '',
      // 'active_callback' => 'is_front_page',
    ) );


    $wp_customize->add_section('qwe_header_section',array(
        'title' =>'Header Titles' ,
        'description' => 'change and modify header title',
        'priority' => 1 ,
        'panel'=> 'panel_qwe',
        ));


        $wp_customize->add_setting('qwe-description1',array('default' => '-THEME-' ,'sanitize_callback'=>'esc_textarea'));
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
                'description' =>'add hyperlink',        
                'settings' => 'qwe-description1-link', 
                'type' => 'text',
                'label' => 'description 1 link refrance',
                'priority'=>2,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                // 'active_callback' => 'is_front_page',
                
            )
        );

//   logo

        $qwe_logo=get_template_directory_uri(). '/images/logo.png';
    

        $wp_customize->add_setting('logo_qwe',array('default' => $qwe_logo ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_qwe',array(
            'label' =>'Upload Logo Image',
            'description'=>'add logo image [ for best performance add png image type with transperent background]',
            'priority'=>1,
            'section' => 'slideshow' ,
            'settings' => 'logo_qwe' ,
            'active_callback' => 'is_front_page', )));




// title 




        $wp_customize->add_setting('qwe-description1',array('default' => '- THEME -' ,'sanitize_callback'=>'sanitize_text_field'));

        $wp_customize->add_control('qwe-description1',array(
                'description' =>'',        
                'settings' => 'qwe-description1', 
                'type' => 'text',
                'label' => 'middel title',
                'priority'=>3,
                'section' => 'qwe_header_section',
                'transport' => 'postMessage',
                'active_callback' => '',
                
            )
        );


// main_ndex.php Images Change

/*
$count_posts = wp_count_posts();

$published_posts_count = $count_posts->publish;

$draft_posts_count = $count_posts->draft;

$count_pages = wp_count_posts('page');

$image_indicator= array('indicator_image1_qwe','indicator_image2_qwe','indicator_image3_qwe' );

$image_indicator_description= array('indicator1_description_qwe','indicator2_description_qwe','indicator3_description_qwe' );	


$image_indicator_descrription_link= array('indicator1_description_link_qwe','indicator2_description_link_qwe','indicator3_description_link_qwe' );

$image_indicator_description_control= array('indicator1_description_control_qwe','indicator2_description_control_qwe','indicator3_description_control_qwe' );   
              
$image_button_caption_indicator= array('button_caption_indicator1_qwe','button_caption_indicator2_qwe','button_caption_indicator3_qwe' );

$image_button_caption_indicator_link= array('button_caption_indicator1_link_qwe','button_caption_indicator2_link_qwe','button_caption_indicator3_link_qwe' );

$image_button_caption_control= 
array('button_indicator_caption_1_control_qwe','button_indicator_caption_2_control_qwe',
    'button_indicator_caption_3_control_qwe' );	

    $wp_customize->add_section('Sticky_Indicators_qwe',array(
        'title' =>'Sticky Indicators' ,
        'description' => 'Change and Modify Sticky Indicators Images , Descriptions and Links',
        'priority' => 1 ,
        'panel'=> 'panel_qwe',
        ));

for ($count_qwe=1; $count_qwe <= 3 ; $count_qwe++) { 

	$qwe_post_image=get_template_directory_uri(). '/images/post'.$count_qwe.'.jpg';

    $wp_customize->add_setting($image_indicator[$count_qwe],array('default' => $qwe_post_image[$count_qwe],'sanitize_callback'=>'sanitize_text_field' ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,$image_indicator[$count_qwe],array(
        'label' =>'Upload Image 1 sticky',
        'priority'=>$count_qwe,
        'section' => 'Sticky_Indicators_qwe' ,
        'settings' => $image_indicator[$count_qwe] ,
        // 'active_callback' => 'is_front_page',
        )));


    $wp_customize->add_setting($image_indicator_description[$count_qwe],array('default' =>'write your indicator description','sanitize_callback'=>'esc_textarea' ));
    $wp_customize->add_control($image_indicator_description_control[$count_qwe],array(
            'description' =>'add your description for image 1',        
            'settings' => $image_indicator_description[$count_qwe], 
            'type' => 'textarea',
            'label' => 'Indicator image 1 Description',
            'priority'=>$count_qwe,
            'section' => 'Sticky_Indicators_qwe',
            'transport' => 'postMessage',
            //'active_callback' => 'is_front_page',
            
        )
    );

    $wp_customize->add_setting($image_indicator_descrription_link[$count_qwe],array('default' =>'#','sanitize_callback'=>'esc_url'  ));
    $wp_customize->add_control($image_indicator_description_control,array(
            'description' =>'add your description for image 1',        
            'settings' => $image_indicator_description_link[$count_qwe], 
            'type' => 'textarea',
            'label' => 'Indicator image 1 Description',
            'priority'=>$count_qwe,
            'section' => 'Sticky_Indicators_qwe',
            'transport' => 'postMessage',
            //'active_callback' => 'is_front_page',
            
                  
        )
    );

}

*/

// sticky image change //////////////////////////////////////////////////////////////////////////////////////////////
/*
$image_indicator= array('indicator_image1_qwe','indicator_image2_qwe','indicator_image3_qwe' );
$image_indicator_control= array('indicator_image1_control_qwe','indicator_image2_control_qwe','indicator_image3_control_qwe' );

$wp_customize->add_section('Sticky_Indicators_qwe',array(
    'title' =>'Sticky Indicators' ,
    'description' => 'Change and Modify Sticky Indicators Images , Descriptions and Links',
    'priority' => 1 ,
    'panel'=> 'panel_qwe',
));

$count_qwe=1; 
while ($count_qwe <=3) { 

$qwe_post_image=get_template_directory_uri() .'/images/post'.$count_qwe.'.jpg';

    $wp_customize->add_setting($image_indicator[$count_qwe],array('default' => $qwe_post_image, ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,$image_indicator[$count_qwe],array(
        'label' =>'Upload Image '.$count_qwe.' sticky',
        'priority'=>$count_qwe,
        'section' => 'Sticky_Indicators_qwe' ,
        'settings' => $image_indicator[$count_qwe] ,
        // 'active_callback' => 'is_front_page',
        )));
    
$count_qwe++;
}

*/

// POSTs Images /////////////////////////////////////////////////////////////////////////////////////////////////////


$count_posts = wp_count_posts();
$published_posts_count = $count_posts->publish;
$image_post= array('indicator_image1_qwe','indicator_image2_qwe','indicator_image3_qwe' );

$wp_customize->add_section('post_images_qwe',array(
    'title' =>'POSTs Images' ,
    'description' => 'Change and Modify POSTs Images , Descriptions and Links',
    'priority' => 1 ,
    'panel'=> 'panel_qwe',
));

$count_qwe=1; 
while ($count_qwe <= $published_posts_count) { 
$qwe_post_image=get_template_directory_uri() .'/images/post1.jpg';

$post_image='image_post_'.$count_qwe.'_qwe';

    $wp_customize->add_setting($post_image,array('default' => $qwe_post_image, ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,$post_image,array(
        'label' =>'Upload Post Image '.$count_qwe ,
        'priority'=>$count_qwe,
        'section' => 'post_images_qwe' ,
        'settings' => $post_image ,
        // 'active_callback' => 'is_front_page',
        )));
    
$count_qwe++;
}




/*

for ($count_qwe=1; $count_qwe <=3; $count_qwe++) { 

$qwe_post_image=get_template_directory_uri() .'/images/post'.$count_qwe.'.jpg';

    $wp_customize->add_setting($image_indicator[$count_qwe],array('default' => $qwe_post_image, ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,$image_indicator[$count_qwe],array(
        'label' =>'Upload Image '.$count_qwe.' sticky',
        'priority'=>$count_qwe,
        'section' => 'Sticky_Indicators_qwe' ,
        'settings' => $image_indicator[$count_qwe] ,
        // 'active_callback' => 'is_front_page',
        )));
    

}

*/

// 3 sticky Images & Description & buttons Changes 

}
add_action( 'customize_register', 'customize_register_qwe' );

?>