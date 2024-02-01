<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Web Design Certificates of IT expert Mirnes Glamočić";
	$meta['og_description']="See the Web Design certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/webdesigncertificates.html";
	$og_image="https://mirnesglamocic.com/images/webdesign_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/webdesign_og.webp";
	$canonical = "https://mirnesglamocic.com/webdesigncertificates.html";
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

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Svg = new SvgSlide();
				$Svg->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>