<a href="#headerTop" class="scroll-top" aria-label="Scroll to top">
  <svg class="icon icon-scroll" width="16" height="40" aria-hidden="true">
    <use href="#icon-arrow-up"></use>
  </svg>
</a>
<?php $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php
	$startYear = 2016;
	$currentYear = date('Y');
	$yearText = ($startYear < $currentYear)
		? "&copy; $startYear – $currentYear"
		: "&copy; $startYear";
?>
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
       aria-label="LinkedIn" target="_blank" rel="noopener">
      <svg class="icon" aria-hidden="true">
        <use href="#icon-linkedin"></use>
      </svg>
    </a>

    <a class="social-icons" href="https://github.com/full-stack-web-developer-and-designer"
       aria-label="GitHub" target="_blank" rel="noopener">
      <svg class="icon" aria-hidden="true">
        <use href="#icon-github"></use>
      </svg>
    </a>

    <a class="social-icons" href="https://codepen.io/full-stack-web-developer-and-designer"
       aria-label="CodePen" target="_blank" rel="noopener">
      <svg class="icon" aria-hidden="true">
        <use href="#icon-codepen"></use>
      </svg>
    </a>
  </div>

</footer>
<!-- print barcode -->
<?php echo "<p class=\"barcode\">This page was printed from: ".$url;?></p>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  window.jQuery || document.write('<script src="./JS/jquery-3.6.4.min.js"><\/script>');
</script>

<!-- Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!-- Lightslider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

<!-- jQuery Validate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<!-- Picturefill -->
<script>
    document.createElement("picture");
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js"></script>

<!-- WebP Hero -->
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/polyfills.js"></script>
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/webp-hero.bundle.js"></script>
<script>
    var webpMachine = new webpHero.WebpMachine();
    webpMachine.polyfillDocument();
</script>

<!-- Progressive.js -->
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js"></script>

<!-- Custom scripts -->
<script src="/JS/slider.min.js" defer></script>
<script src="/JS/lazyloading.min.js" defer></script>
<script src="/JS/projects-menu.js" defer></script>
<script>
jQuery(function ($) {

    var respmenu = $('#respmenu');
    var menu = $('#nav .menu');

    respmenu.on('click', function (e) {
        e.preventDefault();
        menu.toggleClass('is-open');
    });

    $(window).on('resize', function () {
        if ($(window).width() > 768) {
            menu.removeClass('is-open');
        }
    });

});
</script>

