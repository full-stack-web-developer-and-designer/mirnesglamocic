<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$fb_title="Database Certificates by Mirnes Glamočić";
$meta['og_description']="Mirnes Glamočić is an experienced Database Developer with several years of experience in the database development using relational and NoSQL databases.";
$og_url="http://mirnesglamocic.ba/databasecertificates.html";
$og_image="https://mirnesglamocic.com/images/database_og.jpg";
$twitter_image="https://mirnesglamocic.com/images/database_og.webp";
$og_image_alt=$fb_title;
$linkedin_title=$fb_title;
$title=$fb_title;
$meta['description']="Mirnes Glamočić is an experienced Database Developer with several years of experience in the database development. Also, he is experienced in full-stack web development and design.";
$meta['keywords']="web development, web developer, WordPress development, WordPress developer, web design, web designer";
include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Database Certificates</h1>

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$SQL = new SQLSlide();
				$SQL->renderSlider();
				$Postgre = new PostgreSlide();
				$Postgre->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$MySQL = new MySQLSlide();
				$MySQL->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container">
		<ul class="content-slider">
		<!-- slider box -->
			<?php
				$MongoDB = new MongoDBSlide();
				$MongoDB->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>