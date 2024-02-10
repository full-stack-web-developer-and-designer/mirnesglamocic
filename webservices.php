<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html itemscope lang="en">
<?php
	$title="Web Services certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Web Services certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url="https://mirnesglamocic.com/webservicescertificates.html";
	$og_image="https://mirnesglamocic.com/images/webservices_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/webservices_og.webp";
	$css = "certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php'; ?>
		<div class="wrapper">
			<h1>Web Services Certificates</h1>
			
			<section class="slider-container" aria-label="Web service certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WebServices = new WebServicesSlide();
						$WebServices->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="JSON certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Json = new JsonSlide();
						$Json->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php'; ?>
</body>
</html>