<?php
    require_once 'core/init.php';
    $head = Head::get(7);
    $page_id = 7;
    $page = Pages::get(7);
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
                    'LinkedIn Web Design Learning Path Certificates',
                    'web_design_path',
                );

                $slider->renderSection(
                    'LinkedIn Web Designers Certificates',
                    'web_designers',
                );

                $slider->renderSection(
                    'LinkedIn Web Design Certificates',
                    'web_design',
                );

                $slider->renderSection(
                    'LinkedIn SVG Certificates',
                    'svg',
                );
            ?>
            
        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>