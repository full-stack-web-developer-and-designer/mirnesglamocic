<?php

	require_once 'core/init.php';

    $page_id=1;

    $result = Pages::get(1);

    ?>

<!DOCTYPE html>

<html lang="en">

<?php

    $fb_title="Website Development and Web Design services by certified IT expert";
    $meta['og_description']="Professional website development, UI/UX and web design services by certified IT expert from Bosnia and Herzegovina.";
    $og_url="https://mirnesglamocic.com";
    $og_image="https://mirnesglamocic.com/images/Mirnes_og.jpg";
    $og_image_alt="Mirnes Glamočić | Full-Stack Web Developer and Designer, Bosnia & Herzegovina";
	$linkedin_title="Website Development, UI/UX and Web Design services by certified IT expert";
    $title="Mirnes Glamočić | Expert Web Developer and Designer";
    $meta['description']=$meta['og_description'];
    $twitter_image="https://mirnesglamocic.com/images/MirnesGlamocic.webp";

	include './inc/head.php';

?>
<?php
    $rnd = rand(1,2);
?>
<style type="text/css">

    /* Hero img */

    .hero.lazy {
        background-image: none;
        background-color: #F1F1FA;
    }

    #hero {
        background-image: url("/images/bg<?php echo $rnd ?>.webp");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding: 185px 0;
        text-align: center;
    }
    h1.white{
        margin:0 auto;
    }

@media screen and (min-width: 1024px) and (max-width: 1260px) {

    #hero {

        background-image: url("/images/bg<?php echo $rnd ?>_1260.webp");

    }

}

@media screen and (min-width: 768px) and (max-width: 1023px) {

    #hero {
        background-image: url("/images/bg<?php echo $rnd ?>_1023.webp");
        background-attachment:inherit;
    }

}

    @media screen and (max-width: 767px) {
        #hero {
        background-position: top right;
        background-attachment:inherit;
        }

        /* section project for mockup sites */

        .content:link,

        .content:visited,

        .content:hover

        .content:active {

            color: #000;

            background: #FFF;

            pointer-events: none;

        }

    }

    @media screen and (min-width: 409px) and (max-width: 767px) {

        #hero {
            background-image: url("/images/bg<?php echo $rnd ?>_767.webp");
            background-size:767px 900;
            padding: 35px;
        }
        h1.white{
            margin: 150px auto;
        }

    }

    @media screen and (max-width: 408px) {

        #hero {
            background-image: url("/images/bg<?php echo $rnd ?>_408.webp");
            padding: 20px;
        }

        h1.white{
            margin: 140px auto;
            padding: 25px;
        }

    }

    /* CSS query device pixel ratio: 2 */

    @media screen and (max-width: 1260px) and (min-device-pixel-ratio: 2),

    screen and (max-width: 1260px) and (-webkit-min-device-pixel-ratio: 2){

        #hero {background-image: url("/images/bg<?php echo $rnd ?>_1260@2x.webp");}

    }

    @media screen and (max-width: 1023px) and (min-device-pixel-ratio: 2),

    screen and (max-width: 1023px) and (-webkit-min-device-pixel-ratio: 2) {

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_1023@2x.webp");

        }

    }

    @media screen and (max-width: 767px) and (min--moz-device-pixel-ratio: 2),
    screen and (max-width: 767px) and (o-min-device-pixel-ratio: 2),
    screen and (max-width: 767px) and (-webkit-min-device-pixel-ratio: 2),
    screen and (max-width: 767px) and (min-device-pixel-ratio: 2){

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_767@2x.webp");

        }

    }
    @media screen and (max-width: 408px) and (min--moz-device-pixel-ratio: 2),
    screen and (max-width: 408px) and (o-min-device-pixel-ratio: 2),
    screen and (max-width: 408px) and (-webkit-min-device-pixel-ratio: 2),
    screen and (max-width: 408px) and (min-device-pixel-ratio: 2){

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_408@2x.webp");

        }

    }

    /* CSS query device pixel ratio: 3 */

    @media screen and (max-width: 1260px) and (min-device-pixel-ratio: 3),

    screen and (max-width: 1260px) and (-webkit-min-device-pixel-ratio: 3) {

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_1260@3x.webp");

        }

    }

    @media screen and (max-width: 767px) and (min--moz-device-pixel-ratio: 3),
    screen and (max-width: 767px) and (o-min-device-pixel-ratio: 3),
    screen and (max-width: 767px) and (-webkit-min-device-pixel-ratio: 3),
    screen and (max-width: 767px) and (min-device-pixel-ratio: 3){
        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_767@3x.webp");

        }

    }

    @media screen and (max-width: 408px) and (min--moz-device-pixel-ratio: 3),
    screen and (max-width: 408px) and (o-min-device-pixel-ratio: 3),
    screen and (max-width: 408px) and (-webkit-min-device-pixel-ratio: 3),
    screen and (max-width: 408px) and (min-device-pixel-ratio: 3){

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_408@3x.webp");

        }

    }

    /* CSS query device pixel ratio: 4 */

    @media screen and (max-width: 767px) and (min-device-pixel-ratio: 4),

    screen and (max-width: 767px) and (-webkit-min-device-pixel-ratio: 4) {

        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_767@4x.webp");

        }

    }
    @media screen and (max-width: 408px) and (min--moz-device-pixel-ratio: 4),
    screen and (max-width: 408px) and (o-min-device-pixel-ratio: 4),
    screen and (max-width: 408px) and (-webkit-min-device-pixel-ratio: 4),
    screen and (max-width: 408px) and (min-device-pixel-ratio: 4){
        #hero {

            background-image: url("/images/bg<?php echo $rnd ?>_408@4x.webp");

        }

}

