<?php
	require_once 'core/init.php';
    $page_id=1;
    $result = Pages::get(1);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $og_title="Mirnes Glamočić | Full-Stack Web Developer and Designer";
    $meta['og_description']="He is an experienced Web Developer, UI/UX and Web Designer with several years of experience in the web development and design industry.";
	$og_url="https://mirnesglamocic.com";
    $og_image="https://mirnesglamocic.com/images/Mirnes_og.jpg";
    $twitter_image="https://mirnesglamocic.com/images/MirnesGlamocic.webp";
	$og_image_alt="Full-Stack Web Developer and Desiger Mirnes Glamočić";
    $title="Mirnes Glamočić | Full-Stack Web Developer, UI/UX and Web Designer";
    $meta['description']="Mirnes Glamočić is an experienced Full-Stack Web Developer, UI/UX and Web Designer with several years of experience in the web development and design industry.";
	$meta['keywords']="web development, web developer, front-end development, frontend development, front-end developer, frontend developer, backend-development, backend development, back-end developer, backend developer, database development database developer, web design, web designer";
	include './inc/head.php';
?>
<!-- include JS mockup slider for projects -->
<script src="./JS/project_slider.min.js" defer></script>
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
                <a id="showall" href="#" aria-label="View all my projects"></a>
                <a class="project" target="1">Web sites</a> 
                <a class="project" target="2">Image editing</a> 
                <a class="project" target="3">Poster design</a> 
                <a class="project" target="4">Logo design</a>
            </div>
            <div class="taget_box">
                <div id="div1" class="target">
                    <section class="project_complete">
                        <article class="project_mockup" data-carousel><!--carousel-->
                            <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                            <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                            <ul class="slides" data-slides><!-- slider inner-->
                                 <li class='slide' data-active>
                                    <picture>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <source srcset="./projects/mockup_visit-neum_600.jpg, ./projects/mockup_visit-neum_600_@2x.jpg 2x, ./projects/mockup_visit-neum_600_@3x.jpg 3x, projects/mockup_visit-neum_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                        <source srcset="./projects/mockup_visit-neum_500.jpg, ./projects/mockup_visit-neum_500_@2x.jpg 2x, ./projects/mockup_visit-neum_500_@3x.jpg 3x, ./projects/mockup_visit-neum_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                        <source srcset="./projects/mockup_visit-neum_408.jpg, ./projects/mockup_visit-neum_408_@2x.jpg 2x, ./projects/mockup_visit-neum_408_@3x.jpg 3x, ./projects/mockup_visit-neum_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 400px)">
                                        <source srcset="./projects/mockup_visit-neum_300.jpg, ./projects/mockup_visit-neum_300_@2x.jpg 2x, ./projects/mockup_visit-neum_300_@3x.jpg 3x, ./projects/mockup_visit-neum_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                        <!--[if IE 9]></video><![endif]-->
                                        <img alt="Mockup by visit-neum.com">
                                    </picture>
                                 </li>
                                 <li class='slide'>
                                    <picture>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <source srcset="./projects/mockup_Matic_600.jpg, ./projects/mockup_Matic_600_@2x.jpg 2x, ./projects/mockup_Matic_600_@3x.jpg 3x, projects/mockup_Matic_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                        <source srcset="./projects/mockup_Matic_500.jpg, ./projects/mockup_Matic_500_@2x.jpg 2x, ./projects/mockup_Matic_500_@3x.jpg 3x, ./projects/mockup_Matic_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                        <source srcset="./projects/mockup_Matic_408.jpg, ./projects/mockup_Matic_408_@2x.jpg 2x, ./projects/mockup_Matic_408_@3x.jpg 3x, ./projects/mockup_Matic_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                        <source srcset="./projects/mockup_Matic_300.jpg, ./projects/mockup_Matic_300_@2x.jpg 2x, ./projects/mockup_Matic_300_@3x.jpg 3x, ./projects/mockup_Matic_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                        <!--[if IE 9]></video><![endif]-->
                                        <img alt="Mockup by visit-neum.com">
                                    </picture>
                                 </li>
                                 <li class='slide'>
                                 <picture>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <source srcset="./projects/mockup_Mampas_600.jpg, ./projects/mockup_Mampas_600_@2x.jpg 2x, ./projects/mockup_Mampas_600_@3x.jpg 3x, projects/mockup_Mampas_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                        <source srcset="./projects/mockup_Mampas_500.jpg, ./projects/mockup_Mampas_500_@2x.jpg 2x, ./projects/mockup_Mampas_500_@3x.jpg 3x, ./projects/mockup_Mampas_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                        <source srcset="./projects/mockup_Mampas_408.jpg, ./projects/mockup_Mampas_408_@2x.jpg 2x, ./projects/mockup_Mampas_408_@3x.jpg 3x, ./projects/mockup_Mampas_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                        <source srcset="./projects/mockup_Mampas_300.jpg, ./projects/mockup_Mampas_300_@2x.jpg 2x, ./projects/mockup_Mampas_300_@3x.jpg 3x, ./projects/mockup_Mampas_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                        <!--[if IE 9]></video><![endif]-->
                                        <img alt="Mockup by visit-neum.com">
                                    </picture>
                                 </li>
                                 <li class='slide'>
                                 <picture>
                                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                                        <source srcset="./projects/mockup_Ivana_600.jpg, ./projects/mockup_Ivana_600_@2x.jpg 2x, ./projects/mockup_Ivana_600_@3x.jpg 3x, projects/mockup_Ivana_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                        <source srcset="./projects/mockup_Ivana_500.jpg, ./projects/mockup_Ivana_500_@2x.jpg 2x, ./projects/mockup_Ivana_500_@3x.jpg 3x, ./projects/mockup_Ivana_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                        <source srcset="./projects/mockup_Ivana_408.jpg, ./projects/mockup_Ivana_408_@2x.jpg 2x, ./projects/mockup_Ivana_408_@3x.jpg 3x, ./projects/mockup_Ivana_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                        <source srcset="./projects/mockup_Ivana_300.jpg, ./projects/mockup_Ivana_300_@2x.jpg 2x, ./projects/mockup_Ivana_300_@3x.jpg 3x, ./projects/mockup_Ivana_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                        <!--[if IE 9]></video><![endif]-->
                                        <img alt="Mockup by visit-neum.com">
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
                            <h3>visit-neum.com - Tourism Website</h3>
                            <p>This project contains a complex dynamic responsive website with a complete reservation system in one city, where users can contact directly the owners of properties such as hotels, apartments, villas, rooms, restaurants, boats and car rentals, similar to the website www.booking .com.</p>
                            <p>On home page is embedded the time for the next 7 days, the value of the currency at the NLB Bank exchange rate, and with help of the LightSlider JavaScript library, object-oriented PHP and SQL function rand() the properties are displayed randomly each time when home page is opened.</p>
                            <p>Each property contains a short description, a location on a google map, an image gallery displayed with the help of the LightBox JavaScript library, and some properties also contain a video embedded by YouTube.</p>
                            <p>Also, all properties contain a contact form, which is created on a popup modal created with jQuery. At the same time, all pages contain another popup modal with contact form for contacting the site administrator.</p>
                            <p>With excellent SEO, all properties have improved the site to appear at the top of Google searches.</p>
                            <p>
                                <a href="https://visit-neum.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a>
                            </p>
                        </article>
                    </section>

                    <section class="project_complete">
                     <article class="project_mockup" data-carousel><!--carousel-->
                         <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                         <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                             <ul class="slides" data-slides><!-- slider inner-->
                             <li class='slide' data-active>
                                <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_shoutbox_600.jpg, ./projects/mockup_shoutbox_600_@2x.jpg 2x, ./projects/mockup_shoutbox_600_@3x.jpg 3x, projects/mockup_shoutbox_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_shoutbox_500.jpg, ./projects/mockup_shoutbox_500_@2x.jpg 2x, ./projects/mockup_shoutbox_500_@3x.jpg 3x, ./projects/mockup_shoutbox_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_shoutbox_408.jpg, ./projects/mockup_shoutbox_408_@2x.jpg 2x, ./projects/mockup_shoutbox_408_@3x.jpg 3x, ./projects/mockup_shoutbox_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_shoutbox_300.jpg, ./projects/mockup_shoutbox_300_@2x.jpg 2x, ./projects/mockup_shoutbox_300_@3x.jpg 3x, ./projects/mockup_shoutbox_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by shoutbox application">
                                </picture>
                                </li>
                             <li class='slide'>
                                <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_shoutbox_tablet_600.jpg, ./projects/mockup_shoutbox_tablet_600_@2x.jpg 2x, ./projects/mockup_shoutbox_tablet_600_@3x.jpg 3x, projects/mockup_shoutbox_tablet_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_shoutbox_tablet_500.jpg, ./projects/mockup_shoutbox_tablet_500_@2x.jpg 2x, ./projects/mockup_shoutbox_tablet_500_@3x.jpg 3x, ./projects/mockup_shoutbox_tablet_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_shoutbox_tablet_408.jpg, ./projects/mockup_shoutbox_tablet_408_@2x.jpg 2x, ./projects/mockup_shoutbox_tablet_408_@3x.jpg 3x, ./projects/mockup_shoutbox_tablet_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_shoutbox_tablet_300.jpg, ./projects/mockup_shoutbox_tablet_300_@2x.jpg 2x, ./projects/mockup_shoutbox_tablet_300_@3x.jpg 3x, ./projects/mockup_shoutbox_tablet_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by shoutbox application">
                                 </picture>
                                 </li>
                                 <li class='slide'>
                                 <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_shoutbox_phone_600.jpg, ./projects/mockup_shoutbox_phone_600_@2x.jpg 2x, ./projects/mockup_shoutbox_phone_600_@3x.jpg 3x, projects/mockup_shoutbox_phone_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_shoutbox_phone_500.jpg, ./projects/mockup_shoutbox_phone_500_@2x.jpg 2x, ./projects/mockup_shoutbox_phone_500_@3x.jpg 3x, ./projects/mockup_shoutbox_phone_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_shoutbox_phone_408.jpg, ./projects/mockup_shoutbox_phone_408_@2x.jpg 2x, ./projects/mockup_shoutbox_phone_408_@3x.jpg 3x, ./projects/mockup_shoutbox_phone_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_shoutbox_phone_300.jpg, ./projects/mockup_shoutbox_phone_300_@2x.jpg 2x, ./projects/mockup_shoutbox_phone_300_@3x.jpg 3x, ./projects/mockup_shoutbox_phone_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by shoutbox application">
                                 </picture>
                                 </li>
                             </ul>
                             <ul class="skills">
                                    <li class="project_title">Skills</li><li>HTML</li><li>CSS</li><li>jQuery</li><li>AJAX</li><li>PHP</li><li>MySQL</li>
                            </ul>
                        </article> 
                        <article class="project_desc">
                            <h3>Shoutbox application</h3>
                            <p>This project contains a dynamic responsive Shoutbox built using PHP, MySQL, jQuery, AJAX, HTML, and CSS. So, when the user sends a name and a message, that information appears at the top of the Shoutbox along with the time the message was sent. Also, this data is entered into the database and with the help of AJAX, it appears instantly on the page, without reloading the page.</p>
                            <p>At the same time, this form has validation, and empty data cannot be sent, and with AJAX and jQuery validation plugin, the answer "Please fill in your name and message!" appears immediately when the user tries to send empty data. This was done with jQuery validate groups to display one message for all inputs, instead of each input separately.</p>
                            <p>Moreover, there are built-in some PHP functions like ucwords which work in case when the user writes his name in lowercase letters, the first letter of the user's first and last name will be capitalized, and with a function ucfirst it's capitalized the first letter of a sentence if the user wrote their message in lowercase.</p>
                            <p><a href="http://shoutbox.epizy.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    
                        </article>
                    </section> 

                    <section class="project_complete">
                     <article class="project_mockup" data-carousel><!--carousel-->
                         <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
                         <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
                             <ul class="slides" data-slides><!-- slider inner-->
                             <li class='slide' data-active>
                             <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_SQLquizzerMac_600.jpg, ./projects/mockup_SQLquizzerMac_600_@2x.jpg 2x, ./projects/mockup_SQLquizzerMac_600_@3x.jpg 3x, projects/mockup_SQLquizzerMac_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_SQLquizzerMac_500.jpg, ./projects/mockup_SQLquizzerMac_500_@2x.jpg 2x, ./projects/mockup_SQLquizzerMac_500_@3x.jpg 3x, ./projects/mockup_SQLquizzerMac_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_SQLquizzerMac_408.jpg, ./projects/mockup_SQLquizzerMac_408_@2x.jpg 2x, ./projects/mockup_SQLquizzerMac_408_@3x.jpg 3x, ./projects/mockup_SQLquizzerMac_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_SQLquizzerMac_300.jpg, ./projects/mockup_SQLquizzerMac_300_@2x.jpg 2x, ./projects/mockup_SQLquizzerMac_300_@3x.jpg 3x, ./projects/mockup_SQLquizzerMac_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by SQL Quizzer">
                                 </picture>
                                 </li>
                                 <li class='slide'>
                                 <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_SQLquizzer_600.jpg, ./projects/mockup_SQLquizzer_600_@2x.jpg 2x, ./projects/mockup_SQLquizzer_600_@3x.jpg 3x, projects/mockup_SQLquizzer_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_SQLquizzer_500.jpg, ./projects/mockup_SQLquizzer_500_@2x.jpg 2x, ./projects/mockup_SQLquizzer_500_@3x.jpg 3x, ./projects/mockup_SQLquizzer_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_SQLquizzer_408.jpg, ./projects/mockup_SQLquizzer_408_@2x.jpg 2x, ./projects/mockup_SQLquizzer_408_@3x.jpg 3x, ./projects/mockup_SQLquizzer_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_SQLquizzer_300.jpg, ./projects/mockup_SQLquizzer_300_@2x.jpg 2x, ./projects/mockup_SQLquizzer_300_@3x.jpg 3x, ./projects/mockup_SQLquizzer_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by SQL Quizzer">
                                 </picture>
                                 </li>
                                 <li class='slide'>
                                 <picture>
                                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                                    <source srcset="./projects/mockup_SQLquizzerComp_600.jpg, ./projects/mockup_SQLquizzerComp_600_@2x.jpg 2x, ./projects/mockup_SQLquizzerComp_600_@3x.jpg 3x, projects/mockup_SQLquizzerComp_600_@4x.jpg 4x" width="600" height="391" loading="lazy" media="(min-width: 600px)">
                                    <source srcset="./projects/mockup_SQLquizzerComp_500.jpg, ./projects/mockup_SQLquizzerComp_500_@2x.jpg 2x, ./projects/mockup_SQLquizzerComp_500_@3x.jpg 3x, ./projects/mockup_SQLquizzerComp_500_@4x.jpg 4x" width="500" height="326" loading="lazy" media="(min-width: 500px)">
                                    <source srcset="./projects/mockup_SQLquizzerComp_408.jpg, ./projects/mockup_SQLquizzerComp_408_@2x.jpg 2x, ./projects/mockup_SQLquizzerComp_408_@3x.jpg 3x, ./projects/mockup_SQLquizzerComp_408_@4x.jpg 4x" width="408" height="266" loading="lazy" media="(min-width: 408px)">
                                    <source srcset="./projects/mockup_SQLquizzerComp_300.jpg, ./projects/mockup_SQLquizzerComp_300_@2x.jpg 2x, ./projects/mockup_SQLquizzerComp_300_@3x.jpg 3x, ./projects/mockup_SQLquizzerComp_300_@4x.jpg 4x" width="300" height="196" loading="lazy" media="(min-width: 100px)">
                                    <!--[if IE 9]></video><![endif]-->
                                    <img alt="Mockup by SQL Quizzer">
                                 </picture>
                                 </li>
                             </ul>
                             <ul class="skills simple">
                             <li class="project_simple">Skills</li><li>HTML</li><li>CSS</li><li>PHP</li><li>MySQL</li>
                            </ul>
                        </article> 
                        <article class="project_desc">
                            <h3>SQL Quizzer</h3>
                            <p>This project contains a dynamic responsive SQL quizzer made with PHP MySQL, HTML, and CSS. So, quizz contain some questions by w3school where user need to choose correct answer.</p>
                            <p>There is also the possibility of adding a question, and after that that question appears with the other questions in the quizz, and is instantly inserted into the database. For adding questions there is PHP validation so blank questions can not be added. It's necessary add a question, minimum 2 choices for answer and correct answer.</p>
                            <p>There are two tables in the database, one for questions and the other for answers, and with the help of the PHP mysqli api, the entered answer is checked. Each answer has the value of one point and after all the questions the total number of points won appears. This is achieved with the help of PHP sessions, which are started during each quiz and are destroyed at the same time so that the number of points is not added up for each quiz.</p>
                            <p><a href="http://mysql-quizzer.epizy.com/" target="_blank" class="button view_project" >VIEW PROJECT &raquo;</a></p>    
                            </article>
                        </section>   
                </div>

                
                
                <div id="div2" class="target"><p class="future">&apos;Something really cool will coming soon!&apos;</p></div>
                <div id="div3" class="target"><p class="future">&apos;Something really cool will coming soon!&apos;</p></div>
                <div id="div4" class="target"><p class="future">&apos;Something really cool will coming soon!&apos;</p></div>
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
<script src='./JS/slider.js'></script>
<script>
   jQuery(document).ready(function(){jQuery(function(){jQuery("#showall").click(function(){jQuery(".target").show()}),jQuery(".project").click(function(){jQuery(".target").hide(),jQuery("#div"+jQuery(this).attr("target")).show()})})});
</script>
<script src="./JS/lazyloading.min.js"></script>
</body>