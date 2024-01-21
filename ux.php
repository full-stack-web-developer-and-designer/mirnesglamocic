<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$fb_title="UI/UX Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced UX/UI Designer with several years of experience in UX/UI Design.";
	$og_url="https://mirnesglamocic.com/uxcertificates.html";
	$og_image="https://mirnesglamocic.com/images/ux_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced UX/UI Designer with several years of experience in UX/UI Design. Also, he is highly skilled in full-stack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/ux_og.webp";
	$meta['keywords']="web design, web designer, UX design, UX designer, UI Design, UI Designer, Interaction Design, Interaction Designer";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>UI/UX Design Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$UxPath = new UxPathSlide();
				$UxPath->renderSlider();
				$UxIntro = new UxIntroSlide();
				$UxIntro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$InteractionDesign = new InteractionDesignSlide();
				$InteractionDesign->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Ux = new UxSlide();
				$Ux->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$UxParts = new UxPartsSlide();
				$UxParts->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$UxFoundation = new UxFoundationSlide();
				$UxFoundation->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>