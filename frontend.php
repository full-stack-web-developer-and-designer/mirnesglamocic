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

            <section class="slider-container" aria-label="SoloLearn Front-end certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('frontend_sololearn');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Front-end certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('frontend_linkedin');
                        $slider = new Slider();
					    $slider->render('frontend_intro');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn HTML certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('html');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn HTML and CSS certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('html_and_css');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn new CSS certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('css_new');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn CSS, SASS and Tailwind certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('css');
                        $slider = new Slider();
					    $slider->render('sass');
                        $slider = new Slider();
					    $slider->render('tailwind');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Bootstrap certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('bootstrap');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Web Development certificates">
                <ul class="content-slider cs-hidden">
                    <?php 
                        
                        $slider = new Slider();
					    $slider->render('web_development');
                        $slider = new Slider();
					    $slider->render('view_source');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn JavaScript certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('javascript_linkedin');
                        $slider = new Slider();
					    $slider->render('typescript');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Pluralsight JavaScript certificates">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $slider = new Slider();
					    $slider->render('javascript_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn jQuery certificates">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $slider = new Slider();
					    $slider->render('jquery');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Pluralsight jQuery certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('jquery_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Angular certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('angular');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn React certificates">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('react');
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>