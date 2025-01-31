<?php
    require_once 'core/init.php';
    $head = Head::get(14);
    $page_id=14;
    $page = Pages::get(14);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php echo $head->render(); ?>
    <body>
        <?php include 'inc/header.php'; ?>
        <div class="wrapper">
            <section id="projects" aria-label="Web design and web development projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                <?php echo $page->render(); ?>
                <article id="intro"><p>Here are a few things I'm working on presently and some from the past. To learn more about my work history, check out my <a href="https://www.linkedin.com/in/mirnesglamocic" aria-label="visit my LinkedIn profile" target="_blank">LinkedIn</a> profile.</p></article>
                <div class="menu">
                    <a id="showall" href="./projects.html" aria-label="View all my projects"></a>
                    <a class="project" target="1" aria-label="Web sites"><h2>Web sites</h2></a>
                    <a class="project" target="2" aria-label="Projects of edited images by web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Image editing</h2></a> 
                    <a class="project" target="3" aria-label="Illustration projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Illustrations</h2></a> 
                    <a class="project" target="4" aria-label="Logo projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Logo design</h2></a> 
                </div><!-- end .menu -->

                <div class="taget_box">

                    <div id="div1" class="target">
                        <!-- websites -->
                        <section id="websites" aria-label="Projects of web sites by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $website = new Website();
                                $website->renderSlider();
                            ?>
                        </section> <!-- end web sites -->
                    </div>

                    <!-- image editing -->
                    <div id="div2" class="target">
                        <section id="photoshops" class="photoshops"  aria-label="Photoshop projects of image editing by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $photoshops = new Photoshops();
                                $photoshops->renderSlider();
                            ?>
                        </section> <!-- end image editing -->
                    </div>

                    <!-- illustrations -->
                    <div id="div3" class="target">
                        <section id="illustrations" class='illustrations' aria-label="Projects of illustrations by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $illustrations = new Illustrations();
                                $illustrations->renderSlider();
                            ?>
                        </section>
                    </div><!-- end illustrations -->

                    <!-- Logos -->
                    <div id="div4" class="target">
                        <section id="logos" class='logos' aria-label="Projects of logos by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $logos = new Logos();
                                $logos->renderSlider();
                            ?>
                        </section><!-- end logos -->
                    </div><!--end .target -->

                </div><!-- end .target-box -->

            </section><!--end #projects-->
        </div><!--end .wrapper-->
        <?php include_once './inc/footer.php';//end #footer ?>
        <!-- Placed at the end of the document so the pages load faster -->
        <script>
            jQuery("#div1").css("display","block"),jQuery(document).ready(function(){jQuery(function(){jQuery("#showall").click(function(){jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
        </script>
    </body>
</html>
