<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Docker certificates of IT expert Mirnes Glamočić";
	$meta['og_description']="See the Docker certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/dockercertificates.html";
	$og_image="https://mirnesglamocic.com/images/docker-og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/docker-og.webp";
	$canonical = "https://mirnesglamocic.com/dockercertificates.html";
	include './inc/head.php';
?>
<body class="development progress">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Docker Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$docker = new DockerSlide();
				$docker->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>