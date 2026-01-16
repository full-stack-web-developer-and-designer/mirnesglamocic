<?php
    require_once 'core/init.php';
    $head = Head::get(13);
    $page_id = 13;
    $page = Pages::get(13);
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
                        'LinkedIn Linux Engineers Certificates',
                        'linux_engineer',
                    );

                $slider->renderSection(
                    'LinkedIn Linux Topic-Based Certificates',
                    'linux',
                );

                $slider->renderSection(
                    'LinkedIn Linux Distro Certificates',
                    'linux_distro',
                    );

                $slider->renderSection(
                    'LinkedIn CentOS Certificates',
                    'centos',
                );

                $slider->renderSection(
                    'LinkedIn Bash Certificates',
                    'bash',
                );

                $slider->renderSection(
                    'LinkedIn Linux Text Editors Certificates',
                    'editors',
                    );

                $slider->renderSection(
                    'LinkedIn Linux Foundations',
                    'linux_foundation',
                );
            ?>

        </div><!-- end .wrapper -->

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>