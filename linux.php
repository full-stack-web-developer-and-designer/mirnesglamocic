<?php
    require_once 'core/init.php';
    $head = Head::get(13);
    $page_id = 13;
    $page = Pages::get(13);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <section class="slider-container" aria-label="LinkedIn Linux Engineers Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('linux_engineer'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux Topic-based Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('linux'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux Distro Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('linux_distro'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn CentOS Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('centos'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Bash Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('bash'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux text Editors Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('editors'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux Foundations Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('linux_foundation'); ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>