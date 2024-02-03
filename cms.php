<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="WordPress certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the WordPress certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$og_url="https://mirnesglamocic.com/wordpresscertificates.html";
	$og_image="https://mirnesglamocic.com/images/wordpress_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/backend_og.webp";
	$canonical = "https://mirnesglamocic.com/wordpresscertificates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>WordPress Certificates</h1>
	
	<section class="slider-container" aria-label="WordPress certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPress = new WordPressSlide();
				$WordPress->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="WordPress certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPressPlugin = new WordPressPluginSlide();
				$WordPressPlugin->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="WordPress certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WordPressTheme = new WordPressThemeSlide();
				$WordPressTheme->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="WordPress certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
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