<?php 
/*
Template Name: forums
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_template_part('main-structure/head_html'); ?>
</head>
<body <?php body_class(); ?>>
<div class="qwe-container">
	<!-- container column width at all devices Start -->
	<div class="qwe-contain qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
		<header>
			<?php get_template_part('sub-pages/headerless'); ?>
		</header>

		<div class="qwe-main">
			<div class="qwe-row">
				<!-- page column width Start -->
				<div class="qwe-page qwe-col-xl-9 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
  						<?php get_template_part('main-structure/main_page'); ?>
				</div>
				<!-- page column width END -->
				<!-- sidebar column width Start -->
				<div class="qwe-sidebar qwe-col-xl-3 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
						<?php get_sidebar(); ?>
				</div>
				<!-- sidebar column width END -->
			</div>
		</div>
		<!-- newsletter or gift start-->
		<div class="qwe-newsletter qwe-float-newsletter-or-gift">
				<?php dynamic_sidebar( 'newsletter' ); ?>
		</div>
		<!-- newsletter or gift end-->
		<footer>
				<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
					<?php get_footer(); ?>
				</div>
		</footer>

	</div>
	<!-- container column width at all devices END -->

</div>

  <?php get_template_part('main-structure/script'); ?>

</body>
</html>