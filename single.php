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
			<?php get_header(); ?>
		</header>

		<div class="qwe-main">
			<div class="qwe-row">
				<div class="qwe-page">
					<!-- page column width Start -->
					<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
  						<?php get_template_part('main-structure/main_single'); ?>
					</div>
					<!-- page column width END -->
				</div>

			</div>
		</div>
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