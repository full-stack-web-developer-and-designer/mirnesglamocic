<a class="scroll-top" rel="nofollow"><i class="fa fa-arrow-up"></i></a>
<?php $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p class='no_print'><small>&copy Copyright $startYear &ndash; $currentYear" . " | mirnesglamocic.com<span class='footer_comma'>,</span></small></p>";
	} else {
		return "<p class='no_print'><small>&copy Copyright $startYear " . " | Mirnes Glamočić<span class='footer_comma'>,</span></small></p>";
	}
}
echo copyright(2023);
?>
</footer>
<?php echo "<p class=\"barcode\">This page was printed from: ".$url;?></p>
<!-- responsive navigation -->
<script>
var navigation=$.noConflict();navigation(document).ready(function(n){var e=n("#respmenu"),i=n("#nav>ul");n(e).on("click",function(n){n.preventDefault(),i.toggleClass("open")}),n(window).resize(function(){n(window).width()>768&&i.is(":hidden")&&i.removeAttr("style")})});
</script>
<script defer>
window.onorientationchange=function(){var a=window.orientation;switch(a){case 0:case 90:case -90:window.location.reload()}};
</script>
<!-- include fontawesome if cdn fails -->
<script>
window.onload=function(){if(!window.FontAwesome){var e=document.createElement("script");e.type="text/javascript",e.src="/JS/fontawesome.min.js",document.body.appendChild(e)}};
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
</body>
</html>