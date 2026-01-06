<?php 
    require_once 'core/init.php';
    $head = Head::get(2);
    $page_id = 2;
    $page = Pages::get(2);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->renderPage(); ?>

            <section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $frontendSoloLearn = new FrontendSoloLearnSlide();
                        $frontendSoloLearn->renderCertificates(); 
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Front-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $frontend = new FrontendSlide();
                        $frontend->renderCertificates();
                        $frontendIntro = new FrontendIntroSlide();
                        $frontendIntro->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $html = new HtmlSlide();
                        $html->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML and CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $htmlCss = new HtmlCssSlide();
                        $htmlCss->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $cssNew = new CssNewSlide();
                        $cssNew->renderCertificates(); 
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CSS certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $css = new CssSlide();
                        $css->renderCertificates();
                        $sass = new SassSlide();
                        $sass->renderCertificates();
                        $tailwind = new TailwindSlide();
                        $tailwind->renderCertificates(); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Bootstrap certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $bootstrap = new BootstrapSlide();
                        $bootstrap->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Web Development certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $webDevelopment = new WebDevelopmentSlide();
                        $webDevelopment->renderCertificates();
                        $viewSource = new ViewSourceSlide();
                        $viewSource->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $javaScript = new JavaScriptSlide();
                        $javaScript->renderCertificates();
                        $typeScript = new TypeScriptSlide();
                        $typeScript->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $javaScriptPluralsight = new JavaScriptPluralsightSlide();
                        $javaScriptPluralsight->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $jQuery = new JquerySlide();
                        $jQuery->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $jQueryPluralsight = new JqueryPluralsightSlide();
                        $jQueryPluralsight->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Angular certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $angular = new AngularSlide();
                        $angular->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="React certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $react = new ReactSlide();
                        $react->renderCertificates();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>