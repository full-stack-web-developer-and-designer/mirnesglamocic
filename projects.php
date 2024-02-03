<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">
<?php
	$title = "Portfolio of web design and development projects by Mirnes Glamočić";
	$meta['description'] = "View a portfolio of web design and development projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url = "https://mirnesglamocic.com/projects.html";
	$og_image = "https://mirnesglamocic.com/images/Mirnes_og.jpg";
	$twitter_image = "https://mirnesglamocic.com/images/MirnesGlamocic.webp";
    $css = "projects.min.css";
	include './inc/head.php';
?>
<body>
<?php include 'inc/header.php'; ?>
    <div class="wrapper">
        <section id="projects" aria-label="Web design and development projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <h1>Projects</h1>
                <div class="menu" aria-label="menu">
                    <a id="showall" href="./projects.html" aria-label="View all my projects"></a>
                    <a name="websites" class="project" target="1" aria-label="Web sites"><h2>Web sites</h2></a>
                    <a name="photoshops" class="project" target="2" aria-label="Image editing"><h2>Image editing</h2></a> 
                    <a name="illustrations" class="project" target="3" aria-label="Illustrations"><h2>Illustrations</h2></a> 
                    <a name="logos" class="project" target="4" aria-label="Logo design"><h2>Logo design</h2></a> 
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
                        <section id="photoshops" class="photoshops" aria-label="Projects of edited images by web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $Photoshops = new Photoshops();
                                $Photoshops->renderSlider();
                            ?>
                        </section> <!-- end photoshops -->
                    </div>
                    <!-- illustrations -->
                    <div id="div3" class="target">
                        <section id="illustrations" class='illustrations'aria-label="Illustration projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
                            <?php
                                $Illustrations = new Illustrations();
                                $Illustrations->renderSlider();
                            ?>
                        </section>
                    </div>
                    <!-- Logos -->
                    <div id="div4" class="target">
                        <section id="logos" class='logos' aria-label="Logo projects by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
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
    (function($){
        document.getElementById("div1").style.display = "block";
    })(jQuery);
        jQuery(document).ready(function(){
        jQuery(function(){jQuery("#showall").click(function(){
        jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
</script>
</body>
</html>