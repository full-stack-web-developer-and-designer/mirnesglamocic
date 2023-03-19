<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Front-end Certificates";
    //Check length of title for SEO (50-70 characters) - 42
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Front-end Certificates";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Back-end Developer with several years of experience in the web development industry. Also, he is experienced in fullstack web development and design.";
    //Check length of description for SEO (140-180 characters) - 185
    echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, web developer, back-end development, backend development, back-end developer, backend developer, backend development";
	$og_image="./images/MirnesGlamocic.jpg";
	$image_alt="Mirnes Glamočić";
	include './inc/head.php';
?>
</head>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Back-end Certificates</h1>
	<section class="slider-container">
	<div class="slideControls">
            <a class="slidePrev arrow" href="#" aria-label="See the previous certificate">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow" href="#" aria-label="See the following certificate">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
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
	<div class="slideControls">
            <a class="slidePrev arrow" href="#" aria-label="See the previous certificate">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow" href="#" aria-label="See the following certificate">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$PHP = new PHPSlide();
				$PHP->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
	<div class="slideControls">
            <a class="slidePrev arrow" href="#" aria-label="See the previous certificate">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow" href="#" aria-label="See the following certificate">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$PHPluralsight = new PHPluralsightSlide();
				$PHPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
	<div class="slideControls">
            <a class="slidePrev arrow" href="#" aria-label="See the previous certificate">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow" href="#" aria-label="See the following certificate">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Python = new PythonSlide();
				$Python->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
	<div class="slideControls">
            <a class="slidePrev arrow" href="#" aria-label="See the previous certificate">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow" href="#" aria-label="See the following certificate">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
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