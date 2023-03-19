<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Linux Certificates";
    //Check length of title for SEO (50-70 characters) - 38
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Linux Certificates";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Full-stack Web Developer amd Designer with several years of experience using various Linux operating systems.";
    //Check length of description for SEO (140-180 characters) - 145
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, operating Systems, Linux, Ubuntu, Debian, Centos, Fedora";
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
	<h1>Linux Certificates</h1>
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
				$LinuxEngineer = new LinuxEngineerSlide();
				$LinuxEngineer->renderSlider();
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
				$Linux = new LinuxSlide();
				$Linux->renderSlider();
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
				$LinuxDistro = new LinuxDistroSlide();
				$LinuxDistro->renderSlider();
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
				$CentOS = new CentOSSlide();
				$CentOS->renderSlider();
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
				$Bash = new BashSlide();
				$Bash->renderSlider();
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
				$Editors = new EditorsSlide();
				$Editors->renderSlider();
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
				$LinuxFoundation = new LinuxFoundationSlide();
				$LinuxFoundation->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>