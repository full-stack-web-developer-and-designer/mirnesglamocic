<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$fb_title="Linux certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Linux certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$title=$fb_title;
	$og_url="https://mirnesglamocic.ba/linuxcertificates.html";
	$og_image="https://mirnesglamocic.com/images/linux_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/linux_og.webp";
	$canonical = "https://mirnesglamocic.com/webdesigncertificates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Linux Certificates</h1>
	<section class="slider-container" aria-label="Linux certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$LinuxEngineer = new LinuxEngineerSlide();
				$LinuxEngineer->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="Linux certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Linux = new LinuxSlide();
				$Linux->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container" aria-label="Linux certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$LinuxDistro = new LinuxDistroSlide();
				$LinuxDistro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="CentOS certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$CentOS = new CentOSSlide();
				$CentOS->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="Bash certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Bash = new BashSlide();
				$Bash->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container" aria-label="Linux certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Editors = new EditorsSlide();
				$Editors->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

		<section class="slider-container" aria-label="Linux certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
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