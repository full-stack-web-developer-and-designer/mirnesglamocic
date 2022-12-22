<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p><small>&copy Copyright $startYear &ndash; $currentYear" . " | mirnesglamocic.com<span class='footer_comma'>,</span></small></p>";
	} else {
		return "<p><small>&copy Copyright $startYear " . " | Mirnes Glamočić<span class='footer_comma'>,</span></small></p>";
	}
}
echo copyright(2022);
?>
</footer>