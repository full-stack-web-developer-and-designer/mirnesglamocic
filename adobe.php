<?php
    require_once 'core/init.php';
    $head = Head::get(10);
    $page_id = 10;
    $page = Pages::get(10);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            
            <section class="slider-container" aria-label="Photoshop CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $photoshop = new PhotoshopSlide();
                        $photoshop->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Photoshop CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $photoshopDesign = new PhotoshopDesignSlide();
                        $photoshopDesign->renderSlider();
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="Lightroom CC certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $lightroom = new LightroomSlide();
                        $lightroom->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; //end #footer ?>
    </body>
</html>