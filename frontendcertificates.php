<?php 
    require_once 'core/init.php';
    $head = Head::get(2);
    $page_id = 2;
    $page = Pages::get(2);
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
                'SoloLearn Front-end Certificates',
                'frontend_sololearn'
            );

            $slider->renderSection(
                    'LinkedIn Front-end Certificates',
                    [
                        'frontend_linkedin',
                        'frontend_intro',
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
                    'tailwind',
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
                    'view_source',
                ]
            );

            $slider->renderSection(
                'LinkedIn JavaScript Certificates',
                [
                    'javascript_linkedin',
                    'typescript',
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

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>