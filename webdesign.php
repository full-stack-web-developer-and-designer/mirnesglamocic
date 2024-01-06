<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Web Design Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Web Designer with several years of experience in the web development and design industry.";
	$og_url="https://mirnesglamocic.com/webdesigncertificates.html";
	$og_image="https://mirnesglamocic.com/images/webdesign_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Frontend Developer with several years of experience in the web development industry. Also, he is experienced in full-stack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/webdesign_og.webp";
	$meta['keywords']="web development, web developer, front-end development, frontend development, front-end developer, frontend developer, web design, web designer, ui design, ux design, ui/ux design";
	include './inc/head.php';
?>
<body class="development design">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Web Design Certificates</h1>
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WebDesignPath = new WebDesignPathSlide();
				$WebDesignPath->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WebDesigners = new WebDesignersSlide();
				$WebDesigners->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WebDesign = new WebDesignSlide();
				$WebDesign->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>