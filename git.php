<?php
    require_once 'core/init.php';
    $head = Head::get(11);
    $page_id = 11;
    $page = Pages::get(11);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

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

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>
    
</html>