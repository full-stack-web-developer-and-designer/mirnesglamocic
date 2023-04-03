<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$fb_title="Docker Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced web developer with extensive experience to build new applications using Docker.";
	$og_url="https://mirnesglamocic.com/dockercertificates.html";
	$og_image="https://mirnesglamocic.com/images/docker_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/docker_og.webp";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced web developer with extensive experience to build new applications using Docker. Also, he is experienced in full-stack web development and design.";
	$meta['keywords']="web development, web developer, docker development, docker, container platforms";
	include './inc/head.php';
?>
</head>
<body class="development progress">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Docker Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider">
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