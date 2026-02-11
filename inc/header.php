<?php
/**
 * header.php
 *
 * Generates the website header, including contact info, social links,
 * resume download, and responsive navigation menu.
 *
 * Features:
 * - SVG icons for phone, social media, and resume
 * - Top header with contact number, resume link, and social icons
 * - Bottom header with responsive navigation menu
 * - Accessibility-friendly (ARIA labels, titles)
 * - Supports print-friendly email display
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-09
 *
 * Usage:
 * Include this file at the top of any PHP page where the header is needed:
 * <?php include_once __DIR__ . '/inc/header.php'; ?>
 */
include $_SERVER['DOCUMENT_ROOT'] . '/assets/icons.html'; ?>
<header id="header">

    <div id="headerTop">

        <div class="wrapper">
            
            <div id="headerTopLeft">
                
                <span id="number">

                    <a href="tel:+38763734327" aria-label="Call phone number">
                        <svg class="icon" aria-hidden="true">
                            <use href="#icon-phone"></use>
                        </svg>&nbsp;&nbsp;+387 63 734 327
                    </a>
                    
                </span>
                
            </div><!--end #headerTopLeft-->
            
            <div id="headerCenter">
                
                <span id="cv">
                    
                    <a id="resume" href="https://mirnesglamocic.com/images/MirnesGlamocic-Resume.pdf" target="_blank" rel="noopener noreferrer" aria-label="Download my resume">
                        <svg class="icon" aria-hidden="true">
                            <use href="#icon-download"></use>
                        </svg>&nbsp;&nbsp;Download my resume
                    </a>
                    
                </span>

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

                <p class="print-email">
                    <span>contact@mirnesglamocic.com</span>
                </p>

            </div><!--end #headerTopRight-->

        </div><!--end .wrapper-->

    </div><!--end #headerTop-->
    
    <div id="headerBottom">

        <div class="wrapper">

            <nav id="nav">
                <a href="#" id="respmenu">
                    <svg class="menu-icon" aria-hidden="true">
                        <use href="#icon-menu"></use>
                    </svg>
                    <span class="menu-label">MENU</span>
                </a>
                
                <ul class="menu">
                    
                    <!-- navigation -->
                    <?php Navigation::renderNavigation(); ?>

                </ul>

            </nav>

        </div><!--end .wrapper-->

    </div><!--end #headerBottom-->

</header><!--end #header-->