<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">
<?php 
$title="Database certificates of IT expert Mirnes Glamočić";
$meta['description']="See the Database certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina.";
$og_url="http://mirnesglamocic.ba/databasecertificates.html";
$og_image="https://mirnesglamocic.com/images/database_og.jpg";
$twitter_image="https://mirnesglamocic.com/images/database_og.webp";
$css = "certificates.min.css";
include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php';?>
		<div class="wrapper">
			<h1>Database Certificates</h1>

			<section class="slider-container" aria-label="SQL certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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

			<section class="slider-container" aria-label="MySQL certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$MySql = new MySqlSlide();
						$MySql->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="MongoDB certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$MongoDb = new MongoDbSlide();
						$MongoDb->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer?>
</body>
</html>