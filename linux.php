<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$fb_title="Linux Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Linux Developer with many years of experience in various operating systems.";
	$og_url="https://mirnesglamocic.ba/linuxcertificates.html";
	$og_image="https://mirnesglamocic.com/images/linux_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/linux_og.webp";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Linux Developer with many years of experience in various operating systems. He also has experience in full-stack web development and design.";
	$meta['keywords']="linux, ubuntu, debian, centos, fedora, windows, web development, software development, operating systems";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Linux Certificates</h1>
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$LinuxEngineer = new LinuxEngineerSlide();
				$LinuxEngineer->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Linux = new LinuxSlide();
				$Linux->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$LinuxDistro = new LinuxDistroSlide();
				$LinuxDistro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$CentOS = new CentOSSlide();
				$CentOS->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Bash = new BashSlide();
				$Bash->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Editors = new EditorsSlide();
				$Editors->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

		<section class="slider-container">
		<ul class="content-slider cs-hidden">
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