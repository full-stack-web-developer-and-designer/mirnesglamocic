<a href="#" name="Scroll-to-top" aria-label="Scroll to top" class="scroll-top"><i class="fa fa-arrow-up"></i></a>
<?php $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p class='no_print'><small><span class='copyear'>&copy; Copyright $startYear &ndash; $currentYear" . "</span><span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'>Mirnes Glamočić</a><span class='footer_comma'>,</span><span class='footer_none'> | </span><span id='copyrighter'>Web Developer, UI/UX and Web Designer</span></small></p>";
	} else {
		return "<p class='no_print'><small><span class='copyear'>&copy; Copyright $startYear" . "</span><span class='footer_comma'>,</span><span class='footer_none'> | </span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'>Mirnes Glamočić</a><span class='footer_comma'>,</span><span class='footer_none'> | </span><span id='copyrighter'>Web Developer, UI/UX and Web Designer</span></small></p>";
	}
}
echo copyright(2023);
?>
</footer>
<!-- print barcode -->
<?php echo "<p class=\"barcode\">This page was printed from: ".$url;?></p>
<!-- responsive navigation -->
<script>
var navigation=$.noConflict();navigation(document).ready(function(n){var e=n("#respmenu"),i=n("#nav>ul");n(e).on("click",function(n){n.preventDefault(),i.toggleClass("open")}),n(window).resize(function(){n(window).width()>768&&i.is(":hidden")&&i.removeAttr("style")})});
</script>
<!-- lightslider js-->
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jquery-1.9.1.min.js'><\/script>");
</script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/lightslider.min.js'><\/script>");
</script>
<!--jQuery validate plugin -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jquery.validate.min.js'><\/script>");
</script>
<script src="./lightbox2/src/js/lightbox.min.js"></script>
<script src='./JS/slider.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>
<script src="./JS/lazyloading.min.js"></script>