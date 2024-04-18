<?php
	require_once 'core/init.php';
	$head = Head::get(5);
    $page_id=5;
    $page = Pages::get(5);
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
			
			<section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WordPress = new WordPressSlide();
						$WordPress->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WordPressPlugin = new WordPressPluginSlide();
						$WordPressPlugin->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WordPressTheme = new WordPressThemeSlide();
						$WordPressTheme->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WordPressEcommerce = new WordPressEcommerceSlide();
						$WordPressEcommerce->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer?>
	</body>
</html>