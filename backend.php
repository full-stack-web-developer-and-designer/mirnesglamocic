<?php
    require_once 'core/init.php';
    $head=Head::get(3);
    $page_id=3;$page=Pages::get(3);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>

        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section aria-label="Back-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('backend_php');
                        $slider->render('backend_python');
                        $slider->render('backend_intro');
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('php_linkedin');
                        $slider->render('php_frameworks');
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('php_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section aria-label="Python certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('python');
                    ?>
                </ul>
            </section>
            
            <section aria-label="Node certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
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