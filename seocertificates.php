<?php
declare(strict_types=1);

    /**
     * seocertificates.php
     *
     * Displays SEO certificate sections with sliders.
     * Uses the Slider class to render grouped certificate galleries.
     *
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     */

    require_once __DIR__ . '/core/init.php';
    require_once __DIR__ . '/inc/helpers.php';
    
    $page_id = 9;
    $head = Head::get($page_id);
    $page = Pages::get($page_id);

	$slider = new Slider();
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

	<?php echo $head->renderHead(); ?>

	<body>

		<?php require_once BASE_PATH . '/inc/header.php'; ?>
        <main>

            <div class="wrapper">

                <?php echo $page->renderPage(); ?>

                <?php

                    $slider->renderSection(
                        'LinkedIn SEO Certificates',
                        'seo'
                    );

                ?>
                
            </div><!--end .wrapper-->

        </main>

		<?php require_once BASE_PATH . '/inc/footer.php'; ?>

		<?php
            // Custom JS
            $js_files = ['cert-slider.js'];
            load_js($js_files);
        ?>

	</body>

</html>