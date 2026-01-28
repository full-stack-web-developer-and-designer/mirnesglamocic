<?php header("Content-type: text/css; charset: UTF-8"); ?>
<style>
    
/* ------------------------------------------------------------------
  Author: Mirnes Glamočić
  File: css.php
  Page: index
  Description: Main styles for the index page, including layout, 
               typography, sections, and responsive adjustments.
------------------------------------------------------------------ */

/* ======================================== */
/* BASE / MOBILE FIRST (default styles)     */
/* ======================================== */
#hero.lazy, #about.lazy {
    background-image: none;
    background-color: #f1f1fa;
}
#hero, #about {
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover; /* old Safari / Android */
    -moz-background-size: cover;    /* old Firefox */
    -o-background-size: cover;      /* old Opera */
    background-size: cover;         /* standard */
}
    <?php $rnd = rand(1,2); ?>
/* Hero */
#hero {
    background-image: url("../images/bg<?php echo $rnd ?>_408.webp");
    background-image: image-set(
        url("../images/bg<?php echo $rnd ?>_408.webp") 1x,
        url("../images/bg<?php echo $rnd ?>_408@2x.webp") 2x
    );
    background-attachment: scroll;
    background-position: top right;
    position: relative;
    width: 100%;
    height: 100vh;             
    text-align: center;
    }
#hero .wrapper {
    position: absolute;
    top: 30%;                 
    left: 50%;                
    transform: translate(-50%, -50%);
    width: 90%;
    max-width: 1200px;
    padding: 0;
    height: auto;
}
#home h1 {
    padding: 15px 20px;
    background: rgba(0, 0, 0, 0.8);
    font-size: 2.2rem;
    line-height: 1.3;
    word-wrap: break-word;
    display: inline-block;
    max-width: 90%;
    border-radius: 10px;
    color: #fff;
}
/* AboutMe section */ 
#aboutme {
    background: #fff;
    color: #363636;
}
#aboutme .wrapper {
    grid-template-columns: auto 1fr;
    gap: 30px;
    align-items: start;
    }

.imgLeft {
    width: 100%;
    max-width: 320px;
    height: auto;
    margin-right: 20px;
    margin-bottom: 20px;
    display: none;
    }
#aboutme .about-content {
    width: 100%;
}
#aboutme h2 {
    margin: 0 auto 30px;
}
#aboutme picture img {
    width: 100%;
    height: auto;
}
#aboutme p {
    margin: 0 0 0.75em;
    line-height: 1.6;
}
#aboutme p:last-of-type {
    margin-bottom: 0;
}
/* About */
#about {
    background-image: url("../images/developmentMirnes_408.webp");
    background-image: image-set(
        url("../images/developmentMirnes_408.webp") 1x,
        url("../images/developmentMirnes_408@2x.webp") 2x
    );
    background-repeat: no-repeat;
    background-position: center top;
    padding: 40px 0;
}
#about .wrapper {
    display: grid;
    grid-template-columns: 1fr;
    justify-items: center;
}
/* Quotes box */
#quotes {
    background: rgba(0, 0, 0, 0.8);
    color: #FFF;
    padding: 24px;
    width: 90%;
    grid-column: 1 / -1;
}
/* Certificates ITAcademy */
.cert-images {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding-top: 40px;
    padding-bottom: 40px;
}
.text-before-images {
    width: 100%;
    max-width: 800px;
    text-align: center;
    padding-top: 40px;
}
p.text-after-images {
    display: inline;
}
.text-before-images p:last-child,
.text-after-images p:last-child  {
    margin-bottom: 0;
}
#certificates {
    background: #fff;
    padding: 40px 0 0;
}
#certificates h2 {
    width: 100%;
    display: block;
    }
.cert-item picture {
    border: 2px solid #ccc;
    display: block;
    width: 100%;
    max-width: 400px;
  }
