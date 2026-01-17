<?php

require_once __DIR__ . '/core/init.php';
require_once __DIR__ . '/inc/helpers.php';
require_once __DIR__ . '/inc/routes.php';

$head = Head::get(1);
$page = Pages::get(1);

// Get slug from URL, e.g. example.com/frontendcertifikates
$slug = $_GET['slug'] ?? null;

if ($slug === null) {
    // No slug provided → show index page content
    // include 'index.php'; or just continue rendering index
} elseif (!isset($map[$slug])) {
    // Slug not found → show 404
    http_response_code(404);
    require __DIR__ . '/404.php';
    exit;
} else {
    // Slug found → load corresponding page
    require $map[$slug];
    exit;
}
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">
    
    <?php echo $head->renderHead(); ?>

    <body id="home">

        <?php require_once BASE_PATH . '/inc/header.php'; ?>

        <article id='hero' class='lazy'>
            <div class='wrapper'>
                <?php echo $page->renderPage(); ?>
            </div>
        </article>

        <section id='aboutme'>
            <div class='wrapper'>
                <h2>About me</h2>
                <picture class="imgLeft">
                    <source srcset="./images/webdev.webp, ./images/webdev@2x.webp 2x" type="image/webp" media="(min-width: 1261px)">
                    <source srcset="./images/webdev_1023.webp, ./images/webdev_1023@2x.webp 2x" type="image/webp" media="(min-width: 1023px)">
                    <source srcset="./images/webdev_861.webp, ./images/webdev_861@2x.webp 2x" type="image/webp" media="(min-width: 861px)">
                    <source srcset="./images/webdev_768.webp, ./images/webdev_768@2x.webp 2x" type="image/webp" media="(min-width: 768px)">
                    <img decoding="async" src="./images/webdev.jpg" width="310" height="310" loading="lazy" alt='Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina'>
                </picture>
                <p>I&apos;m Mirnes Glamočić and I was born in a small town in Bosnia and Herzegovina (Jajce), where I currently live, although I&apos;ve moved over 30 times over 6 countries in the last 15 years (if you can&apos;t tell, I love to travel!).</p>
                <p>I&apos;m a dedicated full-stack web developer and designer with a strong focus on creating clean, modern, and performance-driven websites. I build intuitive user interfaces, stable backend solutions, and highly functional digital tools using best practices, responsive design, and optimized workflows. With a passion for problem-solving and continuous learning, I enjoy transforming ideas into polished, real-world solutions.</p>
                <p>Combining strong frontend skills with solid backend logic, I deliver projects that are visually appealing, secure, and technically reliable.</p>
                <p>I take pride in writing clean, maintainable code, optimizing performance, and ensuring every project is built with structure, scalability, and user experience in mind. I&apos;m always exploring new technologies, improving my workflow, and expanding my skill set to stay ahead in the constantly evolving world of web development.</p>
            </div>
        </section><!-- end #aboutme -->

        <article id='about' class='lazy white'>
            <div class='wrapper'>
                <div id='quotes'>
                    <h2>My favorite quotes</h2>
                        <p>If you really want to do something you&apos;ll find a way. If you don&apos;t, you&apos;ll find an excuse. - <em>Pablo Picasso</em></p>
                        <br class='none'>
                        <p>Live as if you were to die tomorrow. Learn as if you were to live forever. ―<em>Mahatma Gandhi</em></p>
                        <br class='none'><p>”Choose a job you love, and you will never have to work a day in your life.” -<em>Confucius</em></p>
                </div>
            </div>
        </article>

        <section id="certificates" aria-label="Certificates of ITAcademy">
            <div class="wrapper">
                <header>
                    
                    <div class="cert-images">
                        <?php
                            $ita = new ITA();
                            $ita->renderCertificates();
                        ?>
                    
                        <!-- CENTER TEXT -->
                        <div class="cert-text">
                            <h2>Certificates</h2>
                    
                            <div id='mycert'>
                                
                                    <p>However, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.</p>
                                    <p>After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.</p>
                                    <p>I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.</p>  <p>Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.</p>
                                    <p class='no_print'>Below you can find and see some of these certificates.</p>
                                
                            </div><!-- end #mycert -->

                        </div><!-- end .cert-text -->

                    </div><!-- end .cert-images -->

                </header>

            </div><!-- end .wrapper -->
        </section><!--end #certificates-->

        <section id="LinkedIn" aria-label="Certificates of LinkedIn, SoloLearn and Pluralsight">
            <div class="wrapper">
                <?php
                    $certDesc = new CertDesc();
                    $certDesc->renderCertDesc();
                ?>
            </div><!--end .wrapper-->
        </section><!--end #LinkedIn-->
       
        <section id="skills" aria-label="Skills of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <div class="wrapper">
                <h2>Skills</h2> 
                    <?php
                        $skills = new Skills();
                        $skills->renderSkills();
                    ?>
            </div><!--end .wrapper-->
        </section><!--end #skills-->

        <!--Services-->
        <section id="services" aria-label="IT Services of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <div class="wrapper">
                <h2>Services</h2>
                    <h3 id="service">Best solutions for your business</h3>
                        <div class="services-grid">
                            <?php
                                $services = new Services();
                                $services->renderServices();
                            ?>
                        </div>
            </div><!-- end .wrapper-->
        </section><!-- end #services-->

        <section id="contact" aria-label="Contact of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <div class="wrapper">
                <?php include_once './form_process.php';?>
                <article id="form">
                        <?php include_once './inc/form.php';?>
                </article>
                
                <div id="support">

                    <h3>Feel free to support me</h3>
                    <p>If my projects have been helpful or inspiring, consider supporting my work. Every contribution means a lot and helps me keep creating.</p>                    
                    <div id="icon_box">
                        <?php
                            $supports = Support::getAll();
                            foreach ($supports as $support) {
                                echo $support->render();
                            }
                        ?>
                    </div><!--end #icon_box-->

                </div><!--end #support-->

            </div><!--end .wrapper-->
        </section> <!--contact-->

        <?php require_once BASE_PATH . '/inc/footer.php'; //end #footer?>

    </body>

</html>