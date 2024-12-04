<?php 
    require_once 'core/init.php';
    $head = Head::get(2);
    $page_id = 2;
    $page = Pages::get(2);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->render(); ?>

            <section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $frontendSoloLearn = new FrontendSoloLearnSlide();
                        $frontendSoloLearn->renderSlider(); 
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $frontend = new FrontendSlide();
                        $frontend->renderSlider();
                        $frontendIntro = new FrontendIntroSlide();
                        $frontendIntro->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $html = new HtmlSlide();
                        $html->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML and CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $htmlCss = new HtmlCssSlide();
                        $htmlCss->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $cssNew = new CssNewSlide();
                        $cssNew->renderSlider(); 
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $css = new CssSlide();
                        $css->renderSlider();
                        $sass = new SassSlide();
                        $sass->renderSlider();
                        $tailwind = new TailwindSlide();
                        $tailwind->renderSlider(); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Bootstrap certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $bootstrap = new BootstrapSlide();
                        $bootstrap->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Web Development certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $webDevelopment = new WebDevelopmentSlide();
                        $webDevelopment->renderSlider();
                        $viewSource = new ViewSourceSlide();
                        $viewSource->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $javaScript = new JavaScriptSlide();
                        $javaScript->renderSlider();
                        $typeScript = new TypeScriptSlide();
                        $typeScript->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $javaScriptPluralsight = new JavaScriptPluralsightSlide();
                        $javaScriptPluralsight->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $jQuery = new JquerySlide();
                        $jQuery->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $jQueryPluralsight = new JqueryPluralsightSlide();
                        $jQueryPluralsight->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Angular certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $angular = new AngularSlide();
                        $angular->renderSlider();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="React certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $react = new ReactSlide();
                        $react->renderSlider();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>