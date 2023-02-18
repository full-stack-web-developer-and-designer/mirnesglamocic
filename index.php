<?php
	require_once 'core/init.php';
    $page_id=1;
    $result = Pages::get(1);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	$title="Mirnes Glamočić | Web Developer and Designer";
    //Check length of title for SEO (50-70 characters) - 46
    //echo "Length of title is " . strlen($title) . "characters long." . " ";
    $og_title="Mirnes Glamočić | Web Developer and Designer";
	$website_url="https://mirnesglamocic.com";
    $meta['description']="Mirnes Glamočić is an experienced Web Developer and Designer with several years of experience in the web development and design industry ";
    //Check length of description for SEO (140-180 characters) - 139
    //echo "Length of description is " . strlen($meta['description']) . "characters long.";
	$meta['keywords']="web development, web developer, front-end development, frontend development, front-end developer, frontend developer, backend-development, backend development, back-end developer, backend developer, database development database developer, web design, web designer";
	$og_image="./images/MirnesGlamocic.jpg";
	$image_alt="Mirnes Glamočić";
	include './inc/head.php';
?>
<script src="./JS/project_slider.js" defer></script>
</head>
<body>
    <?php
        include 'inc/header.php';
    ?>
    <?php echo $result->render(); ?>
    <section id="certificates">
        <div class="wrapper">
            <header>
            <?php
				$ITA = new ITA();
				$ITA->renderSlider();
			?>
            </header>
        </div>
    </section>
    <section id="LinkedIn">
        <div class="wrapper">
        <?php
				$CertDesc = new CertDesc();
				$CertDesc->renderSlider();
			?>
        </div><!--end .wrapper-->
    </section><!--end #certificates-->

    <section id="skills">
        <div class="wrapper">
            <h2>Skills</h2> 
            <?php
				$Skills = new Skills();
				$Skills->renderSlider();
			?>
        </div><!--end .wrapper-->
    </section><!--end #skills-->

    <section id="projects" aria-label="Projects">
        <div class="wrapper">
            <h2>Projects</h2>
            <div class="menu">
                <a id="showall"></a>
                <a class="project" target="1">Web sites</a> 
                <a class="project" target="2">Image editing</a> 
                <a class="project" target="3">Logo design</a> 
                <a class="project" target="4">Logo design</a>
            </div>
            <div class="taget_box">
                <div id="div1" class="target">
                    <section class="project_complete">
                     <!--   
                    <article class="skill_thumb">
                            <img src="./thumb/HTML.png" alt="HTML Logo">
                            <img src="./thumb/CSS.png" alt="CSS Logo">
                            <img src="./thumb/JavaScript.png" alt="JavaScript Logo">
                            <img src="./thumb/jQuery.png" alt="jQuery Logo">
                            <img src="./thumb/JSON.png" alt="JSON Logo">
                            <img src="./thumb/PHP.png" alt="PHP Logo">
                            <img src="./thumb/MySQL.png" alt="MySQL Logo">
                            <img src="./thumb/Photoshop.png" alt="Photoshop Logo">
                            <img src="./thumb/seo.png" alt="SEO Logo">              
                        </article>
