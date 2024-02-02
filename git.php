<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Version Control certificates of IT expert Mirnes Glamočić";
	$meta['og_description']="See the GIT certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/gitcertificates.html";
	$og_image="https://mirnesglamocic.com/images/git_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/git_og.webp";
	$canonical = "https://mirnesglamocic.com/gitcertificates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Version Control Certificates</h1>
	
	<section class="slider-container" aria-label="GIT certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Git = new GitSlide();
				$Git->renderSlider();
				$Vcs = new VcsSlide();
				$Vcs->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="GitHub certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
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