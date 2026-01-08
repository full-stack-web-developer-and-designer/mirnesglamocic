<?php
    require_once 'core/init.php';
    $head = Head::get(5);
    $page_id = 5;
    $page = Pages::get(5);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>
            
            <section class="slider-container" aria-label="LinkedIn WordPress Core Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('wordpress'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn WordPress Plugin Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('wordpress_plugin'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn WordPress Theme Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('wordpress_theme'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn WordPress Ecommerce Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('wordpress_ecommerce');
                    ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>
</html>