<?php
    require_once 'core/init.php';
    $head = Head::get(5);
    $page_id = 5;
    $page = Pages::get(5);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $wordpress = new WordPressSlide();
                        $wordpress->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $wordpressPlugin = new WordPressPluginSlide();
                        $wordpressPlugin->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $wordpressTheme = new WordPressThemeSlide();
                        $wordpressTheme->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="WordPress certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $wordpressEcommerce = new WordPressEcommerceSlide();
                        $wordpressEcommerce->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>