<?php
	require_once 'core/init.php';
	$head = Head::get(6);
    $page_id=6;
    $page = Pages::get(6);
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
			
			<section class="slider-container" aria-label="Web service certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$WebServices = new WebServicesSlide();
						$WebServices->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="JSON certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Json = new JsonSlide();
						$Json->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php'; ?>
	</body>
</html>