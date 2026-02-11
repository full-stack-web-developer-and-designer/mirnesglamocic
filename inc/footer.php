<?php
/**
 * footer.php
 *
 * Generates the website footer, including:
 * - "Scroll to top" button
 * - Dynamic copyright
 * - Social media links (LinkedIn, GitHub, CodePen)
 * - Print-friendly barcode of current page URL
 * - External JS libraries with local fallbacks:
 *   - jQuery
 *   - Lightbox
 *   - LightSlider
 *   - jQuery Validate
 *   - Picturefill
 *   - WebP Hero
 *   - Progressive.js
 * - Custom JS files loaded via load_js() helper
 *
 * Features:
 * - Accessibility-friendly (ARIA labels, hidden text for print)
 * - Progressive enhancement with polyfills and fallbacks
 * - Dynamic years (2016–current year)
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2016
 * Updated: 2026-02-09
 *
 * Usage:
 * Include this file at the bottom of any PHP page where the footer is needed:
 * <?php include_once __DIR__ . '/inc/footer.php'; ?>
 */

// Determine full URL for print barcode
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$url = $scheme . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// Dynamic year text
$startYear = 2016;
$currentYear = date('Y');
$yearText = ($startYear < $currentYear) ? "&copy; $startYear – $currentYear" : "&copy; $startYear";
?>

<a href="#headerTop" class="scroll-top" aria-label="Scroll to top">
    <svg class="icon icon-scroll" width="16" height="40" aria-hidden="true">
        <use xlink:href="#icon-arrow-up"></use>
    </svg>
</a>

<footer id="footer">

    <p class="no_print">
        <small>
            <span class="copyear"><?= $yearText ?></span><br>
            <a id="footerlink" href="https://mirnesglamocic.com">
                <strong>Mirnes Glamočić</strong>
            </a>
            &nbsp;•&nbsp;
            <span id="copyrighter">
                Web Developer • UI/UX & Web Designer
            </span>
        </small>
    </p>

    <div class="icons">
        <a class="social-icons" href="https://www.linkedin.com/in/mirnesglamocic"
           aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
            <svg class="icon" aria-hidden="true">
                <use href="#icon-linkedin"></use>
            </svg>
        </a>

        <a class="social-icons" href="https://github.com/full-stack-web-developer-and-designer"
           aria-label="GitHub" target="_blank" rel="noopener noreferrer">
            <svg class="icon" aria-hidden="true">
                <use href="#icon-github"></use>
            </svg>
        </a>

        <a class="social-icons" href="https://codepen.io/full-stack-web-developer-and-designer"
           aria-label="CodePen" target="_blank" rel="noopener noreferrer">
            <svg class="icon" aria-hidden="true">
                <use href="#icon-codepen"></use>
            </svg>
        </a>
    </div>

</footer>

<!-- Print barcode -->
<p class="barcode">This page was printed from: <?= htmlspecialchars($url) ?></p>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="./JS/jquery-3.6.4.min.js"><\/script>');
</script>

<!-- Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script>
    window.lightbox || document.write('<script src="./JS/lightbox.min.js"><\/script>');
</script>

<!-- Lightslider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script>
    window.lightslider || document.write('<script src="./JS/lightslider.min.js"><\/script>');
</script>

<!-- jQuery Validate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
    if (typeof jQuery.validator === 'undefined') {
        document.write('<script src="./JS/jquery.validate.min.js"><\/script>');
    }
</script>

<!-- Picturefill -->
<script>
    document.createElement("picture");
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js"></script>
<script>
    if (!window.picturefill) {
        document.write('<script src="./JS/picturefill.min.js"><\/script>');
    }
</script>

<!-- WebP Hero -->
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/polyfills.js"></script>
<script>
    if (!window.WebpMachinePolyfill) {
        document.write('<script src="./JS/webp-hero.polyfills.min.js"><\/script>');
    }
</script>

<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/webp-hero.bundle.js"></script>
<script>
    if (!window.webpHero) {
        document.write('<script src="./JS/webp-hero.bundle.min.js"><\/script>');
    }

    // Init WebP Hero after both scripts are loaded
    if (window.webpHero) {
        var webpMachine = new webpHero.WebpMachine();
        webpMachine.polyfillDocument();
    }
</script>

<!-- Progressive.js -->
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js"></script>
<script>
    if (!window.ProgressiveImage) {
        document.write('<script src="./JS/progressive-image.min.js"><\/script>');
    }
</script>

<?php
// Custom JS
$js_files = ['main.js'];
load_js($js_files);
?>