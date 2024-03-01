<?php
	require_once 'core/init.php';
    $page_id=1;
    $result = Pages::get(1);
?>
<!DOCTYPE html>
<html itemscope lang="en">
    <?php
        $title="Mirnes Glamočić | Expert Web Developer and Web Designer";
        $meta['description']="Professional website development, UI/UX and web design services by certified IT expert from Bosnia and Herzegovina. The best of the best!";
        $og_url="https://mirnesglamocic.com";
        $og_image="https://mirnesglamocic.com/images/Mirnes_og.jpg";
        $twitter_image="https://mirnesglamocic.com/images/MirnesGlamocic.webp";
        $css = "css.min.php";
        include './inc/head.php';
    ?>
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
                    <source srcset="./images/webdev.webp, ./images/webdev@2x.webp 2x, ./images/webdev@3x.webp 3x, ./images/webdev@4x.webp 4x" type="image/webp" media="(min-width: 1261px)">
                    <source srcset="./images/webdev_1023.webp, ./images/webdev_1023@2x.webp 2x, ./images/webdev_1023@3x.webp 3x, ./images/webdev_1023@4x.webp 4x" type="image/webp" media="(min-width: 1023px)">
                    <source srcset="./images/webdev_861.webp, ./images/webdev_861@2x.webp 2x, ./images/webdev_861@3x.webp 3x, ./images/webdev_861@4x.webp 4x" type="image/webp" media="(min-width: 861px)">
                    <source srcset="./images/webdev_768.webp, ./images/webdev_768@2x.webp 2x, ./images/webdev_768@3x.webp 3x, ./images/webdev_768@4x.webp 4x" type="image/webp" media="(min-width: 768px)">
                    <!--[if IE 9]></video><![endif]-->
                    <img decoding="async" src="./images/webdev.jpg" width="310" height="310" loading="lazy" alt='Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina'>
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
                    <div id='mycert'><p>So, finally, in 2016, I decided to enroll in ITAcademy, a school for a profitable IT career in department of PHP WEB DEVELOPMENT.</p><br><p>After successfully completing that program, I was very satisfied with the education provided, and I decided to continue my education in the department of WEB DESIGN.</p><br><p>I enjoy coding and the challenge of learning something new everyday, so over time, I wanted to learn a lot more about the complete web development and design, and continued to educate myself through various web platforms, such as w3Schools, Pluralsight, Eduonix, Udemy, Educba, Shawn Academy, Cybrary and LinkedIn.</p><br> <p>Through the mentioned web platforms, I received over 1000 certificates and their number is continuously growing.</p><br><p class='no_print'>Below you can find and see some of these certificates.</p>
                    </div>
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
                <?php include_once './form_process.php';?>
                    <article id="form">
                        <?php include './inc/form.php';?>
                    </article>

                    <div id="icons">
                        <p>Feel free to connect with me...</p>
                        <div id="icon_box">
                            <?php
                                $Icons = new Icons();
                                $Icons->renderSlider();
                            ?>
                        </div><!--end #icon_box-->
                    </div><!--end #icons-->
            </div><!--end .wrapper-->
        </section> <!--contact-->
    <?php include_once './inc/footer.php';//end #footer?>
</body>
</html>