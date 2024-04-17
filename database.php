<?php
	require_once 'core/init.php';
	$head = Head::get(4);
    $page_id=4;
    $page = Pages::get(4);
    
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php
		echo $head->render();
	?>
	<body>
		<?php include 'inc/header.php';?>
		<div class="wrapper">
			
			<?php echo $page->render(); ?>

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