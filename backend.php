<?php
    require_once 'core/init.php';
    $head=Head::get(3);
    $page_id=3;$page=Pages::get(3);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>
            <section aria-label="Back-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $backendPHP=new BackendPHPSlide();
                        $backendPHP->renderSlider();
                        $backendPython=new BackendPythonSlide();
                        $backendPython->renderSlider();
                        $backendIntro=new BackendIntroSlide();
                        $backendIntro->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $php=new PHPSlide();
                        $php->renderSlider();
                        $phpFrameworks=new PHPFrameworksSlide();
                        $phpFrameworks->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $phpluralsight=new PHPluralsightSlide();
                        $phpluralsight->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section aria-label="Python certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $python=new PythonSlide();
                        $python->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section aria-label="Node certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $node=new NodeSlide();
                        $node->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>