-->




            <article class="project_mockup" data-carousel><!--carousel-->
        
            <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
            <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
            
             
                        <ul class="slides" data-slides><!-- slider inner-->
                        
                        <li class='slide' data-active>
                                <img src="./projects/mockup_visit-neum.jpg" class="active">
                            </li>
                            <li class='slide'>
                                <img src="./projects/mockup_Matic.jpg">
                            </li>
                            <li class='slide'>
                                <img src="projects/mockup_Mampas.jpg">
                            </li>
                            <li class='slide'>
                                <img src="projects/mockup_Ivana.jpg">
                            </li>
                            
                        </ul>
                        
                        
                        </article>
                        

                        <article class="project_desc">
                            <h3>visit-neum.com - Tourism Website</h3>
                            <p>This project contains a complex dynamic responsive website with a complete reservation system in one city, where users can contact directly the owners of properties such as hotels, apartments, villas, rooms, restaurants, boats and car rentals, similar to the website www.booking .com. Also, the time for the next 7 days and the value of the currency at the exchange rate of NLB Bank are embedded there. There are also created custom 403 and 404 error pages.</p>
                            <p>• On index pages all properties are displayed using the JavaScript library LightSlider and with Object Oriented PHP and SQL function rand() they are displayed randomly each time when open index page is.<br>
                            • Images on every page for each property are displayed using JavaScript Library Lightbox. There are stored in MySQL database and read using Object Oriented PHP and SQL.<br> 
                            • Under the description for each property using the JavaScript function rand() is displayed a random number of users that currently viewing this page.</p>
                            <p>
                                <a href="https://visit-neum.com/" target="_blank" class="button" >VIEW PROJECT &raquo;</a>
                            </p>
                            
                        </article>
                    </section> 
                    <section class="project_complete">
                    <article class='project_mockup'>
                    <ul class='slides'>
                          <!-- slider box -->
                        <?php
                            $ProjectsSlide = new ProjectsSlide();
                            $ProjectsSlide->renderSlider();
                        ?>
                         </ul>
                  </article>
                  
                        <article class="project_desc">
                            <h3>visit-neum.com - Tourism Website</h3>
                            <p>This project contain a dynamic responsive website with a complete booking system in one city, where users can contact directly owners of properties such as hotels, apartments, villas, rooms, restaurants, boats, and rent-a-car. Also, the time for the next 7 days and the value of the currency at the exchange rate of NLB Bank are embedded there. There are also created custom 403 and 404 error pages.</p>
                            <p>• On index pages all properties are displayed using the JavaScript library LightSlider and with Object Oriented PHP and SQL function rand() they are displayed randomly each time when open index page is.<br>
                            • Images on every page for each property are displayed using JavaScript Library Lightbox. There are stored in MySQL database and read using Object Oriented PHP and SQL.<br> 
                            • Under the description for each property using the JavaScript function rand() is displayed a random number of users that currently viewing this page.</p>
                            <p>
                                <a href="https://visit-neum.com/" target="_blank" class="button" >VIEW PROJECT &raquo;</a>
                            </p>
                        </article>
                    </section> 
                </div>

                
                
                <div id="div2" class="target"><img src="./images/HTML.png"></div>
                <div id="div3" class="target"><img src="./images/CSS.png"></div>
                <div id="div4" class="target"><img src="./images/PHP.png"></div>
        </div>
            
        </div><!--end .wrapper-->
    </section><!--end #projects-->

<!--Services-->
<section id="services">
    <div class="wrapper">
        <h2>Services</h2>
            <h3 id="service">Best solutions for your business</h3>
                <!-- slider box -->
                <?php
                    $ServicesSlide = new ServicesSlide();
                    $ServicesSlide->renderSlider();
                ?>
    </div><!-- end .wrapper-->
</section><!-- end #services-->
    
 
<section id="contact">
    <div class="wrapper">
    <?php
    include_once './classes/Form_process.class.php';
        ?>
            <article id="form">
            <?php
            include './inc/form.php';
            ?>
            </article>
            <article id="icons">
                <p>Feel free to connect with me...</p>
                <span class="icon_box">
                    <a href="https://www.linkedin.com/in/mirnesglamocic/" target="_blank">
                    <i class="contact_icon fab fa-linkedin"></i>
                    </a>
                </span>
                <span class="icon_box">
                    <a href="https://github.com/Full-Stack-Web-Developer-and-Designer/" target="_blank">
                        <i class="contact_icon fab fa-github"></i>
                    </a>
                </span>
            </article>
        </div><!--end .wrapper-->
    </section> <!--contact-->
    <a class="scroll-top" rel="nofollow"><i class="fa fa-arrow-up"></i></a>
    
<?php
	include_once './inc/footer.php';
	//end #footer
?>
<script src="./lightbox2/src/js/lightbox.js"></script>
<!--<script src='./JS/slider.js'></script>-->
<script src='./JS/mockup_slider.js'></script>
<script>
    jQuery(document).ready(function(){
        jQuery(function(){
            jQuery('#showall').click(function(){
                jQuery('.target').show();
            });

        jQuery('.project').click(function(){
            jQuery('.target').hide();
            jQuery('#div'+jQuery(this).attr('target')).show();
        });
        });
    });
</script>

</body>