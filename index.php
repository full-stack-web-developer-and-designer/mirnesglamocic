<?php
declare(strict_types=1);

require_once __DIR__ . '/core/init.php';
require_once __DIR__ . '/inc/helpers.php';

$head = Head::get(1);
$page = Pages::get(1);

?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">
    
    <?php echo $head->renderHead(); ?>

    <body id="home">

        <?php require_once BASE_PATH . '/inc/header.php'; ?>

        <!-- Hero -->
        <article id="hero" class="lazy">
            <div class="wrapper">
                <?= $page->renderPage() ?>
            </div>
        </article>

        <!-- About Me Section -->
        <section id="aboutme">
            <div class="wrapper">
                
                <picture class="imgLeft">
                    <source srcset="./images/webdev.webp, ./images/webdev@2x.webp 2x" type="image/webp" media="(min-width: 1261px)">
                    <source srcset="./images/webdev_1023.webp, ./images/webdev_1023@2x.webp 2x" type="image/webp" media="(min-width: 1023px)">
                    <source srcset="./images/webdev_861.webp, ./images/webdev_861@2x.webp 2x" type="image/webp" media="(min-width: 861px)">
                    <source srcset="./images/webdev_768.webp, ./images/webdev_768@2x.webp 2x" type="image/webp" media="(min-width: 768px)">
                    <img decoding="async" src="./images/webdev.jpg" width="310" height="310" loading="lazy" alt="Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina">
                </picture>

                <div class="about-content">
                    <h2>About Me</h2>
                    <div class="aboutme-text">
                        <p><?= e("I'm Mirnes Glamočić and I was born in Jajce, Bosnia and Herzegovina, where I currently live. Over the last 15 years, I've moved over 30 times across 6 countries—I love traveling!") ?></p>
                        <p><?= e("I'm a dedicated full-stack web developer and designer focused on creating clean, modern, and performance-driven websites. I build intuitive UIs, stable backend solutions, and functional digital tools using best practices, responsive design, and optimized workflows.") ?></p>
                        <p><?= e("I combine strong frontend skills with solid backend logic to deliver projects that are visually appealing, secure, and technically reliable.") ?></p>
                        <p><?= e("I take pride in writing maintainable code, optimizing performance, and ensuring projects are structured, scalable, and user-friendly. I continuously explore new technologies and improve my skillset.") ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quotes -->
        <article id="about" class="lazy white">
            <div class="wrapper">
                
                <div id="quotes">
                    <h2>My Favorite Quotes</h2>
                    <p><?= e("If you really want to do something, you'll find a way. If you don't, you'll find an excuse. - Pablo Picasso") ?></p>
                    <p><?= e("Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi") ?></p>
                    <p><?= e("Choose a job you love, and you will never have to work a day in your life. - Confucius") ?></p>
                </div>

            </div>
        </article>

        <!-- Certificates Section -->
        <section id="certificates" aria-label="Certificates of ITAcademy">
            <div class="wrapper">

                <header class="cert-container">

                        <h2>Certificates</h2>

                        <div class="cert-center">
                            <div class="text-before-images">
                                <p><?= e("However, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.") ?></p>
                                <p><?= e("After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.") ?></p>
                            </div>

                            <div class="cert-images">                    
                                <?php
                                    $ita = new ITA();
                                    $ita->renderCertificates();
                                ?>  
                            </div>

                            <div class='text-after-images'>
                                <p><?= e("I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.") ?></p>  <p class='text-after-images'><?= e("Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.") ?></p>
                                <p class='text-after-images no_print'><?= e("Below you can find and see some of these certificates.") ?></p>
                            </div>

                        </div>

                </header>

            </div>
        </section>

        <!-- LinkedIn / Other Certificates -->
        <section id="linkedin" aria-label="Certificates of LinkedIn, SoloLearn and Pluralsight">
            
            <div class="wrapper">
                
                <?php
                    $certDesc = new CertDesc();
                    $certDesc->renderDescription();
                ?>

            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" aria-labelledby="skills-title">

                <div class="wrapper">

                    <h2 id="skills-title">Skills</h2>

                        <?php
                            $skills = new Skills();
                            $skills->renderSkills();
                        ?>

                </div>
                
        </section>

        <!-- Services Section -->
        <section id="services"  aria-labelledby="services-title">
            <div class="wrapper">
                <h2 id="services-title">Services</h2>
                    
                    <h3 id="service">Best solutions for your business</h3>
                        
                        <div class="services-grid">
                                <?php
                                    $services = new Services();
                                    $services->renderServices();
                                ?>
                        </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" aria-labelledby="contact-heading">
            <div class="wrapper">

                <h2 id="contact-heading">Contact</h2>
                <div class="contact-main">
                    <p id="contact_offer">
                        Open to full-time, remote, or contract opportunities.
                        Let’s discuss how I can contribute to your team.
                    </p>

                    <?php include_once __DIR__ . '/form_process.php'; ?>

                    <div id="contact-form">
                        <?php include_once __DIR__ . '/inc/form.php'; ?>
                    </div>
                </div>

                <div id="support">
                    <h3>Feel free to support me</h3>
                    <p><?= e("If my projects have been helpful or inspiring, consider supporting my work. Every contribution means a lot and helps me keep creating.") ?></p>

                    <div class="support-links">
                        <?php
                            $supports = Support::getAll();
                            foreach ($supports as $support) {
                                echo $support->renderSupport();
                            }
                        ?>
                    </div>
                </div>

            </div>
        </section>


        <?php require_once BASE_PATH . '/inc/footer.php'; ?>

    </body>

</html>