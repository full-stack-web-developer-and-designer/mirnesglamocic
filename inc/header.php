    <?php
$id=1;
$nav = Navigations::get(1);

    ?>
    <div id="header">
        <div id="headerTop">
            <div class="wrapper">
				<div id="headerTopLeft">
					<span id="number"><i class="fa-solid fa-phone" aria-hidden="true"></i><a href="tel:+38763734327">&nbsp;&nbsp;+387 63 734 327</a></span>
				</div><!--end #headerTopLeft-->
                <div id="headerCenter">
                    <span id="cv"><a href="images/Mirnes_Glamočić_-_Resume.pdf" target="_blank"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;Download my resume</a></span>
                </div><!--end #headerCenter-->
       			<div id="headerTopRight">
                   <span><a href="https://www.linkedin.com/in/mirnesglamocic/" target="_blank">
      <i class="header-icon fab fa-linkedin"></i>
    </a></span>
    <span><a href="https://github.com/Full-Stack-Web-Developer-and-Designer/" target="_blank"><i class="header_icon fab fa-github"></i>
    </a></span>
       			</div><!--end #headerTopRight-->
        	</div><!--end .wrapper-->
        </div><!--end #headerTop-->
		<div id="headerBottom">
            <div class="wrapper">
				<nav id="nav">
                    <div class="lang-menu">
                        <div class="selected-lang">English</div>
                        <ul class="dropdown-menu" id="lang_switcher">
                            <li><a href="" class="en" selected="selected">English</a></li>
                            <li><a href="" class="de">German</a></li>
                            <li><a href="" class="it">Italian</a></li>
                            <li><a href="" class="kr">Korean</a></li>
                        </ul>
                    </div><!-- end .lang-menu -->
                        <ul class="menu">
                            <!-- navigation -->
				<?php echo $nav->render(); ?>
                           
                        </ul>
                </nav>
                <script>
jQuery(document).ready(function(){
jQuery('.selected_lang').hover(function(){
				jQuery('.lang_switcher').stop(true).slideToggle('slow');
			});
        $('ul.dropdown-menu').on('click','li',function() {
           $('div.selected-lang').text($(this).text());
        });
$("#lang_switcher").on('change', function(){
    window.location = '<?php echo $_SERVER['PHP_SELF'] ?>?lang=' + $(this).val();
});
	});
</script>
        </div><!--end .wrapper-->
        </div><!--end #headerBottom-->
    </div><!--end #header-->