</style>
<body id="home">
    <?php
        include 'inc/header.php';
    ?>
    
    <article id='hero'>
        <div class='wrapper'><h1 class='white'>Web Development, UI/UX and Web Design</h1></div>
    </article>
    <article id='aboutme'>
        <div class='wrapper'>
    <picture class="imgLeft">
     <!--[if IE 9]><video style='display: none;'><![endif]-->
        <source srcset="./images/webdev.webp, ./images/webdev@2x.webp 2x, ./images/webdev@3x.webp 3x, ./images/webdev@4x.webp 4x" type="image/webp" width="310" height="310" loading="lazy" media="(min-width: 1261px)">
        <source srcset="./images/webdev_1023.webp, ./images/webdev_1023@2x.webp 2x, ./images/webdev_1023@3x.webp 3x, ./images/webdev_1023@4x.webp 4x" type="image/webp" width="250" height="250" loading="lazy" media="(min-width: 1023px)">
        <source srcset="./images/webdev_861.webp, ./images/webdev_861@2x.webp 2x, ./images/webdev_861@3x.webp 3x, ./images/webdev_861@4x.webp 4x" type="image/webp" width="200" height="200" loading="lazy" media="(min-width: 861px)">
        <source srcset="./images/webdev_768.webp, ./images/webdev_768@2x.webp 2x, ./images/webdev_768@3x.webp 3x, ./images/webdev_768@4x.webp 4x" type="image/webp" width="150" height="150" loading="lazy" media="(min-width: 768px)">
    <!--[if IE 9]></video><![endif]-->
    <img decoding="async" srcset="./images/webdev.jpg" width="310" height="310" loading="lazy" alt='Expert Web Developer and Designer from Bosnia and Herzegovina'></picture>
    <h2>About me</h2><p>Hello there!</p><p>I&apos;m Mirnes and I was born in a small town in Bosnia and Herzegovina (Jajce), where I currently lives, although I&apos;ve moved over 30 times over 6 countries in the last 15 years (if you can&apos;t tell, I love to travel!).</p><p>I&apos;m a passionate, dedicated, effective and creative Web Developer, UI/UX and Web Designer with several years of experience in the web development and design industry and with a passion for clean design, standards-based code and open-source software.</p><p>I'm lifelong learner and I'm happiest when I'm creating, learning, exploring and thinking about how to make things better.</p><p>I have skills to convert any idea into a real working app. So let me know your idea, and I would come up with a great plan to make it live.</p><p>In addition to my love of technology and design, I am also interested in education.</p></div></article><article id='about' class='white'><div class='wrapper'>
<div id='quotes'>
    <h2>My favorite quotes</h2><p>If you really want to do something you&apos;ll find a way. If you don&apos;t, you&apos;ll find an excuse. - <em>Pablo Picasso</em></p><br class='none'><p>Live as if you were to die tomorrow. Learn as if you were to live forever. ―<em>Mahatma Gandhi</em></p><br class='none'><p>”Choose a job you love, and you will never have to work a day in your life.” -<em>Confucius</em></div></div></article>
<section id="certificates" aria-label="Certificates by ITAcademy">

    <div class="wrapper">
        <header>
            <h2>Certificates</h2>  
                <?php
                    $ITA = new ITA();
                    $ITA->renderSlider();
                ?>
            <article id='mycert'><br class='none'><p>So, finally, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.</p><br><p>After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.</p><br><p>I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.</p><br> <p>Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.</p><br><p class='no_print'>Below you can find and see some of these certificates.</p>
            </article>
        </header>
    </div>
