<?php
declare(strict_types=1);
    
    /**
     * frontendcertificates.php
     *
     * Displays Frontend certificate sections with sliders.
     * Uses the Slider class to render grouped certificate galleries.
     *
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     */

    require_once __DIR__ . '/core/init.php';
    require_once __DIR__ . '/inc/helpers.php';

    $page_id = 2;
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
                        'SoloLearn Front-end Certificates',
                        'frontend_sololearn'
                    );

                    $slider->renderSection(
                        'LinkedIn Front-end Certificates',
                        [
                            'frontend_linkedin',
                            'frontend_intro'
                        ]
                    );

                    $slider->renderSection(
                        'LinkedIn HTML Certificates',
                        'html'
                    );

                    $slider->renderSection(
                        'LinkedIn HTML and CSS Certificates',
                        'html_and_css'
                    );

                    $slider->renderSection(
                        'LinkedIn Newest CSS Certificates',
                        'css_new'
                    );

                    $slider->renderSection(
                        'LinkedIn CSS, SASS and Tailwind Certificates',
                        [
                            'css',
                            'sass',
                            'tailwind'
                        ]
                    );

                    $slider->renderSection(
                        'LinkedIn Bootstrap Certificates',
                        'bootstrap'
                    );

                    $slider->renderSection(
                        'LinkedIn Web Development Certificates',
                        [
                            'web_development',
                            'view_source'
                        ]
                    );

                    $slider->renderSection(
                        'LinkedIn JavaScript Certificates',
                        [
                            'javascript_linkedin',
                            'typescript'
                        ]
                    );

                    $slider->renderSection(
                        'Pluralsight JavaScript Certificates',
                        'javascript_pluralsight'
                    );

                    $slider->renderSection(
                        'LinkedIn jQuery Certificates',
                        'jquery'
                    );

                    $slider->renderSection(
                        'Pluralsight jQuery Certificates',
                        'jquery_pluralsight'
                    );

                    $slider->renderSection(
                        'LinkedIn Angular Certificates',
                        'angular'
                    );

                    $slider->renderSection(
                        'LinkedIn React Certificates',
                        'react'
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