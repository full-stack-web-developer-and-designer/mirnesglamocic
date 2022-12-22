<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | WordPress Certificates";
    //Check length of title for SEO (50-70 characters) - 42
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | WordPress Certificates";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Web Developer and Designer with several years of experience in the web development and design industry ";
    //Check length of description for SEO (140-180 characters) - 139
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, web developer, front-end development, frontend development, front-end developer, frontend developer, backend-development, backend development, back-end developer, backend developer, database development database developer, web design, web designer";
	$og_image="./images/MirnesGlamocic.jpg";
	$image_alt="Mirnes Glamočić";
	include './inc/head.php';
?>
</head>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>WordPress Certificates</h1>
	
	<section class="slider-container">
	<div class="slideControls">
            <a class="slidePrev arrow">
              <i class="fa fa-angle-left"></i>
             </a>
            <a class="slideNext arrow">
              <i class="fa fa-angle-right"></i>
            </a>
      </div><!--end .slideControls -->
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$WordPress = new WordPressSlide();
				$WordPress->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

</div><!--end .wrapper-->

<script src="lightbox2/src/js/lightbox.js"></script>
<script src='./JS/slider.js'></script>
<?php
	include_once './inc/footer.php';
	//end #footer
?>  
</body>
</html>