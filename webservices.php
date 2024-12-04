<?php
    require_once 'core/init.php';
    $head = Head::get(6);
    $page_id = 6;
    $page = Pages::get(6);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body><?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            <section class="slider-container" aria-label="Web service certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $webServices = new WebServicesSlide();
                        $webServices->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JSON certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $json = new JsonSlide();
                        $json->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>