<?php
    require_once 'core/init.php';
    $head = Head::get(8);
    $page_id=8;
    $page = Pages::get(8);
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php echo $head->renderHead(); ?>
	<body>
		<?php include 'inc/header.php';?>
		<div class="wrapper">

			<?php echo $page->renderPage(); ?>
			
			<?php $slider = new Slider(); ?>

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$slider->render('ux_path');
						$slider->render('ux_intro');
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Interaction Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$slider->render('interaction_design');
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$slider->render('ux');
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$slider->render('ux_parts');
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$slider->render('ux_foundations');
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer ?>
	</body>
</html>
