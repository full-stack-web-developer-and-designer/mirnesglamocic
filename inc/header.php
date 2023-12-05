<?php
    $id=1;
    $nav = Navigations::get(1);
?>
    <div id="header">
        <div id="headerTop">
            <div class="wrapper">
				<div id="headerTopLeft">
					<span id="number"><i class="fa-solid fa-phone" aria-hidden="true"></i><a href="tel:+82106709555">&nbsp;&nbsp;+82 10 6709 555</a></span>
				</div><!--end #headerTopLeft-->
                
                <div id="headerCenter">
                    <span id="cv"><a href="https://mirnesglamocic.com/images/MirnesGlamocic-Resume.pdf" aria-label="Download my resume" target="_blank"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;Download my resume</a></span>
                </div><!--end #headerCenter-->
       			
                <div id="headerTopRight">
                    <span><a href="https://www.linkedin.com/in/mirnesglamocic/" aria-label="visit my LinkedIn profile" target="_blank"><i class="header-icon fab fa-linkedin"></i></a></span>
                    <span><a href="https://github.com/Full-Stack-Web-Developer-and-Designer/" aria-label="visit my GitHub profile" target="_blank"><i class="header_icon fab fa-github"></i></a></span>
                    <span><a href="https://twitter.com/mirnesglamocic/" aria-label="visit my Twitter profile" target="_blank"><i class="header_icon fa-brands fa-x-twitter"></i></a></span>
       			</div><!--end #headerTopRight-->
        	</div><!--end .wrapper-->
        </div><!--end #headerTop-->
		
        <div id="headerBottom">
            <div class="wrapper">
				<nav id="nav"><a href="#" id="respmenu"><i class="fas fa-bars"></i> <h2>MENU</h2></a>
                    <ul class="menu">
                        <!-- navigation -->
                        <?php echo $nav->render(); ?>
                    </ul>
                </nav>
            </div><!--end .wrapper-->
        </div><!--end #headerBottom-->
    </div><!--end #header-->