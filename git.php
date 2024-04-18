<?php
	require_once 'core/init.php';
	$head = Head::get(11);
    $page_id=11;
    $page = Pages::get(11);
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
		
			<section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$Git = new GitSlide();
						$Git->renderSlider();
						$Vcs = new VcsSlide();
						$Vcs->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$GitHubNew = new GitHubNewSlide();
						$GitHubNew->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->

			<section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$GitHub = new GitHubSlide();
						$GitHub->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer?>
	</body>
</html>