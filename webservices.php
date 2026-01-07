<?php
    require_once 'core/init.php';
    $head = Head::get(6);
    $page_id = 6;
    $page = Pages::get(6);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body><?php include 'inc/header.php'; ?>
        <div class="wrapper">
            
            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section class="slider-container" aria-label="Web service certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_services');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JSON certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('json');
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>