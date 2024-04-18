<?php
	require_once 'core/init.php';
	$head = Head::get(8);
    $page_id=8;
    $page = Pages::get(8);
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

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxPath = new UxPathSlide();
						$UxPath->renderSlider();
						$UxIntro = new UxIntroSlide();
						$UxIntro->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Interaction Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$InteractionDesign = new InteractionDesignSlide();
						$InteractionDesign->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Ux = new UxSlide();
						$Ux->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxParts = new UxPartsSlide();
						$UxParts->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$UxFoundation = new UxFoundationSlide();
						$UxFoundation->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer ?>
	</body>
</html>