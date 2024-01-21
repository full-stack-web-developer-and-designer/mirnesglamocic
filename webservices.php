<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Web Services Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić has experience in various web services for Web and Rich Internet Applications.";
	$og_url="https://mirnesglamocic.com/webservicescertificates.html";
	$og_image="https://mirnesglamocic.com/images/webservices_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/webservices_og.webp";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić has experience in various web services for Web and Rich Internet Applications. He also has experience in full-stack web development and design.";
	$meta['keywords']="linux, ubuntu, debian, centos, fedora, windows, web development, software development, operating systems";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Web Services Certificates</h1>
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WebServices = new WebServicesSlide();
				$WebServices->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Json = new JsonSlide();
				$Json->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>