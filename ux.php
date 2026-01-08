<?php
    require_once 'core/init.php';
    $head = Head::get(8);
    $page_id=8;
    $page = Pages::get(8);
	$slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php include_once './inc/header.php'; ?>

		<div class="wrapper">

			<?php echo $page->renderPage(); ?>

			<?php
				$slider->renderSection(
					'LinkedIn UI and UX Learning Path Certificates',
					[
						'ux_path',
						'ux_intro',
					]
				);

				$slider->renderSection(
					'LinkedIn Interaction Design Certificates',
					'interaction_design',
				);

				$slider->renderSection(
					'LinkedIn UI and UX Core Certificates',
					'ux',
				);

				$slider->renderSection(
					'LinkedIn UI and UX Topic-Based Certificates',
					'ux_parts',
				);
				
				$slider->renderSection(
					'LinkedIn UI and UX Foundations Certificates',
					'ux_foundations',
				);
            ?>
			
		</div><!--end .wrapper-->

		<?php include_once './inc/footer.php'; //end #footer ?>

	</body>

</html>