<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="SEO Certificates by Mirnes Glamočić";
	$meta['og_description']="Mirnes Glamočić is an experienced Web Developer who specialize in optimizing search engine discovery and rankings.";
	$og_url="https://mirnesglamocic.com/seocertificates.html";
	$og_image="https://mirnesglamocic.com/images/seo_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="Mirnes Glamočić is an experienced Web Developer, UI/UX and Web Designer who specialize in optimizing search engine discovery and rankings. Also, he is experienced in full-stack web development and design.";
	$twitter_image="https://mirnesglamocic.com/images/seo_og.webp";
	$meta['keywords']="web development, Search Engine Optimization, SEO";	
	include './inc/head.php';
?>
<body class="development progress">
<?php
include 'inc/header.php';
?>
<div class="wrapper">
  <h1>SEO Certificates</h1>
	<section class="slider-container">
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