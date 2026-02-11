<?php
declare(strict_types=1);

    /**
     * linuxcertificates.php
     *
     * Displays Linux certificate sections with sliders.
     * Uses the Slider class to render grouped certificate galleries.
     *
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     */

    require_once __DIR__ . '/core/init.php';
    require_once __DIR__ . '/inc/helpers.php';
    
    $page_id = 13;
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
                            'LinkedIn Linux Engineers Certificates',
                            'linux_engineer'
                        );

                    $slider->renderSection(
                        'LinkedIn Linux Topic-Based Certificates',
                        'linux'
                    );

                    $slider->renderSection(
                        'LinkedIn Linux Distro Certificates',
                        'linux_distro'
                        );

                    $slider->renderSection(
                        'LinkedIn CentOS Certificates',
                        'centos'
                    );

                    $slider->renderSection(
                        'LinkedIn Bash Certificates',
                        'bash'
                    );

                    $slider->renderSection(
                        'LinkedIn Linux Text Editors Certificates',
                        'editors'
                        );

                    $slider->renderSection(
                        'LinkedIn Linux Foundations',
                        'linux_foundation'
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