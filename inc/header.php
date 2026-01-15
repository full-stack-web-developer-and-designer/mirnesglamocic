<!-- SVG icons -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/icons.html'; ?>
<div id="header">
    <div id="headerTop">
        <div class="wrapper">
            <div id="headerTopLeft">
                <span id="number"><a href="tel:+38763734327" aria-label="Call phone number">
                    <svg class="icon" aria-hidden="true">
                        <use href="#icon-phone"></use>
                    </svg>&nbsp;&nbsp;+387 63 734 327</a>
                </span>
            </div><!--end #headerTopLeft-->
            
            <div id="headerCenter">
                <span id="cv"><a id="resume" href="https://mirnesglamocic.com/images/MirnesGlamocic-Resume.pdf" target="_blank" rel="noopener noreferrer" aria-label="Download my resume">
                    <svg class="icon contact-icon" aria-hidden="true">
                        <use href="#icon-download"></use>
                    </svg>&nbsp;&nbsp;Download my resume</a></span>
            </div><!--end #headerCenter-->
            
            <div id="headerTopRight">
                <div class="icons">
                    <a class="social-icons" href="https://www.linkedin.com/in/mirnesglamocic" aria-label="LinkedIn" title="Visit My LinkedIn Profile" target="_blank" rel="noopener noreferrer">
                        <svg class="icon social-icon" aria-hidden="true">
                            <use href="#icon-linkedin"></use>
                        </svg>
                    </a>
                    <a class="social-icons" href="https://github.com/full-stack-web-developer-and-designer" aria-label="GitHub" title="Visit My Projects On GitHub" target="_blank" rel="noopener noreferrer">
                        <svg class="icon social-icon" aria-hidden="true">
                            <use href="#icon-github"></use>
                        </svg>
                    </a>
                    <a class="social-icons" href="https://codepen.io/full-stack-web-developer-and-designer" aria-label="CodePen" title="Visit My Projects On CodePen" target="_blank" rel="noopener noreferrer">
                        <svg class="icon social-icon" aria-hidden="true">
                            <use href="#icon-codepen"></use>
                        </svg>
                    </a>
                </div><!-- end .icons -->
            </div><!--end #headerTopRight-->
        </div><!--end .wrapper-->
    </div><!--end #headerTop-->
    
    <div id="headerBottom">
        <div class="wrapper">
            <nav id="nav"><a href="#" id="respmenu"><svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 448 512"><path fill="#FFF" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg><h2>MENU</h2></a>
                <ul class="menu">
                    <!-- navigation -->
                    <?php
                        $Navigation = new Navigation(); 
                        $Navigation->renderMenu();
                    ?>
                </ul>
            </nav>
        </div><!--end .wrapper-->
    </div><!--end #headerBottom-->
</div><!--end #header-->