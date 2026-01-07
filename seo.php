<?php
    require_once 'core/init.php';
    $head = Head::get(9);
    $page_id=9;
    $page = Pages::get(9);
?>
<!DOCTYPE html>
<html itemscope lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php include_once './inc/header.php';?>

		<div class="wrapper">

			<?php echo $page->renderPage(); ?>
			
			<section class="slider-container" aria-label="LinkedIn SEO certificates">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
					    $slider = new Slider();
					    $slider->render('seo');
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->

		<?php include_once './inc/footer.php';//end #footer ?>

	</body>

</html>