<?php
    require_once 'core/init.php';
    $head=Head::get(3);
    $page_id=3;$page=Pages::get(3);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->renderPage(); ?>
            <section aria-label="Back-end certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $backendPHP=new BackendPHPSlide();
                        $backendPHP->renderCertificates();
                        $backendPython=new BackendPythonSlide();
                        $backendPython->renderCertificates();
                        $backendIntro=new BackendIntroSlide();
                        $backendIntro->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $php=new PHPSlide();
                        $php->renderCertificates();
                        $phpFrameworks=new PHPFrameworksSlide();
                        $phpFrameworks->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section aria-label="PHP certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $phpluralsight=new PHPluralsightSlide();
                        $phpluralsight->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section aria-label="Python certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $python=new PythonSlide();
                        $python->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section aria-label="Node certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"class="slider-container">
                <ul class="content-slider cs-hidden">
                    <?php
                        $node=new NodeSlide();
                        $node->renderCertificates();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>