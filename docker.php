<?php
    require_once 'core/init.php';
    $head = Head::get(12);
    $page_id=12;
    $page = Pages::get(12);
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php echo $head->render(); ?>
	<body>
		<?php include 'inc/header.php'; ?>
		<div class="wrapper">
        <?php require_once 'core/init.php';$head=Head::get(12);$page_id=12;$page=Pages::get(12); ?><!doctypehtml><html itemscope lang="en"><?php echo $head->render(); ?><body><?php include 'inc/header.php'; ?><div class="wrapper"><?php echo $page->render(); ?><section aria-label="Docker certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container"><ul class="content-slider cs-hidden"><?php $docker=new DockerSlide();$docker->renderSlider(); ?></ul></section></div><?php include_once './inc/footer.php'; ?></body></html>
			<?php echo $page->render(); ?>

			<section class="slider-container" aria-label="Docker certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
					<?php
						$docker = new DockerSlide();
						$docker->renderSlider();
					?>
				</ul>
			</section>
			
		</div><!--end .wrapper-->
		<?php include_once './inc/footer.php';//end #footer?>
	</body>
</html>
