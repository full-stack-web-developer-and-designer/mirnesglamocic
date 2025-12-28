<a href="#headerTop" aria-label="Scroll to top" class="scroll-top"><svg id="scroll-top" xmlns="http://www.w3.org/2000/svg" width="16.5px" height="40px" viewBox="0 0 384 512"><path fill="#fff" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg></a>
<?php $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<footer id="footer">
<?php
function copyright($startYear) {
	$currentYear = date("Y");
	if ($startYear < $currentYear) {
		$currentYear = date("Y");
		return "<p class='no_print'><small><span class='copyear'>&copy; $startYear &ndash; $currentYear" . "</span><span class='footer_comma'> • </span><span class='footer_none'> • </span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'><strong>Mirnes Glamočić</strong></a><span class='footer_comma'> • </span><span class='footer_none'> • </span><span id='copyrighter'>Web Developer • UI/UX and Web Designer</span></small></p>
		<div class=\"icons\">
			<a href=\"https://www.linkedin.com/in/mirnesglamocic\" aria-label=\"LinkedIn\" title=\"Visit My LinkedIn Profile\" target=\"_blank\">
				<!-- LinkedIn icon -->
				<svg class=\"social-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path class=\"linkedin-icon\" fill=\"currentColor\" d=\"M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z\"/></svg>
			</a>
			<a href=\"https://github.com/full-stack-web-developer-and-designer\" aria-label=\"GitHub\" title=\"Visit My Projects On GitHub\" target=\"_blank\">
				<!-- GitHub icon -->
				<svg class=\"social-icon\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
				<path class=\"github-icon\" d=\"M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.02c-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.1-.75.08-.74.08-.74 1.21.09 1.85 1.24 1.85 1.24 1.08 1.85 2.83 1.32 3.52 1.01.11-.78.42-1.32.76-1.62-2.66-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.16 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02 0 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.66 1.64.24 2.86.12 3.16.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.62-5.49 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.21.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z\" fill=\"currentColor\"/>
				</svg>
			<a href=\"https://codepen.io/full-stack-web-developer-and-designer\" target=\"_blank\" aria-label=\"CodePen\" title=\"Visit My Projects On CodePen\">
				<!-- CodePen icon -->
				<svg class=\"social-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path class=\"codepen-icon\" fill=\"#93c5fd\" d=\"M502.3 159.7l-234-156c-8-4.9-16.5-5-24.6 0l-234 156C3.7 163.7 0 170.8 0 178v156c0 7.1 3.7 14.3 9.7 18.3l234 156c8 4.9 16.5 5 24.6 0l234-156c6-4 9.7-11.1 9.7-18.3V178c0-7.1-3.7-14.3-9.7-18.3zM278 63.1l172.3 114.9-76.9 51.4L278 165.7V63.1zm-44 0v102.6l-95.4 63.7-76.9-51.4L234 63.1zM44 219.1l55.1 36.9L44 292.8v-73.7zm190 229.7L61.7 334l76.9-51.4L234 346.3v102.6zm22-140.9l-77.7-52 77.7-52 77.7 52-77.7 52zm22 140.9V346.3l95.4-63.7 76.9 51.4L278 448.8zm190-156l-55.1-36.9L468 219.1v73.7z\"/></svg>
			</a>
		</div>";
	} else {
		return "<p class='no_print'><small><span class='copyear'>&copy; $startYear" . "</span><span class='footer_comma'> • </span><span class='footer_none'> • </span><br id='none'><a id='footerlink' href='https://mirnesglamocic.com'><strong>Mirnes Glamočić</strong></a><span class='footer_comma'> • </span><span class='footer_none'> • </span><span id='copyrighter'>Web Developer • UI/UX and Web Designer</span></small></p>
    	<div class=\"icons\">
			<a class='social-icons' href=\"https://www.linkedin.com/in/mirnesglamocic\" aria-label=\"LinkedIn\" title=\"Visit My LinkedIn Profile\" target=\"_blank\">
				<!-- LinkedIn icon -->
				<svg class=\"social-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path class=\"linkedin-icon\" fill=\"currentColor\" d=\"M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z\"/></svg>
			</a>
      		<a class='social-icons' href=\"https://github.com/full-stack-web-developer-and-designer\" aria-label=\"GitHub\" title=\"Visit My Projects On GitHub\" target=\"_blank\">
				<!-- GitHub icon -->
				<svg class=\"social-icon\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
				<path class=\"github-icon\" d=\"M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.02c-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.34-1.77-1.34-1.77-1.1-.75.08-.74.08-.74 1.21.09 1.85 1.24 1.85 1.24 1.08 1.85 2.83 1.32 3.52 1.01.11-.78.42-1.32.76-1.62-2.66-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.16 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02 0 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.66 1.64.24 2.86.12 3.16.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.62-5.49 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.21.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z\" fill=\"currentColor\"/>
				</svg>
			<a class='social-icons' href=\"https://codepen.io/full-stack-web-developer-and-designer\" aria-label=\"CodePen\" title=\"Visit My Projects On CodePen\" target=\"_blank\" >
				<!-- CodePen icon -->
				<svg class=\"social-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path class=\"codepen-icon\" fill=\"#93c5fd\" d=\"M502.3 159.7l-234-156c-8-4.9-16.5-5-24.6 0l-234 156C3.7 163.7 0 170.8 0 178v156c0 7.1 3.7 14.3 9.7 18.3l234 156c8 4.9 16.5 5 24.6 0l234-156c6-4 9.7-11.1 9.7-18.3V178c0-7.1-3.7-14.3-9.7-18.3zM278 63.1l172.3 114.9-76.9 51.4L278 165.7V63.1zm-44 0v102.6l-95.4 63.7-76.9-51.4L234 63.1zM44 219.1l55.1 36.9L44 292.8v-73.7zm190 229.7L61.7 334l76.9-51.4L234 346.3v102.6zm22-140.9l-77.7-52 77.7-52 77.7 52-77.7 52zm22 140.9V346.3l95.4-63.7 76.9 51.4L278 448.8zm190-156l-55.1-36.9L468 219.1v73.7z\"/></svg>
			</a>
		</div>";
	}
}
echo copyright(2016);
?>
</footer>
<!-- print barcode -->
<?php echo "<p class=\"barcode\">This page was printed from: ".$url;?></p>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="/lightbox2/src/js/lightbox.min.js"></script>
<script src="/JS/slider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>
<script src="/JS/lazyloading.min.js"></script>

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
<!-- PROJECT MENU SCRIPT -->
<script src="/JS/projects-menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.js" async></script>
<script src="/JS/lazyloading.min.js"></script>
