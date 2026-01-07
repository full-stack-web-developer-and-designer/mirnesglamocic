<?php
    require_once 'core/init.php';
    $head = Head::get(12);
    $page = Pages::get(12);
?>
<!DOCTYPE html>
<html itemscope lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php include_once './inc/header.php'; ?>

		<div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <section aria-label="LinkedIn Docker certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('docker');
                    ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; ?>

    </body>

</html>