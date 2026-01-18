<?php
    require_once 'core/init.php';
    $head = Head::get(11);
    $page_id = 11;
    $page = Pages::get(11);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php require_once BASE_PATH . '/inc/footer.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php
                $slider->renderSection(
                    'LinkedIn Topic-Based GIT Certificates',
                    'git_new',
                );

                $slider->renderSection(
                    'LinkedIn Core GIT Certificates',
                    [
                        'git',
                        'vcs',
                    ]
                );

                $slider->renderSection(
                    'LinkedIn Topic-Based GitHub Certificates',
                    'github_new',
                );

                $slider->renderSection(
                    'LinkedIn Core GitHub Certificates',
                    'github',
                );
            ?>

        </div><!-- end .wrapper -->

        <?php require_once BASE_PATH . '/inc/footer.php'; ?>
    </body>

</html>