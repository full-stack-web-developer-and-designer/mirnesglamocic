<?php
require_once 'core/init.php';
$head = Head::get(7);
$page_id = 7;
$page = Pages::get(7);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php $webDesignPath = new WebDesignPathSlide();
                    $webDesignPath->renderSlider(); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php $webDesigners = new WebDesignersSlide();
                    $webDesigners->renderSlider(); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php $webDesign = new WebDesignSlide();
                    $webDesign->renderSlider(); ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php $svg = new SvgSlide();
                    $svg->renderSlider(); ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>