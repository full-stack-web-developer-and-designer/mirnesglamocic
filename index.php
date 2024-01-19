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

<!-- include JS mockup slider for projects -->

<script src="./JS/project_slider.min.js" defer></script>

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



                    <section class="project_complete" aria-label="Project visit-neum.com">

                        <div class="main-outer">

                            <article class="project_mockup" data-carousel><!--carousel-->

                                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>

                                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

                                <ul class="slides" data-slides><!-- slider inner-->

                                    <li class='slide' data-active>

                                        <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_visit-neum_600.webp, https://mirnesglamocic.com/projects/mockup_visit-neum_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_visit-neum_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_visit-neum_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_visit-neum_500.webp, https://mirnesglamocic.com/projects/mockup_visit-neum_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_visit-neum_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_visit-neum_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_visit-neum_408.webp, https://mirnesglamocic.com/projects/mockup_visit-neum_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_visit-neum_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_visit-neum_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 400px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_visit-neum_300.webp, https://mirnesglamocic.com/projects/mockup_visit-neum_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_visit-neum_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_visit-neum_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_visit-neum.jpg" alt="Mockup by visit-neum.com">

                                        </picture>

                                    </li>

                                    <li class='slide'>

                                        <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Matic_600.webp, https://mirnesglamocic.com/projects/mockup_Matic_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Matic_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Matic_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Matic_500.webp, https://mirnesglamocic.com/projects/mockup_Matic_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Matic_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Matic_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Matic_408.webp, https://mirnesglamocic.com/projects/mockup_Matic_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Matic_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Matic_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Matic_300.webp, https://mirnesglamocic.com/projects/mockup_Matic_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Matic_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Matic_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_Matic.jpg" alt="Mockup by visit-neum.com">

                                        </picture>

                                    </li>

                                    <li class='slide'>

                                    <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Mampas_600.webp, https://mirnesglamocic.com/projects/mockup_Mampas_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Mampas_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Mampas_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Mampas_500.webp, https://mirnesglamocic.com/projects/mockup_Mampas_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Mampas_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Mampas_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Mampas_408.webp, https://mirnesglamocic.com/projects/mockup_Mampas_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Mampas_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Mampas_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Mampas_300.webp, https://mirnesglamocic.com/projects/mockup_Mampas_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Mampas_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Mampas_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_Mampas.jpg" alt="Mockup by visit-neum.com">

                                        </picture>

                                    </li>

                                    <li class='slide'>

                                    <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Ivana_600.webp, https://mirnesglamocic.com/projects/mockup_Ivana_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Ivana_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Ivana_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Ivana_500.webp, https://mirnesglamocic.com/projects/mockup_Ivana_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Ivana_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Ivana_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Ivana_408.webp, https://mirnesglamocic.com/projects/mockup_Ivana_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Ivana_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Ivana_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_Ivana_300.webp, https://mirnesglamocic.com/projects/mockup_Ivana_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_Ivana_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_Ivana_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_Ivana.jpg" alt="Mockup by visit-neum.com">

                                        </picture>

                                    </li>

                                </ul>

                                <ul class="skills">

                                    <li class="project_title">Skills</li>

                                    <li>HTML</li>

                                    <li>CSS</li>

                                    <li>JS</li>

                                    <li>jQuery</li>

                                    <li>JSON</li>

                                    <li>AJAX</li>

                                    <li>OOP</li>

                                    <li>PHP</li>

                                    <li>MySQL</li>

                                    <li>PS</li>

                                    <li>Bridge</li>

                                    <li>SEO</li>

                                </ul>

                            </article> 

                            <article class="project_desc">

                                <h3>Tourism Website</h3>

                                <p>This project contains a complex dynamic responsive website with a complete reservation system in one city, where users can directly contact the owners of properties such as hotels, apartments, villas, rooms, restaurants, boats and car rentals, similar to the website booking.com.</p>

                                <p>On the home page is embedded the time for the next 7 days, the value of the currency at the NLB Bank exchange rate, and with the help of the LightSlider JavaScript library, object-oriented PHP, and SQL function rand() the properties are displayed randomly each time when home page is opened.</p>

                                <p>Each property contains a short description, a location on a Google map, an image gallery displayed with the help of the LightBox JavaScript library, and some properties also contain a video embedded by YouTube.</p>

                                <p>Also, all properties contain a contact form, which is created on a popup modal created with jQuery. At the same time, all pages contain another popup modal with a contact form for contacting the site administrator.</p>

                                <p>With excellent SEO, all properties have improved the site to appear at the top of Google searches.</p>

                                <p>

                                    <a href="https://visit-neum.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a>

                                </p>

                            </article>

                        <div><!-- end .main-outer -->

                    </section>



                    <section class="project_complete" aria-label="Project Olive Oil Matić">

                        <div class="main-outer">

                            <article class="project_mockup" data-carousel><!--carousel-->

                                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>

                                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

                                    <ul class="slides" data-slides><!-- slider inner-->

                                        <li class='slide' data-active>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_KR_OliveOil_600.webp, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_600@4x.webp 4x" width="600" height="392" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_KR_OliveOil_500.webp, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_KR_OliveOil_408.webp, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_KR_OliveOil_300.webp, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_KR_OliveOil_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_KR_OliveOil.jpg" alt="Mockup by Olive Oil Matić">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_EN_OliveOil_600.webp, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_EN_OliveOil_500.webp, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_EN_OliveOil_408.webp, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_EN_OliveOil_300.webp, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_EN_OliveOil_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_EN_OliveOil.jpg" alt="Mockup by Olive Oil Matić">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_PL_OliveOil_600.webp, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_PL_OliveOil_500.webp, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_PL_OliveOil_408.webp, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_PL_OliveOil_300.webp, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_PL_OliveOil_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_PL_OliveOil.jpg" alt="Mockup by Olive Oil Matić">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_HR_OliveOil_600.webp, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_HR_OliveOil_500.webp, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_HR_OliveOil_408.webp, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_HR_OliveOil_300.webp, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_HR_OliveOil_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_HR_OliveOil.jpg" alt="Mockup by Olive Oil Matić">

                                            </picture>

                                        </li>

                                    </ul>

                                    <ul class="skills wp elementor">

                                        <li class="project_olive">Skills</li><li>WordPress</li><li>Elementor</li><li>Polylang</li><li>Yoast SEO</li><li>Contact Form 7</li><li>WP-Optimize</li><li>HTML</li><li>CSS</li>

                                    </ul>

                            </article> 

                            <article class="project_desc">

                                <h3>Multilingual WordPress website for an Olive Oil company</h3>

                                <p>This project contains a responsive multilingual WordPress website for an Olive Oil company created in English, Korean, Poland, and Croatian language. It's created using WordPress with Elementor and Polylang plugins.</p>

                                <p>Also, contains some other plugins such as Contact Form 7 (manage flexible contact forms), Multilingual Contact Form 7 with Polylang (Enables translation and use of the same forms in different languages of Contact Form 7 forms with Polylang), Yoast SEO (helps website perform better in search engines like Google) and WP-Optimize (cleans the database, compresses images and caches pages).</p>

                                <p>Custom CSS was used for the header and footer, as well as JavaScript for the copyright information in the footer. At the same time, an SSL certificate was installed, all traffic was redirected to https in the .htaccess file, gzip compression was used and cache memory was saved for all types of files in user browsers.</p>

                                <p><a href="https://oliveoilmatic.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    

                            </article>

                        <div><!-- end .main-outer -->

                    </section>



                    <section class="project_complete" aria-label="Project Terradium">

                        <div class="main-outer">

                            <article class="project_mockup" data-carousel><!--carousel-->

                                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>

                                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

                                    <ul class="slides" data-slides><!-- slider inner-->

                                        <li class='slide' data-active>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumResp_600.webp, https://mirnesglamocic.com/projects/mockup_terradiumResp_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumResp_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumResp_600@4x.webp 4x" width="600" height="392" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumResp_500.webp, https://mirnesglamocic.com/projects/mockup_terradiumResp_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumResp_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumResp_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumResp_408.webp, https://mirnesglamocic.com/projects/mockup_terradiumResp_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumResp_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumResp_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumResp_300.webp, https://mirnesglamocic.com/projects/mockup_terradiumResp_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumResp_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumResp_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_terradiumResp.jpg" alt="Mockup by SQL Quizzer">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumAbout_600.webp, https://mirnesglamocic.com/projects/mockup_terradiumAbout_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumAbout_500.webp, https://mirnesglamocic.com/projects/mockup_terradiumAbout_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumAbout_408.webp, https://mirnesglamocic.com/projects/mockup_terradiumAbout_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumAbout_300.webp, https://mirnesglamocic.com/projects/mockup_terradiumAbout_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumAbout_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_terradiumAbout.jpg" alt="Mockup by Terradium">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_600.webp, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_500.webp, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_408.webp, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_300.webp, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumDesign-service_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_terradiumDesign-service.jpg" alt="Mockup by Terradium">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumSolutions_600.webp, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumSolutions_500.webp, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumSolutions_408.webp, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumSolutions_300.webp, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumSolutions_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_terradiumSolutions.jpg" alt="Mockup by Terradium">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumContact_600.webp, https://mirnesglamocic.com/projects/mockup_terradiumContact_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumContact_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumContact_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumContact_500.webp, https://mirnesglamocic.com/projects/mockup_terradiumContact_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumContact_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumContact_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumContact_408.webp, https://mirnesglamocic.com/projects/mockup_terradiumContact_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumContact_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumContact_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                <source srcset="https://mirnesglamocic.com/projects/mockup_terradiumContact_300.webp, https://mirnesglamocic.com/projects/mockup_terradiumContact_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_terradiumContact_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_terradiumContact_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                <!--[if IE 9]></video><![endif]-->

                                                <img srcset="https://mirnesglamocic.com/projects/mockup_terradiumContact.jpg" alt="Mockup by Terradium">

                                            </picture>

                                        </li>

                                    </ul>

                                    <ul class="skills wp">

                                        <li class="project_wp">Skills</li><li>WordPress</li><li>Elementor</li><li>HTML</li><li>CSS</li><li>JS</li>

                                    </ul>

                            </article> 

                            <article class="project_desc">

                                <h3>WordPress site for the fictional company Terradium</h3>

                                <p>This project contains five pages with a consistent design across all pages. It's created using the Hello Elementor WordPress theme and the entire project was done using the Elementor plugin.</p>

                                <p>Various widgets are implemented on this website, such as a slideshow with background images on the home page, a carousel gallery, an image gallery, a video, an SVG mask on an image, a list of icons, a map, and a brief description of the company's offerings on each page.</p>

                                <p>Also, custom CSS was used for the header and footer, as well as JavaScript for the copyright information in the footer. At the same time, an SSL certificate was installed, all traffic was redirected to https in the .htaccess file, as well as gzip compression was used and cache memory was saved for all types of files in user browsers.</p>

                                <p><a href="https://terradium.epizy.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    

                            </article>

                        <div><!-- end .main-outer -->

                    </section>



                    <section class="project_complete" aria-label="Project Shoutbox application">

                        <div class="main-outer">

                            <article class="project_mockup" data-carousel><!--carousel-->

                                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>

                                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

                                <ul class="slides" data-slides><!-- slider inner-->

                                    <li class='slide' data-active>

                                        <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_600.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_500.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_408.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_300.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_shoutbox.jpg" alt="Mockup by shoutbox application">

                                        </picture>

                                    </li>

                                    <li class='slide'>

                                        <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_600.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_500.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_408.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_300.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_tablet_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_tablet.jpg" alt="Mockup by shoutbox application">

                                        </picture>

                                    </li>

                                    <li class='slide'>

                                    <picture>

                                        <!--[if IE 9]><video style="display: none;"><![endif]-->

                                        <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_phone_600.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_600_@4x.webp 4x" type="image/webp" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                        <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_phone_500.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_500_@4x.webp 4x" type="image/webp" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                        <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_phone_408.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_408_@4x.webp 4x" type="image/webp" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                        <source srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_phone_300.webp, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_shoutbox_phone_300_@4x.webp 4x" type="image/webp" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                        <!--[if IE 9]></video><![endif]-->

                                        <img srcset="https://mirnesglamocic.com/projects/mockup_shoutbox_phone.jpg" alt="Mockup by shoutbox application">

                                    </picture>

                                    </li>

                                </ul>

                                <ul class="skills simple">

                                        <li class="project_title">Skills</li><li>HTML</li><li>CSS</li><li>jQuery</li><li>AJAX</li><li>PHP</li><li>MySQL</li>

                                </ul>

                            </article> 

                            <article class="project_desc">

                                <h3>Shoutbox application</h3>

                                <p>This project contains a dynamic responsive Shoutbox built using PHP, MySQL, jQuery, AJAX, HTML, and CSS. So, when the user sends a name and a message, that information appears at the top of the Shoutbox along with the time the message was sent. Also, this data is entered into the database, and with the help of AJAX, it appears instantly on the page, without reloading the page.</p>

                                <p>At the same time, this form has validation, and empty data cannot be sent, with AJAX and jQuery validation plugin, the answer "Please fill in your name and message!" appears immediately when the user tries to send empty data. This was done with jQuery validate groups to display one message for all inputs, instead of each input separately.</p>

                                <p>Moreover, there are built-in some PHP functions like ucwords which work in case when the user writes his name in lowercase letters, the first letter of the user's first and last name will be capitalized, and with a function ucfirst it's capitalized the first letter of a sentence if the user wrote their message in lowercase.</p>

                                <p><a href="https://shoutbox.epizy.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    

                            </article>

                        <div><!-- end .main-outer -->

                    </section>



                    <section class="project_complete" aria-label="Project SQL Quizzer">

                        <div class="main-outer">

                            <article class="project_mockup" data-carousel><!--carousel-->

                                <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>

                                <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

                                    <ul class="slides" data-slides><!-- slider inner-->

                                        <li class='slide' data-active>

                                            <picture>

                                            <!--[if IE 9]><video style="display: none;"><![endif]-->

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_600.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_500.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_408.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                            <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_300.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerResp_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                            <!--[if IE 9]></video><![endif]-->

                                            <img srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerResp.jpg" alt="Mockup by SQL Quizzer">

                                            </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_600.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_600@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_600@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_600@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_500.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_500@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_500@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_500@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_408.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_408@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_408@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_408@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_300.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_300@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_300@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMac_300@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                    <!--[if IE 9]></video><![endif]-->

                                                    <img srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMac.jpg" alt="Mockup by SQL Quizzer">

                                                </picture>

                                        </li>

                                        <li class='slide'>

                                            <picture>

                                                    <!--[if IE 9]><video style="display: none;"><![endif]-->

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_600.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_600_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_600_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_600_@4x.webp 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_500.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_500_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_500_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_500_@4x.webp 4x" width="500" height="326" loading="lazy" media="(min-width: 520px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_408.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_408_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_408_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_408_@4x.webp 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">

                                                    <source srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_300.webp, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_300_@2x.webp 2x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_300_@3x.webp 3x, https://mirnesglamocic.com/projects/mockup_SQLquizzerMob_300_@4x.webp 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">

                                                    <!--[if IE 9]></video><![endif]-->

                                                    <img srcset="https://mirnesglamocic.com/projects/mockup_SQLquizzerMob.jpg" alt="Mockup by SQL Quizzer">

                                            </picture>

                                        </li>

                                    </ul>

                                    <ul class="skills verysimple">

                                        <li class="project_simple">Skills</li><li>HTML</li><li>CSS</li><li>PHP</li><li>MySQL</li>

                                    </ul>

                            </article> 

                            <article class="project_desc">

                                <h3>SQL Quizzer</h3>

                                <p>This project contains a dynamic responsive SQL quizzer made with PHP MySQL, HTML, and CSS. So, the quiz contains some questions by w3school where user need to choose correct answer.</p>

                                <p>There is also the possibility of adding a question, and after that, that question appears with the other questions in the quiz and is instantly inserted into the database. For adding questions there is PHP validation so blank questions can not be added. It's necessary add a question, minimum 2 choices for answer and correct answer.</p>

                                <p>There are two tables in the database, one for questions and the other for answers, and with the help of the PHP mysqli api, the entered answer is checked. Each answer has the value of one point and after all the questions the total number of points won appears. This is achieved with the help of PHP sessions, which are started during each quiz and are destroyed at the same time so that the number of points is not added up for each quiz.</p>

                                <p><a href="https://mysql-quizzer.epizy.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    

                            </article>

                        <div><!-- end .main-outer -->

                    </section>    

                </div>



                <div id="div2" class="target"><p class="future">&apos;Something really cool will coming soon!&apos;</p></div>

                <div id="div3" class="target">

                    <section class='illustrations'>

                        <article class='illustration'><a href='./illustrations/BIG/cubes.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/cubes.jpg' alt="Illustration of dynamic cubes by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of dynamic cubes created using the Line Tool, Transform, and Outer Glow Effects.</p></div></a>

                        </article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/3D-Star.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/3D-Star.jpg' alt="Illustration of 3D Star by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of a five-pointed 3D twisted woven metal star created using the Ellipse, Rectangle, Line, Rotate, and Scale tools.</p></div></a>

                        </article><!--
                        --><article class='illustration'><a href='./illustrations/BIG/ribbon.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/ribbon.jpg' alt="Illustration of Möbius strip by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of an overlapping ribbon created by a combination of hexagons, a blend of objects, the Rotate Tool, and the Live Paint Bucket.</p></div></a>

                        </article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/orange.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/orange.jpg' alt="Illustration of orange wedge by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of a single orange slice created with the Ellipse, Rectangle, Scale, and Rotate tools.</p></div></a>

                        </article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/flower_petals.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/flower_petals.jpg' alt="Illustration of flower petals by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of flower petals created using the Ellipse tool, Transform Effects, Pucker & Bloat, and Zig Zag tools.</p></div></a>

                        </article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/electron.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/electron.jpg' alt="Illustration of the atomic symbol by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Illustration of an atomic symbol created with the Ellipse tool using Effects from the Appearance panel.</p></div></a>

                        </article><!--

                        --><article class='illustration'>

                        <a href='./illustrations/BIG/ellipses.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/ellipses.jpg' alt="Illustration of multiple ellipses by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Illustration of multiple ellipses created with the Ellipse and Rectangle tools using Effects from the Appearance panel.</p></div></a></article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/honeycomb.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/honeycomb.jpg' alt="Illustration of Sheriff's badge by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of honeycomb created with Polygon Tool using a combination of Effects from Appearance panel.</p></div></a>

                        </article><!--

                        --><article class='illustration'><a href='./illustrations/BIG/sheriff.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/sheriff.jpg' alt="Illustration of Sheriff's badge by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of Sheriff's badge with a star along with a bunch of circles and a big ellipse using the Shape Builder and an inset reflection.</p></div></a>

                        </article><!--

                        --><article class='illustration'>

                            <a href='./illustrations/BIG/coil.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/coil.jpg' alt="Illustration of Coil by Mirnes Glamočić" class="blur" loading="lazy"><div class="content"><p>Illustration of a coil created with the Ellipse Tool and compound paths using the Join command.</p></div></a>

                        </article><!--

                        --><article class='illustration'>

                            <a href='./illustrations/BIG/house.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/house.jpg' alt="Illustration of Simple house by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Illustration of a simple house created using the Rectangle and Shaper tools.</p></div></a>

                        </article><!--

                    --><article class='illustration'>
                            <a href='./illustrations/BIG/factory.jpg' data-lightbox='illustrations'><img src='./illustrations/SMALL/factory.jpg' alt="Illustration of the Factory by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Illustration of the company created with the Line Segment Tool, Scissors, Arc, Rectangular Grid, Polar Grid and Spiral Tool.</p></div></a>
                        </article>

                    </section>

                </div>



                <div id="div4" class="target">
                    <section class='logos'>
                        <article class='logo'><a href='./logos/BIG/samsung.jpg' data-lightbox='logos'><img src='./logos/SMALL/samsung.jpg' alt="Samsung logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Samsung logo created using the Ellipse and Type tools, along with the Pathfinder options.</p></div></a>
                        </article><!--
                        
                        --><article class='logo'><a href='./logos/BIG/google-drive.jpg' data-lightbox='logos'><img src='./logos/SMALL/google-drive.jpg' alt="The Google Drive logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>The Google Drive Logo created using the Pollygon, Rotate, Pen, Shape Builder and Direct Selection tools along with the Pathfinder options.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/bbc.jpg' data-lightbox='logos'><img src='./logos/SMALL/bbc.jpg' alt="BBC logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>BBC logo created using the Rectangle and Type tools along with the Align options.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/recycle.jpg' data-lightbox='logos'><img src='./logos/SMALL/recycle.jpg' alt="The Recycle logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>The Recycle Logo created using the Polygon, Rectangle, Scissors, Rotate and Shape Builder tools along with the Stroke options in the Appearance panel.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/british-national-rail.jpg' data-lightbox='logos'><img src='./logos/SMALL/british-national-rail.jpg' alt="The British National Rail logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>The British National Rail logo created using the Line Segment Tool and Rectangle Tool along with the Pathfinder and Stroke options.</p></div></a>
                        </article><!--
                         
                        --><article class='logo'><a href='./logos/BIG/olympic-ring.jpg' data-lightbox='logos'><img src='./logos/SMALL/olympic-ring.jpg' alt="The Olympic Ring logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>The Olympic Ring logo created using a grid and the Ellipse Tool along with the Pathfinder options.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/frontiers.jpg' data-lightbox='logos'><img src='./logos/SMALL/frontiers.jpg' alt="Frontiers Unlimited logo of tour company by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Frontiers Unlimited Logo for tour company created using the Rectangle, Ellipse, Pen and Type tools along with the Pathfinder options.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/pixelworker-star.jpg' data-lightbox='logos'><img src='./logos/SMALL/pixelworker-star.jpg' alt="Star logo of United Pixelworkers by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Star logo by United Pixelworkers created using the Ellipse, Rotate, Scale, and Shear tools with warped gradient shadows.</p></div></a>
                        </article><!--

                        --><article class='logo'><a href='./logos/BIG/complementary-rings.jpg' data-lightbox='logos'><img src='./logos/SMALL/complementary-rings.jpg' alt="Complemtary ring logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Complemtary ring logo, created from a interwoven ring logo stitched together using the Ellipse, Rotate, and Scissors tools, along with the paths join command.</p></div></a>
                        </article><!--

                        --><article class='logo'>
                        <a href='./logos/BIG/interwoven-rings.jpg' data-lightbox='logos'><img src='./logos/SMALL/interwoven-rings.jpg' alt="The interwoven rings logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>The interwoven rings logo created from the bullseye logo using the Rotate tool, and the paths join command.</p></div></a>
                        </article><!--

                        --><article class='logo'>
                            <a href='./logos/BIG/bullseye-logo.jpg' data-lightbox='logos'><img src='./logos/SMALL/bullseye-logo.jpg' alt="Bullseye logo by Mirnes Glamočić" class="blur" loading="lazy"><div class="content fade"><p>Expertly rendered Bullseye logo created from a single @ sign using the Polargrid and Scale tools.</p></div></a>
                        </article>

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