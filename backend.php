<?php
    require_once 'core/init.php';
    $head=Head::get(3);
    $page_id=3;$page=Pages::get(3);
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section aria-label="LinkedIn Back-end certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('backend_php');
                        $slider->render('backend_python');
                        $slider->render('backend_intro');
                    ?>
                </ul>
            </section>
            
            <section aria-label="LinkedIn PHP and PHP frameworks certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('php_linkedin');
                        $slider->render('php_frameworks');
                    ?>
                </ul>
            </section>
            
            <section aria-label="Pluralsight PHP certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('php_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section aria-label="LinkedIn Python certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('python');
                    ?>
                </ul>
            </section>
            
            <section aria-label="LinkedIn Node certificates" class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('node');
                    ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; ?>

    </body>

</html>