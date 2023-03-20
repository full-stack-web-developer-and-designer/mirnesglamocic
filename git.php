<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Version Control Certificates";
    //Check length of title for SEO (50-70 characters) - 48
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Git Certificates";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Full-stack Web Developer with several years of experience in the complete process of web development and design.";
    //Check length of description for SEO (140-180 characters) - 148
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, web design, version control, git, github";
	$og_image="./images/MirnesGlamocic.jpg";
	$image_alt="Mirnes Glamočić";
	include './inc/head.php';
?>
</head>
<body class="development seo">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Version Control Certificates</h1>
	
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
				$Git = new GitSlide();
				$Git->renderSlider();
				$Vcs = new VcsSlide();
				$Vcs->renderSlider();
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
				$GitHub = new GitHubSlide();
				$GitHub->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>