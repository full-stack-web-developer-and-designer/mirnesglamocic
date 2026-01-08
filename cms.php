<?php
    require_once 'core/init.php';
    $head = Head::get(5);
    $page_id = 5;
    $page = Pages::get(5);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php
                $slider->renderSection(
                'LinkedIn WordPress Core Certificates',
                'wordpress'
                );

                $slider->renderSection(
                    'LinkedIn WordPress Plugin Certificates',
                    'wordpress_plugin'
                );

                $slider->renderSection(
                    'LinkedIn WordPress Theme Certificates',
                    'wordpress_theme'
                );

                $slider->renderSection(
                    'LinkedIn WordPress Ecommerce Certificates',
                    'wordpress_ecommerce'
                );
            ?>

        </div><!-- end .wrapper -->

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>