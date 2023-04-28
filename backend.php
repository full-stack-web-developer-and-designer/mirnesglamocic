<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Back-end Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Backend Developer with several years of experience in the web development industry.";
	$og_url="https://mirnesglamocic.com/backendcertifikates.html";
	$og_image="https://mirnesglamocic.com/images/backend_og.jpg";
	$og_image_alt="Backend Certificates by Mirnes Glamočić";
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Back-end Developer with several years of experience in the web development industry. Also, he is experienced in fullstack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/backend_og.webp";
	$meta['keywords']="web development, web developer, back-end development, backend development, back-end developer, backend developer";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Back-end Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider">
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
		<ul class="content-slider">
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
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$PHPluralsight = new PHPluralsightSlide();
				$PHPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Python = new PythonSlide();
				$Python->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
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