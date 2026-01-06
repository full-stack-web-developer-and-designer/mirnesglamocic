<?php
    require_once 'core/init.php';
    $head = Head::get(4);
    $page_id = 4;
    $page = Pages::get(4);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->renderHead(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <?php echo $page->renderPage(); ?>
            
            <section class="slider-container" aria-label="SQL certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $sql = new SqlSlide();
                        $sql->renderCertificates();
                        $postgre = new PostgreSlide();
                        $postgre->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="MySQL certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $mySQL = new MySqlSlide();
                        $mySQL->renderCertificates();
                    ?>
                </ul>
            </section>
            
            <section class="slider-container" aria-label="MongoDB certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <ul class="content-slider cs-hidden">
                    <?php
                        $mongoDb = new MongoDbSlide();
                        $mongoDb->renderCertificates();
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once './inc/footer.php';//end #footer ?>
    </body>
</html>