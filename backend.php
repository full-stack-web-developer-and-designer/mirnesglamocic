<?php
	require_once 'core/init.php';
	$head = Head::get(3);
    $page_id=3;
    $page = Pages::get(3);
    
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

			<section class="slider-container" aria-label="Back-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$backendPHP = new BackendPHPSlide();
						$backendPHP->renderSlider();
						$backendPython = new BackendPythonSlide();
						$backendPython->renderSlider();
						$backendIntro = new BackendIntroSlide();
						$backendIntro->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$PHP = new PHPSlide();
						$PHP->renderSlider();
						$PHPFrameworks = new PHPFrameworksSlide();
						$PHPFrameworks->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$PHPluralsight = new PHPluralsightSlide();
						$PHPluralsight->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Python certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Python = new PythonSlide();
						$Python->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="Node certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Node = new NodeSlide();
						$Node->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer ?>
	</body>
</html>