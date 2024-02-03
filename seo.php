<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="SEO certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the SEO certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$title = $fb_title;
	$og_url="https://mirnesglamocic.com/seocertificates.html";
	$og_image="https://mirnesglamocic.com/images/seo_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/seo_og.webp";
	$canonical = "https://mirnesglamocic.com/seocertificates.html";	
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
<div class="wrapper">
  <h1>SEO Certificates</h1>
	<section class="slider-container" aria-label="SEO certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Seo = new SeoSlide();
				$Seo->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>