<?php
    require_once 'core/init.php';
    $head = Head::get(9);
    $page_id=9;
    $page = Pages::get(9);
	$slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php require_once BASE_PATH . '/inc/header.php'; ?>
		<div class="wrapper">

			<?php echo $page->renderPage(); ?>

			<?php

			$slider->renderSection(
				'LinkedIn SEO Certificates',
				'seo',
                );
            ?>
			
		</div><!--end .wrapper-->

		<?php require_once BASE_PATH . '/inc/footer.php'; ?>
	</body>

</html>