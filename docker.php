<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Database Certificates";
    //Check length of title for SEO (50-70 characters) - 42
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Database Certificates";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Database Developer with several years of experience in the database development using relational databases and MongoDB.";
    //Check length of description for SEO (140-180 characters) - 155
    echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, database development, database developer, SQL Developer, SQL Development, MySQL Development, MySQL Developer, MongoDB Developer, MongoDB Development";
	$og_image="./images/MirnesGlamocic.jpg";
	$image_alt="Mirnes Glamočić";
	include './inc/head.php';
?>
</head>
<body class="development seo">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Docker Certificates</h1>
	<section class="slider-container">
        <div id="progress" style="text-align:center">
	        In progress...
        </div>
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