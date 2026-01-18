<?php
    require_once 'core/init.php';
    $head=Head::get(3);
    $page_id=3;
    $page=Pages::get(3);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php require_once BASE_PATH . '/inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php
                $slider->renderSection(
                    'LinkedIn Back-end Certificates',
                    [
                        'backend_php',
                        'backend_python',
                        'backend_intro',
                    ]
                );

                $slider->renderSection(
                    'LinkedIn PHP and PHP Frameworks Certificates',
                    [
                        'php_linkedin',
                        'php_frameworks',
                    ]
                );

                $slider->renderSection(
                    'Pluralsight PHP Certificates',
                    'php_pluralsight',
                );

                $slider->renderSection(
                    'LinkedIn Python Certificates',
                    'python',
                );

                $slider->renderSection(
                    'LinkedIn Node Certificates',
                    'node',
                );
            ?>

        </div><!-- end .wrapper -->

        <?php require_once BASE_PATH . '/inc/footer.php'; ?>

    </body>

</html>