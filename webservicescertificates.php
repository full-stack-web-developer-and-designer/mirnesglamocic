<?php
    require_once 'core/init.php';
    $head = Head::get(6);
    $page_id = 6;
    $page = Pages::get(6);
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
                    'LinkedIn Web Services Certificates',
                    'web_services',
                );

                $slider->renderSection(
                    'LinkedIn JSON Certificates',
                    'json',
                );
            ?>

        </div>

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>