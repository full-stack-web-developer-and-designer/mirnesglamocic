<?php
    require_once 'core/init.php';
    $head = Head::get(10);
    $page_id = 10;
    $page = Pages::get(10);
    $slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php include_once './inc/header.php'; ?>

        <div class="wrapper">

            <?php echo $page->renderPage(); ?>

            <?php
                $slider->renderSection(
                    'LinkedIn Photoshop CC Certificates',
                    'photoshop'
                );

                $slider->renderSection(
                    'LinkedIn Photoshop Design Certificates',
                    'photoshop_design'
                );

                $slider->renderSection(
                    'LinkedIn Lightroom CC Certificates',
                    'lightroom'
                );
            ?>

        </div><!-- end .wrapper -->

        <?php include_once './inc/footer.php'; //end #footer ?>
        
    </body>
    
</html>