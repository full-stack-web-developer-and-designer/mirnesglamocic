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

            <section class="slider-container" aria-label="Front-end certificates by SoloLearn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('frontend_sololearn');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Front-end certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('frontend_linkedin');
                        $slider = new Slider();
					    $slider->render('frontend_intro');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('html');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="HTML and CSS certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('html_and_css');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="New CSS certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('css_new');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="CSS, SASS and Tailwind certificates by LinkedIn">
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
            
            <section class="slider-container" aria-label="Bootstrap certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('bootstrap');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Web Development certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php 
                        
                        $slider = new Slider();
					    $slider->render('web_development');
                        $slider = new Slider();
					    $slider->render('view_source');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('javascript_linkedin');
                        $slider = new Slider();
					    $slider->render('typescript');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="JavaScript certificates by Pluralsight">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $slider = new Slider();
					    $slider->render('javascript_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php 
                        $slider = new Slider();
					    $slider->render('jquery');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="jQuery certificates by Pluralsight">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('jquery_pluralsight');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Angular certificates by LinkedIn">
                <ul class="content-slider cs-hidden">
                    <?php
                        $slider = new Slider();
					    $slider->render('angular');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="React certificates by LinkedIn">
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