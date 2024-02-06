<?php
	require_once 'core/init.php';
    $page_id=1;
    $result = Pages::get(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title="Mirnes Glamočić | Expert Web Developer and Web Designer";
        $meta['description']="Professional website development, UI/UX and web design services by certified IT expert from Bosnia and Herzegovina. The best of the best!";
        $og_url="https://mirnesglamocic.com";
        $og_image="https://mirnesglamocic.com/images/Mirnes_og.jpg";
        $twitter_image="https://mirnesglamocic.com/images/MirnesGlamocic.webp";
        $css = "css.min.php";
        include './inc/head.php';
    ?>
</head>
<body id="home">
    <?php include 'inc/header.php';?>
        <article id='hero' class='lazy'>
            <div class='wrapper'><h1 class='white'>Web Development, UI/UX and Web Design</h1></div>
        </article>

        <article id='aboutme'>
            <div class='wrapper'>
                <h2>About me</h2>
                <picture class="imgLeft">
                <!--[if IE 9]><video style='display: none;'><![endif]-->
                    <source srcset="./images/webdev.webp, ./images/webdev@2x.webp 2x, ./images/webdev@3x.webp 3x, ./images/webdev@4x.webp 4x" type="image/webp" width="310" height="310" loading="lazy" media="(min-width: 1261px)">
                    <source srcset="./images/webdev_1023.webp, ./images/webdev_1023@2x.webp 2x, ./images/webdev_1023@3x.webp 3x, ./images/webdev_1023@4x.webp 4x" type="image/webp" width="250" height="250" loading="lazy" media="(min-width: 1023px)">
                    <source srcset="./images/webdev_861.webp, ./images/webdev_861@2x.webp 2x, ./images/webdev_861@3x.webp 3x, ./images/webdev_861@4x.webp 4x" type="image/webp" width="200" height="200" loading="lazy" media="(min-width: 861px)">
                    <source srcset="./images/webdev_768.webp, ./images/webdev_768@2x.webp 2x, ./images/webdev_768@3x.webp 3x, ./images/webdev_768@4x.webp 4x" type="image/webp" width="150" height="150" loading="lazy" media="(min-width: 768px)">
                    <!--[if IE 9]></video><![endif]-->
                    <img decoding="async" srcset="./images/webdev.jpg" width="310" height="310" loading="lazy" alt='Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina'>
                </picture>
        
        <p>Hello there!</p><p>I&apos;m Mirnes and I was born in a small town in Bosnia and Herzegovina (Jajce), where I currently lives, although I&apos;ve moved over 30 times over 6 countries in the last 15 years (if you can&apos;t tell, I love to travel!).</p><p>I&apos;m a passionate, dedicated, effective and creative Web Developer, UI/UX and Web Designer with several years of experience in the web development and design industry and with a passion for clean design, standards-based code and open-source software.</p><p>I'm lifelong learner and I'm happiest when I'm creating, learning, exploring and thinking about how to make things better.</p><p>I have skills to convert any idea into a real working app. So let me know your idea, and I would come up with a great plan to make it live.</p><p>In addition to my love of technology and design, I am also interested in education.</p></div></article>
        <article id='about' class='lazy white'><div class='wrapper'>
        <div id='quotes'>
            <h2>My favorite quotes</h2><p>If you really want to do something you&apos;ll find a way. If you don&apos;t, you&apos;ll find an excuse. - <em>Pablo Picasso</em></p><br class='none'><p>Live as if you were to die tomorrow. Learn as if you were to live forever. ―<em>Mahatma Gandhi</em></p><br class='none'><p>”Choose a job you love, and you will never have to work a day in your life.” -<em>Confucius</em></div></div>
        </article>

        <section id="certificates" aria-label="Certificates of ITAcademy by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <div class="wrapper">
                <header>
                    <h2>Certificates</h2>  
                        <?php
                            $ITA = new ITA();
                            $ITA->renderSlider();
                        ?>
                    <article id='mycert'><p>So, finally, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.</p><br><p>After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.</p><br><p>I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.</p><br> <p>Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.</p><br><p class='no_print'>Below you can find and see some of these certificates.</p>
                    </article>
                </header>
            </div>
        </section><!--end #certificates-->

        <section id="LinkedIn" aria-label="Certificates of LinkedIn, soloLearn and Pluralsight by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
            <div class="wrapper">
                <?php
                    $CertDesc = new CertDesc();
                    $CertDesc->renderSlider();
                ?>
            </div><!--end .wrapper-->
        </section><!--end #LinkedIn-->

        <section id="skills" aria-label="Skills">
            <div class="wrapper">
                <h2>Skills</h2> 
                <?php
                    $Skills = new Skills();
                    $Skills->renderSlider();
                ?>
            </div><!--end .wrapper-->
        </section><!--end #skills-->

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
                <?php include_once './classes/Form_process.class.php';?>
                    <article id="form">
                        <?php include './inc/form.php';?>
                    </article>

                    <article id="icons">
                        <p>Feel free to connect with me...</p>
                            <article id="icon_box">
                                
                                <span class="icon_box">
                                    <a class='social-icon' href="https://www.linkedin.com/in/mirnesglamocic" aria-label="visit my LinkedIn profile" target="_blank">
                                        <svg class="contact_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path id="linkedin-contact" fill="#FFFFFF" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>   
                                </span>
                                <span class="icon_box">
                                    <a class='social-icon' href="https://github.com/Full-Stack-Web-Developer-and-Designer" aria-label="visit my GitHub profile" target="_blank">
                                        <svg class="contact_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path id="github-contact" fill="#FFFFFF" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                                    </a>
                                </span>
                                <span class="icon_box">
                                    <a class='social-icon' href="https://twitter.com/mirnesglamocic" aria-label="visit my Twitter profile" target="_blank">
                                        <svg class="contact_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FFFFFF" id="twitter-contact" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                    </a>
                                </span>

                            </article><!--end #icon_box-->
                    </article><!--end #icons-->
            </div><!--end .wrapper-->
        </section> <!--contact-->
    <?php include_once './inc/footer.php';//end #footer?>
</body>
</html>