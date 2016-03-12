<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
		<?php get_template_part('page-templates/head_html'); ?>
</head>
<body <?php body_class( ); ?> >
<div class="qwe-container">
<div class="qwe-contain qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12 qwe-col-xs-12 qwe-col-vs-12">
			<!-- 1) header-->
			<header>
					<?php get_header(); ?>
			</header>
			<!-- 2 ) main -->
			<div class="qwe-main">
				<div class="qwe-row">
				<div class=" qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">

					<!-- 2-1 ) page part -->
					<div class="qwe-page">
						<div class="qwe-col-xs-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
						<?php woocommerce_content(); ?>
						</div>
					</div>
					<!-- 2-2 ) sidebar part if you want -->
				</div>
				<!-- end columns -->
				</div>
				<!--End Row -->
			</div>
			<!--End main -->
		<div class="qwe-float-sidebar">
			<!-- sidebar Start -->
				<?php get_sidebar(); ?>
			<!-- sidebar END -->
		</div>
		<!-- newsletter or gift start-->
		<!-- sidebar Start -->
		<div class="qwe-float-newsletter-or-gift">
				<?php dynamic_sidebar( 'newsletter' ); ?>
		</div>
		<!-- sidebar END -->
		<!-- newsletter or gift end-->
		
			<!-- 3 ) footer-->
			<footer>
						<?php get_footer(); ?>
			</footer>
			<!-- End footer-->
</div>			
</div>
<!-- End Container-->
<?php get_template_part('page-templates/script'); ?>
</body>
</html>