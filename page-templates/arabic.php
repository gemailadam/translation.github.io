<?php 
/*
 Template Name: arabic
*/
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <?php get_template_part('sub-pages/head_htmlarabic'); ?>
</head>
<body <?php body_class(); ?>>
<div class="qwe-container">
	<!-- container column width at all devices Start -->
	<div class="qwe-contain qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
		<header>
  			<?php get_template_part('sub-pages/headerarabic'); ?>
		</header>

		<div class="qwe-main">
			<div class="qwe-row">
				<div class="qwe-page">
					<!-- page column width Start -->
					<div class="qwe-col-xl-12 qwe-col-lg-12 qwe-col-md-12 qwe-col-sm-12">
  						<?php get_template_part('main-structure/main_page'); ?>
					</div>
					<!-- page column width END -->
				</div>
			</div>
		</div>
		<!-- sidebar Start -->
		<div class="qwe-float-sidebar">
				<?php get_sidebar(); ?>
		</div>
		<!-- sidebar END -->

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