.cert-item img {
  width: 100%;
  height: auto;
}
#PHP {
    margin-bottom: 40px;
}
/* External Certificates */
#linkedin {
  background: #fff;
  color: #363636;
  padding: 40px 0 0;
  display: grid;
  justify-content: center;
}
#linkedin .wrapper {
  display: grid;
  grid-template-columns: 1fr;
  gap: 40px;
  justify-content: center;
}
.certificate {
    width: 100%;
    max-width: 200px;
    padding: 20px 20px 15px;
    background: #fafafa;
    display: grid;
    position: relative;
    border: 2px solid #ccc;
}
.certificate span {
    background: #ccc;
    width: 60px;
    height: 60px;
    line-height: 60px;
    font-size: 30px;
    display: block;
    border-radius: 50%;
    position: absolute;
    top: -30px;
    left: 50%;
    margin-left: -30px;
}
.certificate p.intro {
    text-align: left;
}

/* Cert. icons */
div.icons {
  display: flex;
  justify-content: center;
  gap: 10px;
}
div.icons a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #93c5fd;
  border-radius: 50%;
  transition: color 0.2s ease, background-color 0.2s ease;
}
div.icons a svg {
  stroke-width: 1.6;
  transition: transform 0.2s ease;
}
div.icons a:hover {
  color: #fff;
  background-color: rgba(147, 197, 253, 0.08);
}
div.icons a:hover svg {
  fill: #fff;
  transform: translateY(-2px);
}
/* KEYBOARD FOCUS (accessibility) */
div.icons a:focus-visible {
  outline: none;
  color: #fff;
  background-color: rgba(147, 197, 253, 0.15);
  box-shadow: 0 0 0 2px rgba(147, 197, 253, 0.6);
}
svg.icons-cert {
    width: 30px;
    height: 30px;
    margin: 15px;
}
.certificate a.button:link,
.certificate a.button:visited {
    border: 1px solid #635336;
    border-radius: 5px; 
    color: #635336;
    font-size: 0.75em;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 1.2;
    padding: 17px 30px 15px;
    margin: 20px auto 10px;
    transition: 0.8s;
    text-align: center;
}
.certificate a.button:hover {
    background: #fff;
    color: #635336;
    border: 1px solid #574320;
}
.certificate a.button:active {
    border: 1px solid #402e0e;
}
/* Skills */
.skills-column {
  display: grid;
  justify-content: center;
}
.skills-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1rem;
  justify-items: center;
}
.skill {
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f0f0f0;
  border-radius: 8px;
  padding: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.skill svg {
  width: 100%;
  height: 100%;
  display: block;
}
.skill:hover {
  transform: scale(1.1);
  cursor: pointer;
}
/* Footer skills wrapper */
.skills-footer-columns {
  display: grid;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}
/* Services */
#services .wrapper {
    display: grid;          /* only grid inside wrapper for services items */
    justify-items: center;  /* center grid items */
}
 #services h2 {
    margin-bottom: 30px;
}
#services h3#service {
    padding: 0 0.2em;
}
.services-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    padding: 2rem 1rem 0;
    justify-items: center;
}
.services {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    max-width: 200px;
    padding: 30px 30px 15px;
    background: #faf7eb;
    border: 2px solid #d5cfb9;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    justify-content: center;
}
h3#service {
    color: #635336;
    margin: 0 auto;
    letter-spacing: normal;
}
.services:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}

/* Services icons */
.service-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 1rem;
    fill: #635336;
}
.services p {
    max-width: 300px; 
    font-size: 0.95rem;
    line-height: 1.5;
}
/* Services heading */
.services h4 {
    color: #635336;
    margin: 0.5rem 0;
    font-size: 1.2rem;
    line-height: 1.3;
}
/* Contact Section */

#form {
  width: 100%;
  max-width: 800px;
}

