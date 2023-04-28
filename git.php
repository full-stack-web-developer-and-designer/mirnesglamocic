<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Version Control Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Full-stack Web Developer with with extensive experience using GIT.";
	$og_url="https://mirnesglamocic.com/gitcertificates.html";
	$og_image="https://mirnesglamocic.com/images/git_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Full-stack Web Developer with with extensive experience using GIT. Also, he is experienced in web design and various operating systems.";
	$twitter_image="https://mirnesglamocic.com/images/git_og.webp";
	$meta['keywords']="web development, web developer, version control, version control system, git, github, bitbucket";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Version Control Certificates</h1>
	
	<section class="slider-container">
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