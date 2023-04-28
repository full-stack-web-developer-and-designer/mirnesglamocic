<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$fb_title="Adobe CC Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Web Designer with several years of experience in the web design industry using various Adobe Tools.";
	$og_url="https://mirnesglamocic.com/adobecertificates.html";
	$og_image="https://mirnesglamocic.com/images/adobe_og.jpg";
	$og_image_alt="Adobe CC Certificates by Mirnes Glamočić";
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Web Designer with several years of experience in the web design industry using various Adobe Tools. Also, he is experienced in full-stack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/adobe_og.webp";
	$meta['keywords']="web design, web designer, adobe creative cloud, adobe cc, photoshop, illustrator, lightroom, bridge, animate, dreamweaver";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Adobe CC Certificates</h1>
	
	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Photoshop = new PhotoshopSlide();
				$Photoshop->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$PhotoshopDesign = new PhotoshopDesignSlide();
				$PhotoshopDesign->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Lightroom = new LightroomSlide();
				$Lightroom->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>