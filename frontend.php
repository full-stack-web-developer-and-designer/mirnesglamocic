<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$fb_title="Frontend Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Frontend Developer with several years of experience in the web development industry.";
	$og_url="https://mirnesglamocic.com/frontendcertifikates.html";
	$og_image="https://mirnesglamocic.com/images/frontend_og.jpg";
	$og_image_alt="Frontend Certificates by Mirnes Glamočić";
	$linkedin_title="Front-end, UI/UX and Web Design Certificates by Mirnes Glamočić";
	$title=$linkedin_title;
	$meta['description']="Mirnes Glamočić is an experienced Frontend Developer with several years of experience in the web development industry. Also, he is experienced in full-stack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/frontend_og.webp";
	$meta['keywords']="web development, web developer, front-end development, frontend development, front-end developer, frontend developer, web design, web designer";
	include './inc/head.php';
?>
</head>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Front-end Certificates</h1>

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$frontendSoloLearn = new FrontendSoloLearnSlide();
				$frontendSoloLearn->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$frontend = new FrontendSlide();
				$frontend->renderSlider();
				$frontendIntro = new FrontendIntroSlide();
				$frontendIntro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$html = new HTMLSlide();
				$html->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$css = new CSSSlide();
				$css->renderSlider();
				$sass = new SassSlide();
				$sass->renderSlider();
				$tailwind = new TailwindSlide();
				$tailwind->renderSlider();

			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$HtmlCss = new HTMLCSSSlide();
				$HtmlCss->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Bootstrap = new BootstrapSlide();
				$Bootstrap->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$WebDevelopment = new WebDevelopmentSlide();
				$WebDevelopment->renderSlider();
				$ViewSource = new ViewSourceSlide();
				$ViewSource->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$JavaScript = new JavaScriptSlide();
				$JavaScript->renderSlider();
				$JavaScript->renderSlider();
				$TypeScript = new TypeScriptSlide();
				$TypeScript->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$JavaScriptPluralsight = new JavaScriptPluralsightSlide();
				$JavaScriptPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$jQuery = new jQuerySlide();
				$jQuery->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$jQueryPluralsight = new jQueryPluralsightSlide();
				$jQueryPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$Angular = new AngularSlide();
				$Angular->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$React = new ReactSlide();
				$React->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>