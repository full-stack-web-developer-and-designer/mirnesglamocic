<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$title = "Frontend Certificates of IT expert Mirnes Glamočić";
	$meta['description'] = "See the Frontend certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url = "https://mirnesglamocic.com/frontendcertifikates.html";
	$og_image = "https://mirnesglamocic.com/images/frontend_og.jpg";
	$twitter_image = "https://mirnesglamocic.com/images/frontend_og.webp";
	$css = "certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php'; ?>
		<div class="wrapper">
			<h1>Front-end Certificates</h1>

			<section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$FrontendSoloLearn = new FrontendSoloLearnSlide();
						$FrontendSoloLearn->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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

			<section class="slider-container" aria-label="HTML certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Html = new HtmlSlide();
						$Html->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="HTML and CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$HtmlCss = new HtmlCssSlide();
						$HtmlCss->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$CssNew = new CssNewSlide();
						$CssNew->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			<section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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

			<section class="slider-container" aria-label="Bootstrap certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Bootstrap = new BootstrapSlide();
						$Bootstrap->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Web Development certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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

			<section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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

			<section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$JavaScriptPluralsight = new JavaScriptPluralsightSlide();
						$JavaScriptPluralsight->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Jquery = new JquerySlide();
						$Jquery->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$JqueryPluralsight = new JqueryPluralsightSlide();
						$JqueryPluralsight->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Angular certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Angular = new AngularSlide();
						$Angular->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="React certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$React = new ReactSlide();
						$React->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer?>
</body>
</html>