<?php
declare(strict_types=1);
    
    /**
     * wordpresscertificates.php
     *
     * Displays WordPress certificate sections with sliders.
     * Uses the Slider class to render grouped certificate galleries.
     *
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     */

    require_once __DIR__ . '/core/init.php';
    require_once __DIR__ . '/inc/helpers.php';

    $page_id = 5;
    $head = Head::get($page_id);
    $page = Pages::get($page_id);

    $slider = new Slider();
    
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php require_once BASE_PATH . '/inc/header.php'; ?>

        <main>
            
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
        
        </main>

        <?php require_once BASE_PATH . '/inc/footer.php'; ?>

        <?php
            // Custom JS
            $js_files = ['cert-slider.js'];
            load_js($js_files);
        ?>

    </body>

</html>