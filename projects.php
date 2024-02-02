<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Portfolio of web design and development projects by Mirnes Glamočić";
	$meta['og_description']="View a portfolio of web design and development projects by professional web designer and developer Mirnes Glamočić from Bosnia and Herzegovina.";
	$title=$fb_title;
	$meta['description']=$meta['og_description'] ." The best of the best!";
	$og_url="https://mirnesglamocic.com/projects.html";
	$og_image="https://mirnesglamocic.com/images/Mirnes_og.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$twitter_image="https://mirnesglamocic.com/images/MirnesGlamocic.webp";
	$canonical = "https://mirnesglamocic.com/projects.html";
	include './inc/head.php';
?>
<body class="development">
<?php
include 'inc/header.php';
?>
	<div class="wrapper">
	<section id="projects" aria-label="Web design and development projects by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
            <h1>Projects</h1>
            <div class="menu" aria-label="menu">
                <a id="showall" href="./projects.html" aria-label="View all my projects"></a>
                <a role="button" tabindex="0" class="project" target="1" aria-label="Web sites"><h2>Web sites</h2></a>
                <a role="link" tabindex="0" class="project" target="2" aria-label="Image editing"><h2>Image editing</h2></a> 
                <a role="link" tabindex="0" class="project" target="3" aria-label="Illustrations"><h2>Illustrations</h2></a> 
                <a role="link" tabindex="0" class="project" target="4" aria-label="Logo design"><h2>Logo design</h2></a> 
            </div>

            <div class="taget_box">
                <div id="div1" class="target">
                    <?php
                        $Website = new Website();
                        $Website->renderSlider();
                    ?>
                </div>
                <!-- image editing -->
                <div id="div2" class="target">
                    <section class="photoshops" aria-label="Projects of edited images by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
                        <?php
                            $Photoshops = new Photoshops();
                            $Photoshops->renderSlider();
                        ?>
                    </section> <!-- end photoshops -->
                </div>
                <!-- illustrations -->
                <div id="div3" class="target">
                    <section class='illustrations'aria-label="Illustration projects by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
                        <?php
                            $Illustrations = new Illustrations();
                            $Illustrations->renderSlider();
                        ?>
                    </section>
                </div>
                <!-- Logos -->
                <div id="div4" class="target">
                    <section class='logos' aria-label="Logo projects by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina">
                        <?php
                            $Logos = new Logos();
                            $Logos->renderSlider();
                        ?>
                    </section>
                </div>
        </div>

    </section><!--end #projects-->
</div><!--end .wrapper-->
<?php
	include_once './inc/footer.php';
	//end #footer
?>
<!-- Placed at the end of the document so the pages load faster -->
<script>
    (function($){
        document.getElementById("div1").style.display = "block";
    })(jQuery);
        jQuery(document).ready(function(){
        jQuery(function(){jQuery("#showall").click(function(){
        jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
</script>