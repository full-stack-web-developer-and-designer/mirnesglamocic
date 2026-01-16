<?php
    require_once 'core/init.php';
    $head = Head::get(4);
    $page_id = 4;
    $page = Pages::get(4);
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
                    'LinkedIn SQL Certificates',
                    [
                        'sql',
                        'postgresql',
                    ]
                );

                $slider->renderSection(
                    'LinkedIn MySQL Certificates',
                    [
                        'mysql',
                    ]
                );

                $slider->renderSection(
                    'LinkedIn MongoDB Certificates',
                    'mongodb',
                );
            ?>
            
        </div><!-- end .wrapper -->

        <?php include_once './inc/footer.php'; //end #footer ?>

    </body>

</html>