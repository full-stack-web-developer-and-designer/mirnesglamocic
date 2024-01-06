<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="WordPress Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced WordPress Developer with several years of experience in the web development industry.";
	$og_url="https://mirnesglamocic.com/wordpresscertificates.html";
	$og_image="https://mirnesglamocic.com/images/wordpress_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/backend_og.webp";
	$og_image_alt="WordPress Certificates by Mirnes Glamočić";
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced WordPress Developer with several years of experience in the web development industry. Also, he is experienced in full-stack web development and design.";
	$meta['keywords']="web development, web developer, WordPress development, WordPress developer, web design, web designer";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>WordPress Certificates</h1>
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPress = new WordPressSlide();
				$WordPress->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPressPlugin = new WordPressPluginSlide();
				$WordPressPlugin->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPressTheme = new WordPressThemeSlide();
				$WordPressTheme->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPressEcommerce = new WordPressEcommerceSlide();
				$WordPressEcommerce->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>