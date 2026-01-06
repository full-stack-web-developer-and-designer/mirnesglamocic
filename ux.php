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

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$uxPath = new UxPathSlide();
						$uxPath->renderCertificates();
						$uxIntro = new UxIntroSlide();
						$uxIntro->renderCertificates();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Interaction Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$interactionDesign = new InteractionDesignSlide();
						$interactionDesign->renderCertificates();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$ux = new UxSlide();
						$ux->renderCertificates();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$uxParts = new UxPartsSlide();
						$uxParts->renderCertificates();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="UI/UX certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$uxFoundation = new UxFoundationSlide();
						$uxFoundation->renderCertificates();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer ?>
	</body>
</html>
