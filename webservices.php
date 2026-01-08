<?php
    require_once 'core/init.php';
    $head = Head::get(6);
    $page_id = 6;
    $page = Pages::get(6);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>
        
        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">
            
            <?php echo $page->renderPage(); ?>

            <section class="slider-container" aria-label="LinkedIn Web Services Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('web_services');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn JSON Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('json');
                    ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>