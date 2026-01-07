<?php
    require_once 'core/init.php';
    $head = Head::get(5);
    $page_id = 5;
    $page = Pages::get(5);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->renderPage(); ?>
            
            <section class="slider-container" aria-label="WordPress certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('wordpress');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('wordpress_plugin');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('wordpress_theme');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('wordpress_ecommerce');
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>