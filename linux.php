<?php
    require_once 'core/init.php';
    $head = Head::get(13);
    $page_id = 13;
    $page = Pages::get(13);
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section class="slider-container" aria-label="LinkedIn Linux engineers certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('linux_engineer');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux topic-based certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('linux');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux distro certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('linux_distro');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn CentOS certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('centos');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Bash certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('bash');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux text editors certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('editors');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Linux foundations certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('linux_foundation');
                    ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; ?>

    </body>

</html>