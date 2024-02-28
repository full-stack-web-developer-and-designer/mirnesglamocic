<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">
<?php
	$title = "Portfolio of web design and web development projects by Mirnes Glamočić";
	$meta['description'] = "View a portfolio of web design and web development projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url = "https://mirnesglamocic.com/projects.html";
	$og_image = "https://mirnesglamocic.com/images/Mirnes_og.jpg";
	$twitter_image = "https://mirnesglamocic.com/images/MirnesGlamocic.webp";
    $css = "projects.min.css";
	include './inc/head.php';
?>
<body>
<?php include 'inc/header.php'; ?>
    <div class="wrapper">
        <section id="projects" aria-label="Web design and web development projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <h1>Projects</h1>
                <div class="menu" aria-label="menu">
                    <a id="showall" href="./projects.html" aria-label="View all my projects"></a>
                    <a class="project" target="1" aria-label="Web sites"><h2>Web sites</h2></a>
                    <a class="project" target="2" aria-label="Projects of edited images by web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Image editing</h2></a> 
                    <a class="project" target="3" aria-label="Illustration projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Illustrations</h2></a> 
                    <a class="project" target="4" aria-label="Logo projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina"><h2>Logo design</h2></a> 
                </div>
                <!-- websites -->
                <div class="taget_box">
                    <div id="div1" class="target">
                        <?php
                            $Website = new Website();
                            $Website->renderSlider();
                        ?>
                    </div>
                    <!-- image editing -->
                    <div id="div2" class="target">
                        <section id="photoshops" class="photoshops">
                            <?php
                                $Photoshops = new Photoshops();
                                $Photoshops->renderSlider();
                            ?>
                        </section> <!-- end photoshops -->
                    </div>
                    <!-- illustrations -->
                    <div id="div3" class="target">
                        <section id="illustrations" class='illustrations'>
                            <?php
                                $Illustrations = new Illustrations();
                                $Illustrations->renderSlider();
                            ?>
                        </section>
                    </div>
                    <!-- Logos -->
                    <div id="div4" class="target">
                        <section id="logos" class='logos'>
                            <?php
                                $Logos = new Logos();
                                $Logos->renderSlider();
                            ?>
                        </section>
                    </div>
            </div>

        </section><!--end #projects-->
    </div><!--end .wrapper-->
<?php include_once './inc/footer.php';//end #footer ?>
<!-- Placed at the end of the document so the pages load faster -->
<script>
    jQuery("#div1").css("display","block"),jQuery(document).ready(function(){jQuery(function(){jQuery("#showall").click(function(){jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
</script>
</body>
</html>