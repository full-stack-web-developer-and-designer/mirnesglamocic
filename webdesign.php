<?php
    require_once 'core/init.php';
    $head = Head::get(7);
    $page_id = 7;
    $page = Pages::get(7);
    $slider = new Slider();
?>
<!DOCTYPE html>

<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <section class="slider-container" aria-label="LinkedIn Web Design Learning Path Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('web_design_path'); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="LinkedIn Web Designers Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('web_designers'); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="LinkedIn Web Design Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('web_design'); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="LinkedIn SVG Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('svg'); ?>
                </ul>
            </section>
            
        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>