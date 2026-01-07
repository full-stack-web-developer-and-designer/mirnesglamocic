<?php
    require_once 'core/init.php';
    $head = Head::get(11);
    $page_id = 11;
    $page = Pages::get(11);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php $slider = new Slider(); ?>
            
            <section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('git_new');
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('git');
                        $slider->render('vcs');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('github_new');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider->render('github');
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>