#support {
  width: 100%;
  text-align: center;
}
/* Support */
#support {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #032b62;
    border-radius: 5px;
    text-align: center;
    padding: 1.5rem 0;
}
/* Contact Section */
#contact .wrapper {
  display: grid;
  grid-template-columns: 1fr;
  max-width: 1200px;
  margin: 0 auto;
}
#contact h2 {
  grid-column: 1 / -1;
}
p#contact_offer {
    text-align: center;
}
p#response {
    font-size: 1.6em;
    height: 50px;
    margin: 1em 1.9em 1em 0.7em;
    color: #a2d838;
    text-align: center;
}
.contact-main {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}
.form-control {
  position: relative;
  width: 100%;
}
.error {
  color: #e74c3c;
  font-weight: 700;
  font-size: 13px;
  display: block;     /* OK */
  margin-top: 4px;    /* vertical spacing only */
}
.form-control input,
.form-control textarea {
  width: 100%;
  font-family: inherit;
  font-size: 20px;
  line-height: 1.2;
  font-weight: 400;
  color: #424242;
  background-color: #fbfbfb;
  border: 2px solid #aaa;
  border-radius: 4px;
  padding: 15px 15px 15px 65px; /* leave enough space for icon */
  outline: none;
  resize: none;
  opacity: 0.9;
  transition: border-color 0.3s, box-shadow 0.3s, color 0.3s;
}
.form-control input,
.form-control textarea {
  border: 2px solid #aaa;
}
.form-control input {
  height: 54px;              /* standard, clean */
  line-height: 1.2;
}
.form-control textarea {
  min-height: 180px;
  line-height: 1.5;
  padding-top: 18px;
  padding-bottom: 18px;
}
.form-control input:focus,
.form-control textarea:focus {
  border-color: #0b60d4;
}
.form-control input:focus,
.form-control textarea:focus {
  outline: 2px solid #0b60d4;
  outline-offset: 0;
  box-shadow: none;
}
textarea {
  padding-left: 60px;
  padding-top: 15px;
  padding-bottom: 15px;
  height: 180px;
}
.form-control input:focus,
.form-control textarea:focus {
  border-color: #0b60d4;
  box-shadow: 0 0 8px 0 #0b60d4;
  color: #0b60d4;
}
label.valid,
label#floated_textarea {
  position: absolute;
  left: 60px; /* match icon space */
  top: 15px;
  font-size: 16px;
  color: #424242;
  transition: all 0.2s ease-out;
  pointer-events: none;
}
input:focus ~ label.valid,
input:not(:placeholder-shown) ~ label.valid,
textarea:focus ~ label#floated_textarea,
textarea:not(:placeholder-shown) ~ label#floated_textarea {
  font-size: 12px;
  font-weight: 700;
  top: 0.3rem;
  left: 60px;
  color: #0b60d4;
  text-transform: uppercase;
}
label.error {
  transform: translate(60px, 0.6rem);
  color: #e74c3c;
  pointer-events: none;
  font-weight: 700;
  display: inline;
}
.btn_submit {
  display: block;
  width: 100%;        /* full width, no margin */
  padding: 10px;
  font-size: 18px;
  font-weight: 400;
  font-family: inherit;
  border-radius: 10px;
  border: 2px solid #0d182a;
  background: #0d182a;
  color: #fff;
  cursor: pointer;
  outline: none;
  opacity: 0.9;
  transition: background 0.3s, border 0.3s;
}
.btn_submit:hover {
  background: #050d1a;
  border-color: #01050c;
}
.btn_submit:active {
  background: #01050c;
  border-color: #000103;
}
.form-icon {
    position: absolute;
    left: 2px;
    top: 2px;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;    /* center svg vertically inside icon box */
    justify-content: center;
    background-color: #aaa;
    padding: 0;
    transition: background 0.3s, color 0.3s;
}
.textarea-icon {
    position: absolute;
    left: 2px;
    top: 2px;
    height: 176px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #aaa;
    padding: 0;
    transition: background 0.3s, color 0.3s;
}
.form-icon svg,
.textarea-icon svg {
    width: 21px;
    height: 21px;
    fill: #fff;
    pointer-events: none;
    transition: fill 0.3s;
}
.form-control input:focus ~ .form-icon,
.form-control textarea:focus ~ .textarea-icon {
    background-color: #0b60d4;
}
.form-control input:focus ~ .form-icon svg,
.form-control textarea:focus ~ .textarea-icon svg {
  fill: #fff;
}
.form-control input:hover ~ .form-icon,
.form-control textarea:hover ~ .textarea-icon {
  background-color: #888;
}
#support {
  width: 100%;
  margin: 40px auto 0;
}
#support h3,
#support p {
    color: #fff;
}
#support h3 {
    margin: 0 auto;
}
#support p {
    padding: 1.5rem 0.5rem;
    margin: 0;
}
/* Support card */
.support-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100px;
    height: 100px;
    padding: 6px 12px;
    background: #273142;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 0.875rem;
    transition: background 0.3s, transform 0.3s;
}
.support svg.icon {
    width: 65px;
    height: 65px;
    color: #fff;
}
.support-label {
    font-size: 0.8rem;
    transition: color 0.25s ease;
}
.support-link:hover {
    background-color: #fff;
    transform: translateY(-2px);
}
.support-link:hover svg,
.support-link:hover .support-label {
    color: #3a455d;
}
.support-link:active {
    background-color: #fff;
}
.support-link:active svg,
.support-link:active .support-label {
    color: #032b62;
}
#support > div {
  display: grid;
  grid-template-columns: 1fr; 
  gap: 40px;
  justify-items: center;
}

