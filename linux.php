<?php
	require_once 'core/init.php';
	$head = Head::get(13);
    $page_id=13;
    $page = Pages::get(13);
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

			<section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$LinuxEngineer = new LinuxEngineerSlide();
						$LinuxEngineer->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Linux = new LinuxSlide();
						$Linux->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$LinuxDistro = new LinuxDistroSlide();
						$LinuxDistro->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="CentOS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$CentOS = new CentOSSlide();
						$CentOS->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Bash certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Bash = new BashSlide();
						$Bash->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
			<section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Editors = new EditorsSlide();
						$Editors->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
			<ul class="content-slider cs-hidden">
			<!-- slider box -->
				<?php
					$LinuxFoundation = new LinuxFoundationSlide();
					$LinuxFoundation->renderSlider();
				?>
			</ul>
		</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php'; ?>
	</body>
</html>