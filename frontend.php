<?php 
    require_once 'core/init.php';
    $head = Head::get(2);
    $page_id = 2;
    $page = Pages::get(2);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">
            
        <?php echo $page->renderPage(); ?>

            <section class="slider-container" aria-label="SoloLearn Front-end Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('frontend_sololearn'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Front-end Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php
					    $slider->render('frontend_linkedin');
					    $slider->render('frontend_intro');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn HTML Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('html'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn HTML and CSS Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('html_and_css'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn new CSS Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('css_new'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn CSS, SASS and Tailwind Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php
					    $slider->render('css');
					    $slider->render('sass');
					    $slider->render('tailwind');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Bootstrap Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('bootstrap'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Web Development Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php 
					    $slider->render('web_development');
					    $slider->render('view_source');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn JavaScript Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php
					    $slider->render('javascript_linkedin');
					    $slider->render('typescript');
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Pluralsight JavaScript Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('javascript_pluralsight'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn jQuery Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('jquery'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="Pluralsight jQuery Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('jquery_pluralsight'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn Angular Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('angular'); ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="LinkedIn React Certificates Slider">
                <ul class="content-slider cs-hidden">
                    <?php $slider->render('react'); ?>
                </ul>
            </section>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>
</html>