/* Skills */
/* Articles styling */
/*
.services { 
    width: 100%;            
    max-width: 220px;      
    margin: 40px auto 0; 
    padding: 35px 35px 15px;
}*/

/* GRID CONTAINER FOR ARTICLES */
/*
.services-grid {
    display: grid;
    grid-template-columns: 1fr;  
    gap: 2rem;                   
    justify-items: center;       
    padding: 2rem 1rem 0;
}

p#contact_offer {
    text-align: center;
}
#contact h2 {
    margin: 0 40px 30px 0;
}

a.social-icon {
    width: 65px;
    height: 65px;
    display: inline-block;
    margin-right: -4px;
}*/
/* ======================================= */
/* BREAKPOINT: 320px (old small phones)    */
/* ======================================= */
@media screen and (min-width: 320px){
    #hero .wrapper {
        top: 35%;
    }
    /* External Certificates | Services */
    .certificate, .services {
        max-width: 250px;
    }
    /* skills */
    .skills-list {
        grid-template-columns: repeat(2, 1fr); /* 2 icons per row at 320px */
    }
} 
/* ======================================= */
/* BREAKPOINT: 408px (small phones)        */
/* ======================================= */
@media screen and (min-width: 408px){
    #home .h1, .white {            
        padding: 20px 30px;
        width: 100%; 
    }
    #hero .wrapper {
        top: 40%;  
    }
    #hero {
        background-image: url("../images/bg<?php echo $rnd ?>_767.webp");
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_767.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_767@2x.webp") 2x
        );
        padding: 35px;
    }
    /* about */
    #about .wrapper {
        grid-template-columns: 1fr 1fr;
    }
    #about {
        background-image: image-set(
            url("../images/developmentMirnes_767.webp") 1x,
            url("../images/developmentMirnes_767@2x.webp") 2x
        );
        padding: 160px 0 20px;
    }
    /* External Certificates | Services */
    .certificate, .services {
        max-width: 300px;
    }
}
/* ======================================== */
/* BREAKPOINT: 480px (modern phones)        */
/* ======================================== */
@media screen and (min-width: 480px) {
    .hero-title {
        font-size: 1.75rem;
    }
    /* Certificates ITAcademy */
    .cert-images {
        flex-direction: row;
        gap: 40px;
    }
    .cert-images img {
        width: auto;    /* keep natural width */
        max-width: 400px; /* adjust size of images */
        height: auto;      /* maintain aspect ratio */
    }
    #PHP {
        margin-bottom: 0;
    }
    /* Support */
    #support > div {
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    /* Services */
    .services {
        max-width: 260px;
    }
}
/* ======================================== */
/* BREAKPOINT: 600px (Large phones,  small tablets)        */
/* ======================================== */
@media screen and (min-width: 600px) {
    /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    .certificate {
        padding: 20px 24px 15px;
    }
    /* External Certificates | Services */
    .certificate, .services {
        max-width: 215px;
    }
    /* Skills */
    .skills-list {
        grid-template-columns: repeat(4, 1fr);
    }
    /* Services */
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
/* ======================================== */
/* BREAKPOINT: 768px (iPad portrait, Most tablets, Small laptops (old netbooks))      */
/* ======================================== */
@media screen and (min-width: 768px){
    #hero, #about {
        background-position: center center;
    }
    /* Hero */ 
    #hero {
        background-image: url("../images/bg<?php echo $rnd ?>_1023.webp");
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_1023.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_1023@2x.webp") 2x
        );
    }
    #hero h1 {
        font-size: 3rem; 
    }
    /* AboutMe Section */ 
    #aboutme .wrapper > h2 {
        font-size: 1.5rem;
        top: 1rem;
        padding: 0.5rem 1rem;
    }
    #aboutme .wrapper {
        grid-template-columns: auto 1fr; /* image + text */
        gap: 30px;
        align-items: start;
    }
