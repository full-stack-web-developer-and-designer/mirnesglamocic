<?php
    require_once __DIR__ . '/core/init.php';
    $head = Head::get(14);
    $page_id = 14;
    $page = Pages::get(14);
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

    <?php echo $head->renderHead(); ?>

    <body>

        <?php require_once BASE_PATH . '/inc/header.php'; ?>

        <div class="wrapper">

            <section id="projects" aria-label="Web design and web development projects by Mirnes Glamočić">

                <?php echo $page->renderPage(); ?>

                <article id="intro">
                    <p> Here are a few things I'm working on presently and some from the past. 
                        To learn more, check out my 
                        <a href="https://www.linkedin.com/in/mirnesglamocic" target="_blank" rel="noopener noreferrer">LinkedIn</a> profile.
                    </p>
                </article>

                <!-- Main Menu -->
                <div class="menu" role="tablist" aria-label="Project categories">
                    <button id="tab-div1" class="project" role="tab" aria-selected="true" aria-controls="div1" tabindex="0" data-target="div1">Web sites</button>
                    <button id="tab-div2" class="project" role="tab" aria-selected="false" aria-controls="div2" tabindex="-1" data-target="div2">Image editing</button>
                    <button id="tab-div3" class="project" role="tab" aria-selected="false" aria-controls="div3" tabindex="-1" data-target="div3">Illustrations</button>
                    <button id="tab-div4" class="project" role="tab" aria-selected="false" aria-controls="div4" tabindex="-1" data-target="div4">Logo design</button>
                </div>

                <!-- Main Targets -->
                <div class="target-box">

                    <!-- Websites Main Target -->
                    <section id="div1" class="target" role="tabpanel" aria-labelledby="tab-div1">
                        <!-- Nested Menu -->
                        <div class="menu nested-menu" role="tablist" aria-label="Website project types">
                            <button id="tab-div5" class="project nested" role="tab" aria-selected="true" aria-controls="div5" tabindex="0" data-target="div5">Featured Apps</button>
                            <button id="tab-div6" class="project nested" role="tab" aria-selected="false" aria-controls="div6" tabindex="-1" data-target="div6">Fullstack Apps</button>
                            <button id="tab-div7" class="project nested" role="tab" aria-selected="false" aria-controls="div7" tabindex="-1" data-target="div7">Mini Apps</button>
                            <button id="tab-div8" class="project nested" role="tab" aria-selected="false" aria-controls="div8"  tabindex="-1" data-target="div8">WordPress Apps</button>
                        </div>

                        <!-- Main Websites Section (visible on page load) -->
                        <section id="websites" class="nested-target" style="display:block;">
                            <?php
                                // All websites
                                WebsiteRenderer::render(WebsiteProject::fetch());
                            ?>
                        </section>
                        <!-- Nested Targets -->
                        <section id="div5" class="nested-target" role="tabpanel" aria-labelledby="tab-div5">
                            <?php 
                                // Featured apps
                                WebsiteRenderer::render(WebsiteProject::fetch(['featured']));
                            ?>
                        </section>
                        <section id="div6" class="nested-target" role="tabpanel" aria-labelledby="tab-div6">
                            <?php 
                               // Fullstack apps
                                WebsiteRenderer::render(WebsiteProject::fetch(['fullstack']));
                            ?>
                        </section>
                        <section id="div7" class="nested-target" role="tabpanel" aria-labelledby="tab-div7">
                            <?php 
                               // Mini apps
                                WebsiteRenderer::render(WebsiteProject::fetch(['mini']));
                            ?>
                        </section>
                        <section id="div8" class="nested-target" role="tabpanel" aria-labelledby="tab-div8">
                            <?php 
                            // WordPress apps
                                WebsiteRenderer::render(WebsiteProject::fetch(['wordpress']));
 ?>
                        </section>
                    </section>

                    <!-- Other Main Targets -->
                    <section id="div2" class="target" role="tabpanel" aria-labelledby="tab-div2" style="display:none;">
                        <section id="photoshops"><?php Photoshop::render();
 ?></section>
                    </section>

                    <section id="div3" class="target" role="tabpanel" aria-labelledby="tab-div3" style="display:none;">
                        <section id="illustrations"><?php Illustrations::renderSlider(); ?></section>
                    </section>

                    <section id="div4" class="target" role="tabpanel" aria-labelledby="tab-div4" style="display:none;">
                        <section id="logos"><?php Logos::renderSlider(); ?></section>
                    </section>
                </div>
            
        </div><!-- .wrapper -->

        <?php require_once BASE_PATH . '/inc/footer.php'; //end #footer?>

    </body>
    
</html>