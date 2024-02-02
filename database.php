<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$fb_title="Database certificates of IT expert Mirnes Glamočić";
$meta['og_description']="See the Database certificates of professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
$title=$fb_title;
$meta['description']=$meta['og_description'] ." The best of the best!";
$og_url="http://mirnesglamocic.ba/databasecertificates.html";
$og_image="https://mirnesglamocic.com/images/database_og.jpg";
$og_image_alt=$fb_title;
$linkedin_title=$fb_title;
$twitter_image="https://mirnesglamocic.com/images/database_og.webp";
$canonical = "https://mirnesglamocic.com/databasecertificates.html";
include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<h1>Database Certificates</h1>

	<section class="slider-container" aria-label="SQL certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$Sql = new SqlSlide();
				$Sql->renderSlider();
				$Postgre = new PostgreSlide();
				$Postgre->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="MySQL certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$MySql = new MySqlSlide();
				$MySql->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->

	<section class="slider-container" aria-label="MongoDB certificates of professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
		<ul class="content-slider cs-hidden">
		<!-- slider box -->
			<?php
				$MongoDb = new MongoDbSlide();
				$MongoDb->renderSlider();
			?>
		</ul>
	</section><!--end .slider-container-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>