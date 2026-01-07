<?php
    require_once 'core/init.php';
    $head = Head::get(6);
    $page_id = 6;
    $page = Pages::get(6);
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>
        
        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">
            
            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>

            <section class="slider-container" aria-label="LinkedIn Web service certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_services');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn JSON certificates">
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