</section>

    <section id="LinkedIn" aria-label="My certificates by LinkedIn and Pluralsight">
        <div class="wrapper">
            <?php
				$CertDesc = new CertDesc();
				$CertDesc->renderSlider();
			?>
        </div><!--end .wrapper-->
    </section><!--end #certificates-->

    <section id="skills" aria-label="Skills">
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
            <div class="menu" aria-label="menu">
                <a id="showall" href="#" aria-label="View all my projects"></a>
                <a class="project" target="1" aria-label="Web sites">Web sites</a>
                <a class="project" target="2" aria-label="Image editing">Image editing</a> 
                <a class="project" target="3" aria-label="Illustrations">Illustrations</a> 
                <a class="project" target="4" aria-label="Logo design">Logo design</a> 
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
                    <section class="photoshops">
                        <article class='photoshop'>
                            <a href='./photoshops/BIG/coffee-cup.jpg' data-lightbox='photoshops'>
                            <picture>
                            <!--[if IE 9]><video style='display: none;'><![endif]-->
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="576" height="384" loading="lazy" media="(min-width: 1261px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="530" height="353" loading="lazy" media="(min-width: 1209px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="500" height="333" loading="lazy" media="(min-width: 1140px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="450" height="300" loading="lazy" media="(min-width: 1031px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="400" height="267" loading="lazy" media="(min-width: 922px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="350" height="267" loading="lazy" media="(min-width: 815px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="300" height="200" loading="lazy" media="(min-width: 690px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="530" height="353" loading="lazy" media="(min-width: 560px)">
                                <source srcset="./photoshops/SMALL/coffee-cup.jpg" type="image/jpg" width="500" height="333" loading="lazy" media="(min-width: 500px)">
                                <!--[if IE 9]></video><![endif]-->
                                <img decoding="async" srcset="./photoshops/SMALL/coffee-cup.jpg" width="576" height="384" loading="lazy" alt="Coffee cup">
                            </picture></a>
                        </article>
                        <article class='photoshop-edit'>
                            <a href='./photoshops/BIG/coffee-cup_e.jpg' data-lightbox='photoshops'>
                            <picture>
                            <!--[if IE 9]><video style='display: none;'><![endif]-->
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="576" height="384" loading="lazy" media="(min-width: 1261px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="530" height="353" loading="lazy" media="(min-width: 1209px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="500" height="333" loading="lazy" media="(min-width: 1140px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="450" height="300" loading="lazy" media="(min-width: 1031px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="400" height="267" loading="lazy" media="(min-width: 922px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="350" height="267" loading="lazy" media="(min-width: 815px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="300" height="267" loading="lazy" media="(min-width: 690px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="530" height="353" loading="lazy" media="(min-width: 560px)">
                                <source srcset="./photoshops/SMALL/coffee-cup_e.jpg" type="image/jpg" width="500" height="333" loading="lazy" media="(min-width: 500px)">
                                <!--[if IE 9]></video><![endif]-->
                                <img decoding="async" srcset="./photoshops/SMALL/coffee-cup_e.jpg" width="576" height="384" loading="lazy" alt="Removed object from a coffee cup using Patch Tool">
                            </picture><div class="content fade"><p>Removed object from a coffee cup using Patch Tool.</p></div></a>
                        </article>
                        <article class='photoshop'>
                            <a href='./photoshops/BIG/coffee-cup.jpg' data-lightbox='photoshops'>
                                <img src='./photoshops/SMALL/coffee-cup.jpg' alt="Illustration of dynamic cubes by Mirnes Glamočić" loading="lazy"></a>
                        </article>
                        <article class='photoshop-edit'>
                            <a href='./photoshops/BIG/coffee-cup_e.jpg' data-lightbox='photoshops'>
                                <img src='./photoshops/SMALL/coffee-cup_e.jpg' alt="Removed object from a coffee cup using Patch Tool" class="blur" loading="lazy">
                                <div class="content fade"><p>Removed object from a coffee cup using Patch Tool.</p></div></a>
                        </article>
                    </section> <!-- end photoshops -->
                </div>
                <!-- illustrations -->
                <div id="div3" class="target">
                    <section class='illustrations'>
                        <?php
                            $Illustrations = new Illustrations();
                            $Illustrations->renderSlider();
                        ?>
                    </section>
                </div>
                <!-- Logos -->
                <div id="div4" class="target">
                    <section class='logos'>
                        <?php
                            $Logos = new Logos();
                            $Logos->renderSlider();
                        ?>
                    </section>
                </div>
        </div>

        </div><!--end .wrapper-->

    </section><!--end #projects-->

<!--Services-->
<section id="services" aria-label="Services">
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

<section id="contact" aria-label="Contact">
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
                <article id="icon_box">
                    
                    <span class="icon_box">
                        <a href="https://www.linkedin.com/in/mirnesglamocic/" aria-label="visit my LinkedIN profile" target="_blank">
                            <i class="contact_icon fab fa-linkedin"></i>
                        </a>
                    </span>
                    <span class="icon_box">
                        <a href="https://github.com/Full-Stack-Web-Developer-and-Designer/" aria-label="visit my GitHub profile" target="_blank">
                            <i class="contact_icon fab fa-github"></i>
                        </a>
                    </span>
                    <span class="icon_box">
                        <a href="https://twitter.com/mirnesglamocic/" aria-label="visit my Twitter profile" target="_blank">
                            <i class="contact_icon fa-brands fa-x-twitter"></i>
                        </a>
                    </span>

                </article>
        </article>

    </div><!--end .wrapper-->
</section> <!--contact-->

<!-- Placed at the end of the document so the pages load faster -->
<script>
    (function($){
        document.getElementById("div1").style.display = "block";
    })(jQuery);
        jQuery(document).ready(function(){
        jQuery(function(){jQuery("#showall").click(function(){
        jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
</script> 

<?php
	include_once './inc/footer.php';
	//end #footer
?>