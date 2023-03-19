<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Certificates about Adobe CC Applications";
    //Check length of title for SEO (50-70 characters) - 60
    echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Certificates about Adobe CC Applications";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Web Designer with several years of experience in the web design industry using various Adobe Tools.";
    //Check length of description for SEO (140-180 characters) - 135
    echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web design, web designer, adobe creative cloud, adobe cc, photoshop, illustrator, lightroom, bridge, animate, dreamweaver";
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
	<h1>Adobe CC Certificates</h1>
	
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
				$Photoshop = new PhotoshopSlide();
				$Photoshop->renderSlider();
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
				$PhotoshopDesign = new PhotoshopDesignSlide();
				$PhotoshopDesign->renderSlider();
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