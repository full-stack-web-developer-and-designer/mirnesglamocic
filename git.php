<?php
    require_once 'core/init.php';
    $head = Head::get(11);
    $page_id = 11;
    $page = Pages::get(11);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            
            <section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $gitNew = new GitNewSlide();
                        $gitNew->renderSlider();
                    ?>
                </ul>
            </section>

            <section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $git = new GitSlide();
                        $git->renderSlider();
                        $vcs = new VcsSlide();
                        $vcs->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $gitHubNew = new GitHubNewSlide();
                        $gitHubNew->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $gitHub = new GitHubSlide();
                        $gitHub->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>