<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
	$title="SEO certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the SEO certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url="https://mirnesglamocic.com/seocertificates.html";
	$og_image="https://mirnesglamocic.com/images/seo_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/seo_og.webp";
	$css="certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php'; ?>
		<div class="wrapper">
			<h1>SEO Certificates</h1>
			
			<section class="slider-container" aria-label="SEO certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Seo = new SeoSlide();
						$Seo->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer ?>
</body>
</html>