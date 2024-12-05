<?php
    require_once 'core/init.php';
    $head = Head::get(9);
    $page_id=9;
    $page = Pages::get(9);
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php echo $head->render(); ?>
	<body>
		<?php include 'inc/header.php';?>
		<div class="wrapper">

			<?php echo $page->render(); ?>
			
			<section class="slider-container" aria-label="SEO certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
					    $seo = new SeoSlide();
					    $seo->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer ?>
	</body>
</html>
