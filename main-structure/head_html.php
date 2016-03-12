
<meta name="viewport" content="width=device-width,initial-scall=1">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >

<!--[if (gte IE 6) & (lte IE 8)]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script> 
<![endif]-->													


<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-col.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/skeleton-row-prcentage.css">

<?php wp_head(); ?>