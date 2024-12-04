<?php
    require_once 'core/init.php';
    $head = Head::get(13);
    $page_id = 13;
    $page = Pages::get(13);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            <section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $linuxEngineer = new LinuxEngineerSlide();
                        $linuxEngineer->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $linux = new LinuxSlide();
                        $linux->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $linuxDistro = new LinuxDistroSlide();
                        $linuxDistro->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CentOS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $centOS = new CentOSSlide();
                        $centOS->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Bash certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $bash = new BashSlide();
                        $bash->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $editors = new EditorsSlide();
                        $editors->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Linux certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $linuxFoundation = new LinuxFoundationSlide();
                        $linuxFoundation->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>