#aboutme .about-content {
    overflow: hidden;   /* ensures wrapper contains floated image */
}

#aboutme p {
    margin-bottom: 0.75em;
}

    .imgLeft {
        display: block;
    }

    #aboutme picture {
        max-width: 320px;
        width: 100%;
        height: auto;
    }

    #aboutme .about-content {
        width: 100%;
    }
    .cert-text {
        width: 100%;
        max-width: 800px; /* optional readability */
    }
    #aboutme picture img {
    display: block;
    }
    /* About */ 
    #about .wrapper {
        grid-template-columns: 1fr 1fr;
    }
    #about {
        background-image: url("../images/developmentMirnes_1023.webp");
        background-image: image-set(
            url("../images/developmentMirnes_1023.webp") 1x,
            url("../images/developmentMirnes_1023@2x.webp") 2x
        );
        padding: 200px 0 40px;
    }
    /* Quotes box */
    #quotes {
        grid-column: 2;
        justify-self: end;
    }
    /* External Certificates */
    .certificate a.button:hover {
        background: #574320;
        color: #fff;
    }
    .certificate a.button:active {
        background: #402e0e;
    }
    #linkedin .wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    .certificate {
        padding: 20px 25px 15px;
    }
    /* External Certificates | Services */
    .certificate, .services {
        max-width: 300px;
    }
    /* Services */
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
 }
/* ======================================== */
/* BREAKPOINT: 900px (iPad landscape, Small laptops, Tablets in landscape)      */
/* ======================================== */
@media screen and (min-width: 900px) {
    /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(3, 1fr);
    }
    .certificate {
        max-width: 250px;
        padding: 20px 20px 15px;
    }
    /* Support */
    .support-link {
        width: 90px;
        height: 90px;
    }
    #support > div {
        gap: 35px;
    }
     /* Form */
    #contact .wrapper {
        grid-template-columns: minmax(0, 3fr) minmax(0, 1.2fr);
        align-items: start;
    }
    #contact h2 {
        grid-column: 1 / -1;
    }
    .contact-main {
        grid-column: 1;
        max-width: 100%;
    }
    #support {
        grid-column: 2;
        max-width: 100%;
        margin: 0;
    }
    .support-link {
        width: 80px;
        height: 80px;
    }
    #support > div {
        grid-template-columns: 1fr; /* 1 icon per row */
        gap: 30px;
    }
}
/* ======================================== */
/* BREAKPOINT: 1024px (Small desktop, laptops, iPad landscape)      */
/* ======================================== */
@media screen and (min-width: 1024px) {
   .hero-title {
     font-size: 2.25rem;
   }
    /* About */
    #about {
        background-image: url("../images/developmentMirnes_1260.webp");
        background-image: image-set(
            url("../images/developmentMirnes_1260.webp") 1x,
            url("../images/developmentMirnes_1260@2x.webp") 2x
        );
    }
    .cert-center {
        display: flex;
        flex-direction: column; /* stack text + images nicely */
        align-items: center;    /* center everything horizontally */
    }
    
    /* Images column */
    .cert-images {
        display: flex;
        flex-direction: row; /* images stacked in one column */
        align-items: center;
        row-gap: 40px;
        margin: 0;
        padding: 40px 0;
    }
    /* Text after images */
    .text-after-images {
        width: 100%;
        max-width: 800px;
        text-align: center;
        padding-bottom: 40px;
    }
    /* External Certificates */
    .certificate {
        padding: 35px 30px 15px;
        max-width: 250px;
    }
    /* Skills */
    .skills-list {
        grid-template-columns: repeat(8, 1fr);
    }
    .skill {
        width: 85px;
        height: 85px;
    }
    /* Services */
    .services-grid {
        grid-template-columns: repeat(4, 1fr);
    }
    .services {
        max-width: 190px;
        padding: 15px;
    }
    /* Support */
    .support-link {
        width: 95px;
        height: 95px;
    }
    #support > div {
        gap: 40px;
    }
}
/* ======================================== */
/* BREAKPOINT: 1200px (Most desktops, external monitors, large desktops)      */
/* ======================================== */
@media screen and (min-width: 1200px) {
   .header, .footer {
     padding: 2rem 0;
   }
    /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(4, 1fr);
    }
    .certificate {
        max-width: 200px;
        padding: 30px 20px 15px;
    }
    /* skills */
    .skill {
        width: 100px;
        height: 100px;
    }
    /* services */
    .services {
        padding: 20px 20px 15px;
    }
    /* Support */
    .form-control textarea {
        min-height: 232px;
    }
    .support-link {
        width: 100px;
        height: 100px;
    }
}
/* ======================================== */
/* BREAKPOINT: 1260px (Larger desktop monitors)      */
/* ======================================== */
@media screen and (min-width: 1260px) {
   
    /* about */
    #about {
        padding: 200px 0;
    }
    /* Linkedin, Pluralsight & SoloLearn Certificates */
    .certificate {
        padding: 35px 30px 15px;
    }
}
/* ==============================
   PRINT STYLES
   Mobile-first, clean, scalable
   ============================== */
