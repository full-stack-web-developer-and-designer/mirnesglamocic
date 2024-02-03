<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Web Services certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Web Services certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$title=$fb_title;
	$og_url="https://mirnesglamocic.com/webservicescertificates.html";
	$og_image="https://mirnesglamocic.com/images/webservices_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/webservices_og.webp";
	$canonical = "https://mirnesglamocic.com/webservicescertificates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Web Services Certificates</h1>
	
	<section class="slider-container" aria-label="Web Services certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$WebServices = new WebServicesSlide();
				$WebServices->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="JSON certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
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