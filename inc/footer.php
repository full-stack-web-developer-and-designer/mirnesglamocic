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

<script src="lightbox2/src/js/lightbox.min.js"></script>
<script src='./JS/slider.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>
</body>
</html>