@media print {
    /* ===============================
       Hide non-essential sections
       =============================== */
    #hero,
    #quotes,
    .certificate,
    #PHP,
    #WD,
    #linkedin,
    .services,
    #contact_me,
    #support,
    .icons {
        display: none !important;
    }
    /* ===============================
       General body and container styling
       =============================== */
    body,
    #aboutme,
    #mycert,
    #certificates,
    #aboutme p,
    .services,
    #contact {
        background: #fff !important;
        color: #000 !important;
        width: 100% !important;
        margin: 0 !important;           /* remove margin */
        padding: 0 !important;          /* remove padding */
        box-shadow: none !important;
        page-break-inside: avoid;
    }

    /* ===============================
       Headings
       =============================== */
    h1, h2, h3, h4 {
        color: #000 !important;
        text-align: center;
        margin: 0.2rem 0 !important;    /* minimal margin */
        page-break-after: avoid;
    }

    /* ===============================
       About Me
       =============================== */
    #aboutme h2 {
        display: block;
        margin: 0;
        padding: 0;
    }
    #aboutme p {
        margin: 0.2rem 0;
        line-height: 1.3;
    }
    #certificates p {
        text-align: left!important;
    }
    /* ===============================
       Skills
       =============================== */
    #skills {
        page-break-before: always;
    }
    #skills .skills-list {
        display: block;
        column-count: 8;                 /* 8 skills per column */
        column-gap: 20px;
        page-break-inside: avoid;
    }
    #skills .skills-list .skill {
        display: block;
        margin-bottom: 3px;
        page-break-inside: avoid;
        font-size: 12pt;
    }

    /* ===============================
       Services
       =============================== */
   /* ===============================
   Services (print)
   =============================== */
    /* Services wrapper as multi-column container */
    /* Hide the services themselves */
    #services .services-wrapper {
        display: none !important;
    }

    /* print message instead */
    #services::after {
        content: "Services are available online at: https://mirnesglamocic.com/services";
        display: block;
        text-align: center;
        font-size: 12pt;
        margin: 1rem 0;
        color: #000;
        page-break-inside: avoid;
    }


    /* ===============================
       Contact
       =============================== */
    #contact {
        display: block !important;
        width: 100% !important;
        background: #fff !important;
        color: #000 !important;
        margin: 0 auto;
    }
    #contact p#contact_offer {
        display: block;
        margin-bottom: 0.5rem;
}
#headerTopRight {
        display: block !important;
        visibility: visible !important;
        text-align: right;
        float: right;
    }
    
.print-email::before {
        content: "✉ ";
    }
    .print-email {
        display: flex !important;
        align-items: center;
        gap: 6px;
        font-size: 10pt;
        color: #000;
        position: absolute; /* or fixed if you want it on every page */
        top: 5mm;   /* adjust as needed */
        right: 5mm; /* adjust as needed */
        z-index: 9999;
    }

    /* ===============================
       Page setup for print
       =============================== */
    @page {
        size: A4 landscape;
        margin: 15mm;
    }

    /* ===============================
       Remove unnecessary page-breaks on first page
       =============================== */
    #aboutme, #services {
        page-break-before: auto !important; /* remove forced breaks */
    }
}



</style>