<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Back-end certificates of IT expert Mirnes Glamočić";
	$meta['og_description']="See the Back-end certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/backendcertifikates.html";
	$og_image="https://mirnesglamocic.com/images/backend_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/backend_og.webp";
	$canonical = "https://mirnesglamocic.com/backendcertifikates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Back-end Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$backendPHP = new BackendPHPSlide();
				$backendPHP->renderSlider();
				$backendPython = new BackendPythonSlide();
				$backendPython->renderSlider();
				$backendIntro = new BackendIntroSlide();
				$backendIntro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$PHP = new PHPSlide();
				$PHP->renderSlider();
				$PHPFrameworks = new PHPFrameworksSlide();
				$PHPFrameworks->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$PHPluralsight = new PHPluralsightSlide();
				$PHPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Python = new PythonSlide();
				$Python->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Node = new NodeSlide();
				$Node->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>