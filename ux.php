<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$title="UI/UX certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url="https://mirnesglamocic.com/uxcertificates.html";
	$og_image="https://mirnesglamocic.com/images/ux_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/ux_og.webp";
	$css="certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php'; ?>
		<div class="wrapper">
			<h1>UI/UX Design Certificates</h1>

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxPath = new UxPathSlide();
						$UxPath->renderSlider();
						$UxIntro = new UxIntroSlide();
						$UxIntro->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Interaction Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$InteractionDesign = new InteractionDesignSlide();
						$InteractionDesign->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Ux = new UxSlide();
						$Ux->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxParts = new UxPartsSlide();
						$UxParts->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxFoundation = new UxFoundationSlide();
						$UxFoundation->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer ?>
</body>
</html>