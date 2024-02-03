<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">
<?php 
	$title="Adobe CC certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Adobe CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina.";
	$og_url="https://mirnesglamocic.com/adobecertificates.html";
	$og_image="https://mirnesglamocic.com/images/adobe_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/adobe_og.webp";
	$css="certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php';?>
		<div class="wrapper">
			<h1>Adobe CC Certificates</h1>
			
			<section class="slider-container">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Photoshop = new PhotoshopSlide();
						$Photoshop->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Photoshop CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$PhotoshopDesign = new PhotoshopDesignSlide();
						$PhotoshopDesign->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Lightroom CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Lightroom = new LightroomSlide();
						$Lightroom->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php'; //end #footer ?>
</body>
</html>