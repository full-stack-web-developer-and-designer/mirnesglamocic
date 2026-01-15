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

<!-- Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js"></script>
<script src="./lightbox2/src/js/lightbox.min.js"></script>
<script src="./JS/slider.min.js"></script>
<script src="./JS/lazyloading.min.js"></script>
<!-- PROJECT MENU SCRIPT -->
<script src="./JS/projects-menu.js"></script>
<!-- Responsive Navigation -->
<script>
jQuery(function($) {
    const e = $("#respmenu"),
          i = $("#nav>ul");

    e.on("click", function(event) {
        event.preventDefault();
        i.toggleClass("open");
    });
});
</script>