<?php
declare(strict_types=1);

require_once __DIR__ . '/core/init.php';
require_once __DIR__ . '/inc/helpers.php';

$page_id = 1;
$head = Head::get($page_id);
$page = Pages::get($page_id);

// -------------------------------
// Fetch Certificates section content
// -------------------------------
Entity::init(); // make sure PDO is initialized
$certContent = SectionContent::getSection($page_id, 'certificates');
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">
    
    <?php echo $head->renderHead(); ?>

    <body id="home">

        <?php require_once BASE_PATH . '/inc/header.php'; ?>
        <main>
            <!-- Hero -->
            <article id="hero" class="lazy">
                <div class="wrapper">

                    <?= $page->renderPage() ?>

                    <p>I build responsive, SEO-ready business websites that convert visitors into customers</p>
                    <div class="cta-buttons">
                        <a href="#contact">🚀 Contact Me</a>
                        <a href="projects">📁 View My Projects</a>
                    </div>
                    
                </div>
                
            </article>

            <!-- About Me Section -->
            <section id="aboutme">
                <?php
                    $about = AboutMe::getByPage(1);
                    if ($about) {
                        $about->render();
                    }
                ?>
            </section>

            <!-- Quotes -->
            <article id="about" class="lazy white">
                <div class="wrapper">
                    
                    <section id="quotes">
                        <h2>My Favorite Quotes</h2>
                        <?php Quotes::render($page_id); ?>
                    </section>

                </div>
            </article>

            <!-- Certificates Section -->
            <section id="certificates" aria-label="Certificates of ITAcademy">
                <div class="wrapper">
                    <header class="cert-container">
                        <h2>Certificates</h2> <!-- hardcoded -->
                        <div class="cert-center">

                            <div class="text-before-images">
                                <?php foreach ($certContent['before_images'] ?? [] as $p): ?>
                                    <p><?= e($p) ?></p>
                                <?php endforeach; ?>
                            </div>

                            <div class="cert-images">
                                <?php
                                    $ita = ITA::get($page_id);
                                    $ita->renderCertificates();
                                ?>
                            </div>

                            <div class="text-after-images">
                                <?php foreach ($certContent['after_images'] ?? [] as $p): ?>
                                    <p><?= e($p) ?></p>
                                <?php endforeach; ?>
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
                        <h3>Let’s Work on Your Project Together</h3>
                    
                        <p class="contact-intro">
                            Have an idea or project you’d like to build? 
                            Send me the details and I’ll respond within <strong>24 hours</strong> 
                            to discuss the best solution for your needs.
                        </p>

                        <div id="contact-form">
                            <?php require_once BASE_PATH . '/inc/form.php'; ?>
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

        </main>
        <?php require_once BASE_PATH . '/inc/footer.php'; ?>
        <?php
            // Custom JS
            $js_files = ['form-focus.js', 'validate_me.js'];
            load_js($js_files);
        ?>
    </body>

</html>