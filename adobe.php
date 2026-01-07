<?php
    require_once 'core/init.php';
    $head = Head::get(10);
    $page_id = 10;
    $page = Pages::get(10);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section class="slider-container" aria-label="LinkedIn Photoshop CC certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('photoshop');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Photoshop design certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('photoshop_design');
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="LinkedIn Lightroom CC certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('lightroom');
                    ?>
                </ul>
            </section>

        </div>
        <?php include_once './inc/footer.php'; //end #footer ?>
    </body>
</html>