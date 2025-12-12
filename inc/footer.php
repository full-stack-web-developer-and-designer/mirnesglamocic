<a href="#headerTop" aria-label="Scroll to top" class="scroll-top"><svg id="scroll-top" xmlns="http://www.w3.org/2000/svg" width="16.5px" height="40px" viewBox="0 0 384 512"><path fill="#fff" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg></a>
<?php $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p class='no_print'><small><span class='copyear'>&copy; $startYear &ndash; $currentYear" . "</span><span class='footer_comma'>,</span><span class='footer_none'> | 
		</span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'>Mirnes Glamočić</a><span class='footer_comma'>,</span><span class='footer_none'> | </span><span id='copyrighter'>Web Developer, UI/UX and Web Designer</span></small></p>";
	} else {
		return "<p class='no_print'><small><span class='copyear'>&copy; $startYear" . "</span><span class='footer_comma'>,</span><span class='footer_none'> | </span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'>Mirnes Glamočić</a><span class='footer_comma'>,</span><span class='footer_none'> | </span><span id='copyrighter'>Web Developer, UI/UX and Web Designer</span></small></p>";
	}
}
echo copyright(2016);
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
<script src="/lightbox2/src/js/lightbox.min.js"></script>
<script src='/JS/slider.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>
<script src="/JS/lazyloading.min.js"></script>