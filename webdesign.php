<?php
    require_once 'core/init.php';
    $head = Head::get(7);
    $page_id = 7;
    $page = Pages::get(7);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_design_path');
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_designers');
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_design');
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('svg');
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>