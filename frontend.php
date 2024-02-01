<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$fb_title="Frontend Certificates of IT expert Mirnes Glamočić";
	$meta['og_description']="See the Frontend certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/frontendcertifikates.html";
	$og_image="https://mirnesglamocic.com/images/frontend_og.jpg";
	$og_image_alt="Frontend Certificates by Mirnes Glamočić";
	$linkedin_title=$title;
	$twitter_image="https://mirnesglamocic.com/images/frontend_og.webp";
	$canonical = "https://mirnesglamocic.com/frontendcertifikates.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Front-end Certificates</h1>

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$FrontendSoloLearn = new FrontendSoloLearnSlide();
				$FrontendSoloLearn->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Frontend = new FrontendSlide();
				$Frontend->renderSlider();
				$FrontendIntro = new FrontendIntroSlide();
				$FrontendIntro->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Html = new HtmlSlide();
				$Html->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$HtmlCss = new HtmlCssSlide();
				$HtmlCss->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$CssNew = new CssNewSlide();
				$CssNew->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Css = new CssSlide();
				$Css->renderSlider();
				$Sass = new SassSlide();
				$Sass->renderSlider();
				$Tailwind = new TailwindSlide();
				$Tailwind->renderSlider();

			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Bootstrap = new BootstrapSlide();
				$Bootstrap->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
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
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$JavaScript = new JavaScriptSlide();
				$JavaScript->renderSlider();
				$TypeScript = new TypeScriptSlide();
				$TypeScript->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$JavaScriptPluralsight = new JavaScriptPluralsightSlide();
				$JavaScriptPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
	
	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Jquery = new JquerySlide();
				$Jquery->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$JqueryPluralsight = new JqueryPluralsightSlide();
				$JqueryPluralsight->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Angular = new AngularSlide();
				$Angular->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider cs-hidden">
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