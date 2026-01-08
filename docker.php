<?php
    require_once 'core/init.php';
    $head = Head::get(12);
    $page = Pages::get(12);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php include_once './inc/header.php'; ?>

		<div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <section aria-label="LinkedIn Docker Certificates Slider" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('docker'); ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>
</html>