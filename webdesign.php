<?php
	require_once 'core/init.php';
	$head = Head::get(7);
    $page_id=7;
    $page = Pages::get(7);
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
			
			<section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WebDesignPath = new WebDesignPathSlide();
						$WebDesignPath->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WebDesigners = new WebDesignersSlide();
						$WebDesigners->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WebDesign = new WebDesignSlide();
						$WebDesign->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Svg = new SvgSlide();
						$Svg->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer ?>
</body>
</html>