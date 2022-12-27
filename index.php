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

    <section id="projects">
        <div class="wrapper">
            <h2>Projects</h2>
            <div class="menu">
                <a id="showall"></a>
                <a class="single" target="1">Web sites</a> 
                <a class="single" target="2">Image editing</a> 
                <a class="single" target="3">Logo design</a> 
                <a class="single" target="4">Logo design</a>
            </div>
            <div class="taget_box">
                <div id="div1" class="target"><img src="./images/Dreamweaver.png"></div>
                <div id="div2" class="target"><img src="./images/HTML.png"></div>
                <div id="div3" class="target"><img src="./images/CSS.png"></div>
                <div id="div4" class="target"><img src="./images/PHP.png"></div>
</div>
            
        </div><!--end .wrapper-->
    </section><!--end #projects-->

    <!--<section id="services">
        <div class="wrapper">
            <h2>Services</h2>
 
        </div><!-end .wrapper-->
    <!--</section><!-end #skills-->
    <!--LinkedIn badges-->
    <section id="badges">
        <div class="wrapper">
            <h2>LinkedIn skill assesment badges</h2>
            <p>The LinkedIn Skill Assessments is the LinkedIn feature that allows you to confirm the skills you’ve included on your profile by completing assessments related to those skills.</p>
            <p>The LinkedIn skill assessment is a way for you to showcase your skills and expertise on the platform.</p>
            <p>A typical assessment consists of 15 multiple choice questions and each question tests at least one concept or subskill.<br>The questions are timed and must be completed in one session with score in the top 30%.</p>
            <p>If you don't earn a skill badge for a given skill, you can retake the exam once more within six months.</p><br>
            <p>Below you can see my badges for passing LinkedIn skill exams.</p>
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/HTML/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-HTML.png" alt="HTML LinkedIn badge by Mirnes Glamočić"></a>
        </article><!--end .badge-->
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/CSS/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-CSS.png" alt="CSS LinkedIn badge by Mirnes Glamočić"></a>
        </article>
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/JavaScript/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-JavaScript" alt="JavaScript LinkedIn badge by Mirnes Glamočić"></a>
        </article>
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/jQuery/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-jQuery" alt="jQuery LinkedIn badge by Mirnes Glamočić"></a>
        </article>
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/PHP/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-PHP.png" alt="PHP LinkedIn badge by Mirnes Glamočić"></a>
        </article><!--end .badge-->
        <article class="badge">
            <a href="https://www.linkedin.com/skill-assessments/WordPress/quiz-intro/?channel=FEED_SHOWCASE&vanityNameContext" target="_blank"><img src="images/LinkedIn_badge-WordPress.png" alt="WordPress LinkedIn badge by Mirnes Glamočić"></a>
        </article><!--end .badge-->
        </div><!--end .wrapper-->
        
    </section><!--end #badges-->
 
    <!--<section id="projects">
        <div class="wrapper">
            <H2>Projects</H2>
        </div>end .wrapper-->
    <!--</section> end #projects-->
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
    <script src="./lightbox2/src/js/lightbox.js"></script><script src='./JS/slider.js'></script>
<?php
	include_once './inc/footer.php';
	//end #footer
?>
<script>
    jQuery(document).ready(function(){
        jQuery(function(){
            jQuery('#showall').click(function(){
                jQuery('.target').show();
            });

        jQuery('.single').click(function(){
            jQuery('.target').hide();
            jQuery('#div'+jQuery(this).attr('target')).show();
        });
        });
    });
    /*
        jQuery("#image_editing").click(function(){
            jQuery("#my_image_editing").fadeToggle(1000);
        });
    });*/

    
</script>
</body>