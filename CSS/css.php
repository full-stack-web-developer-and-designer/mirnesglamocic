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
    border-top: 4px solid var(--border-light);
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
    background:rgba(0, 0, 0, 0.55);
    word-wrap: break-word;
    display: inline-block;
    border-radius: 10px;
    color: var(--white);
}

.white {
    margin: 0 auto;
}

.white h2 {
    background: none;
}
#aboutme, #certificates, #linkedin, #skills, #services, #contact {
    padding: 2.5rem 0;
}
#certificates, #linkedin, #skills, #services {
    margin-bottom: 2.5rem;
}
#aboutme,
#certificates,
#linkedin,
#services,
#skills,
#contact {
    background: #f5f7ff;      /* very light blue for subtle theme */
    text-align: left;
}
#linkedin, #projects {
    text-align: center;
}
#contact h2 {
    margin: 0 auto 30px;
}
p#response,
h4 {
    margin: 1em 0.7em;
    height: auto;
}
#aboutme, #contact {
    margin-bottom: 0;
}
#aboutme .about-content {
    display: block;
}
#aboutme h2 {
    margin-bottom: 2rem;
}
#aboutme p {
    margin-bottom: 0.75em;
}   
#aboutme p:last-of-type {
    margin-bottom: 0;
}   
.imgLeft {
        display: block;
        margin-right: 1rem;
        margin-bottom: 0;
        float: left;
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
    padding: 2.5rem 0;
}
#about .wrapper {
    display: grid;
    grid-template-columns: 1fr;
    justify-items: center;
}
/* Quotes box */
#quotes {
    background: rgba(0, 0, 0, 0.55);
    color: var(--white);
    padding: 24px;
    width: 90%;
    grid-column: 1 / -1;
}
#quotes blockquote {
    margin: 1.5rem 0;
    padding-left: 1.2rem;
    border-left: 4px solid var(--primary-blue);
}
#quotes cite {
    display: block;
    margin-top: 0.5rem;
    font-style: normal;
    font-weight: 600;
    color: var(--primary-blue);
}
/* Certificates ITAcademy */
#certificates {
    background: var(--white);
    padding-bottom: 1rem;
    margin-bottom: 0;
}
#certificates h2 {
    width: 100%;
    display: block;
    }
.cert-images {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 2rem 0;
}
.text-before-images {
    width: 100%;
    max-width: 800px;
    text-align: center;
    padding-top: 2rem;
}
p.text-after-images {
    display: inline;
}
.text-before-images p:last-child,
.text-after-images p:last-child  {
    margin-bottom: 0;
}
.cert-item picture {
    border: 2px solid var(--primary-blue-alpha);
    display: block;
    width: 100%;
    max-width: 400px;
    border-radius: 6px; /* optional: slightly rounded corners for style */
}
.cert-item img {
  width: 100%;
  height: auto;
}
#PHP {
    margin-bottom: 2.5rem;
}
/* External Certificates */
#linkedin {
  background: var(--white);  
  display: grid;
  justify-items: center;
}
#linkedin .wrapper {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.5rem;
  justify-content: center;
}
.certificate {
    padding: 35px 15px 15px;
    background: #E3EBFF;
    display: grid;
    position: relative;
    border: 2px solid var(--primary-blue-alpha);
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
/* Optional hover effect to match services cards */
.certificate:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(30, 58, 138, 0.25); /* blue-tinted shadow */
}
.certificate, .services {
    width: 100%;
    max-width: 100%;
}
.certificate span {
    background: var(--primary-blue);
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
    color: var(--white);  
    text-align: center;
}
.certificate p.intro {
    text-align: left;
}
svg.icons-cert {
    width: 30px;
    height: 30px;
    margin: 15px;
}
.certificate a.button:link,
.certificate a.button:visited {
    border: 1px solid var(--primary-blue);   /* primary blue */
    border-radius: 5px; 
    color: var(--primary-blue);             /* text in primary blue */
    font-size: 0.75em;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 1.2;
    padding: 20px 0;
    margin: 20px auto 10px;
    transition: 0.3s;            /* faster transition feels smoother */
    text-align: center;
    background: transparent;      /* keep transparent by default */
}

.certificate a.button:hover {
    background: var(--secondary-blue);         /* slightly lighter blue on hover */
    color: var(--white);                 /* white text for contrast */
    border: 1px solid var(--accent-blue);   /* bright blue border on hover */
}
.certificate a.button:active {
    background: var(--accent-blue);         /* bright blue when clicked */
    border: 1px solid var(--secondary-blue);   /* slightly lighter blue border for active */
    color: var(--white);                 /* keep text white */
}
/* Skills */
.skills-column {
  display: grid;
  justify-content: center;
}
.skills-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
  justify-items: center;
}
.skill {
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #e8f0ff;
  border-radius: 8px;
  padding: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.skill svg {
  width: 100%;
  height: 100%;
  display: block;
  color: var(--primary-blue);;
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
    padding: 15px;
    background: var(--bg-light);           /* very light blue background */
    border: 2px solid var(--primary-blue-alpha);   /* subtle blue border with transparency */
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(30, 58, 138, 0.15); /* soft blue-tinted shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    justify-content: center;
}
h3#service {
    color: var(--primary-blue);          
    margin: 1.15rem auto 0;
    letter-spacing: normal;
    padding-bottom: 0.5rem;
}
.services:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(30, 58, 138, 0.25); /* blue-tinted shadow */
}
/* Services icons */
.service-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 1rem;
    fill: var(--primary-blue);
    color: var(--primary-blue);           
}
.services p {
    max-width: 300px; 
    font-size: 0.95rem;
    line-height: 1.5;
}
/* Services heading */
.services h4 {
    color: var(--primary-blue);      /* primary blue */
    margin: 0.5rem 0;
    font-size: 1.2rem;
    line-height: 1.3;
}
.services svg#icon-webservice path {
    fill: var(--primary-blue);           /* base color */
    transition: fill 0.3s;
}
.services:hover svg#icon-webservice path {
    fill: var(--accent-blue);           /* brighter blue on hover */
}
/* Contact Section */
#form {
  width: 100%;
  max-width: 800px;
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
    min-height: 1.5em;
    margin: 1em 1.9em 1em 0.7em;
    color: #a2d838;
    text-align: center;
    min-height: 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, margin 0.3s ease;
    margin: 0;
}
p#response:not(:empty) {
    max-height: 200px;
    margin: 1em 0;
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
  color: var(--error-red);
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
  color: var(--text-dark);
  background-color: var(--input-bg-default);
  border: 1px solid var(--border-light-gray);
  border-radius: 4px;
  padding: 15px 15px 15px 65px;
  resize: none;
  transition:
    border-color 0.2s ease,
    background-color 0.2s ease,
    box-shadow 0.2s ease;
}

/* focus state for better interaction feedback */
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
textarea {
  padding-left: 60px;
  padding-top: 15px;
  padding-bottom: 15px;
  height: 180px;
}
label.valid,
label#floated_textarea {
  position: absolute;
  left: 60px; /* matches icon space */
  top: 15px;
  font-size: 16px;
  color: var(--primary-blue);           /* primary blue */
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
  color: var(--form-focus-blue);
  text-transform: uppercase;
}
/* Error span under inputs */
span.error {
  height: 30px;
  display: block;
}
label.error {
  transform: translate(60px, 0.6rem);
  color: var(--error-red);
  pointer-events: none;
  font-weight: 700;
  display: inline;
}

.btn_submit {
  display: block;
  width: 100%;        /* full width */
  padding: 10px;
  font-size: 18px;
  font-weight: 400;
  font-family: inherit;
  border-radius: 10px;
  border: 2px solid var(--primary-blue); /* primary blue */
  background: var(--primary-blue);       /* primary blue */
  color: var(--white);             /* text stays white */
  cursor: pointer;
  outline: none;
  opacity: 0.9;
  transition: background 0.3s, border 0.3s;
}
.btn_submit:hover {
  background: var(--secondary-blue);        /* slightly lighter blue */
  border-color: var(--accent-blue);      /* brighter blue border on hover */
}
.btn_submit:active {
  background: var(--accent-blue);        /* bright blue for active click */
  border-color: var(--secondary-blue);      /* slightly lighter blue for border */
}
.form-icon {
    position: absolute;
    left: 2px;
    top: 2px;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--primary-blue);  /* primary blue */
    color: var(--white);                 /* white icon inside for contrast */
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
    background-color: var(--primary-blue);  /* primary blue */
    color: var(--white);                 /* white icon for contrast */
    padding: 0;
    transition: background 0.3s, color 0.3s;
}
.form-icon svg,
.textarea-icon svg {
    width: 21px;
    height: 21px;
    fill: var(--white);
    pointer-events: none;
    transition: fill 0.3s;
}
.form-control input:focus ~ .form-icon,
.form-control textarea:focus ~ .textarea-icon {
    background-color: var(--form-focus-blue);
}
.form-control input:focus ~ .form-icon svg,
.form-control textarea:focus ~ .textarea-icon svg {
  fill: var(--white);
}
/* HOVER */
.form-control input:hover,
.form-control textarea:hover {
  border-color: var(--input-border-hover);
  background-color: var(--input-bg-hover);
}

/* FOCUS */
.form-control input:focus,
.form-control textarea:focus {
  outline: none;
  border-color: var(--input-border-focus);
  background-color: var(--input-bg-focus);
  box-shadow: var(--input-shadow-focus);
}

/* ACTIVE (mouse down) */
.form-control input:active,
.form-control textarea:active {
  border-color: var(--input-border-active);
  background-color: var(--input-bg-active);
  box-shadow: var(--input-shadow-active);
}
/* Icon hover ONLY when NOT error */
.form-control:not(.error) input:hover ~ .form-icon,
.form-control:not(.error) textarea:hover ~ .textarea-icon {
  background-color: var(--secondary-blue);
}

/* Icon focus ONLY when NOT error */
.form-control:not(.error) input:focus ~ .form-icon,
.form-control:not(.error) textarea:focus ~ .textarea-icon {
  background-color: var(--form-focus-blue);
}
/* ERROR — icon locked red */
.form-control.error .form-icon,
.form-control.error .textarea-icon {
  background-color: var(--error-red) !important;
  fill: var(--white);
}
/* ERROR STATE — always wins */
.form-control.error input,
.form-control.error textarea {
  background-color: var(--input-bg-error);
  border-color: var(--input-border-error);
  box-shadow: var(--input-shadow-error);
  color: var(--text-dark);
}

/* Error + focus (still red) */
.form-control.error input:focus,
.form-control.error textarea:focus {
  border-color: var(--error-red);
  box-shadow: var(--input-shadow-error);
  background-color: var(--input-bg-error);
}
/* Error icons */
.form-control.error .form-icon,
.form-control.error .textarea-icon {
    background-color: var(--error-red);
}
/* ERROR — label locked red */
.form-control.error input ~ label.valid,
.form-control.error textarea ~ label#floated_textarea {
    color: var(--error-red) !important;
}
.form-control input:focus ~ .form-icon,
.form-control textarea:focus ~ .textarea-icon {
    background-color: var(--form-focus-blue);
}

/* Support */
#support {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: var(--primary-blue);       /* primary blue */
    border-radius: 5px;
    padding: 1.15rem 0 2.5rem;
    margin: 2.5rem auto 0;
    color: var(--white);             /* ensure text is readable */
}
#support h3 {
    margin: 0 auto;
}
#support h3,
#support p {
    color: var(--white);
}
#support p {
    padding: 1.15rem 0.5rem 2.5rem;
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
    background: #13275A;      /* darker blue than #support */
    color: var(--white);               /* white text/icons for contrast */
    text-decoration: none;
    border-radius: 6px;
    font-size: 0.875rem;
    transition: transform 0.3s, box-shadow 0.3s;
}
.support svg.icon {
    width: 65px;
    height: 65px;
    color: var(--white);
}
.support svg.icon:hover {
    background: var(--white);
}
.support-label {
    font-size: 0.8rem;
    color: var(--white);
    transition: color 0.25s ease;
}
.support-link:hover {
    background-color: var(--white);
    transform: translateY(-2px);
}
.support-link:hover svg,
.support-link:hover .support-label {
    color: #3a455d;
}
.support-link:active {
    background-color: var(--white);
}
.support-link:active svg,
.support-link:active .support-label {
    color: #032b62;
}
#support > div {
  display: grid;
  grid-template-columns: 1fr; 
  gap: 2.5rem;
  justify-items: center;
}
/* ======================================= */
/* BREAKPOINT: 320px (old small phones)    */
/* ======================================= */
@media screen and (min-width: 320px){
    #hero .wrapper {
        top: 35%;
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
        width: 304px;
    }
    #contact h2 {
        width: 100%;
        margin: 0 auto 2.5rem;
    }
    #support p {
        padding: 1.15rem 1rem 2.5rem;
        margin: 0;
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
        gap: 2.5rem;
    }
    .cert-images img {
        width: 100%;    /* keep natural width */
        max-width: 400px; /* adjust size of images */
        height: auto;      /* maintain aspect ratio */
        border-radius: 6px;
    }
    #PHP {
        margin-bottom: 0;
    }
    /* External Certificates | Services */
    .certificate, .services {
        width: 334px;
    }
    /* Support */
    #support > div {
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

}
@media screen and (min-width: 540px) {
     /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    /* External Certificates | Services */
    .certificate, .services {
        width: 230px;
    }
    /* Skills */
    .skills-list {
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }
    /* Services */
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}
/* ======================================== */
/* BREAKPOINT: 600px (Large phones,  small tablets)        */
/* ======================================== */
@media screen and (min-width: 600px) {
    #aboutme h2 {
        margin-bottom: 2.5rem;
    }
    .certificate, .services {
        width: 250px;
    }
    .skills-list {
        gap: 2rem;
    }
    .services-grid {
        gap: 2.5rem;
    }
    #support > div {
        gap: 2.5rem;
    }
}
/* =============================================================================== */
/* BREAKPOINT: 768px (iPad portrait, Most tablets, Small laptops (old netbooks))   */
/* =============================================================================== */
@media screen and (min-width: 768px){
    #home h1 {
        font-size: 3rem;
        line-height: 1.3;
    }
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
    /* AboutMe Section */ 
    #aboutme .wrapper {
        grid-template-columns: auto 1fr; /* image + text */
        gap: 30px;
        align-items: start;
    }
    #aboutme .wrapper > h2 {
        font-size: 1.5rem;
        top: 1rem;
        padding: 0.5rem 1rem;
    }
    #aboutme .about-content {
      overflow: hidden;   /* ensures wrapper contains floated image */
    }
    .imgLeft {
        display: block;
        margin-right: 1rem;
        margin-bottom: 0;
        max-width: 200px;
        width: 100%;
        float: left;
    }
    .cert-text {
        width: 100%;
        max-width: 800px; /* optional readability */
    }
    #about {
        background-image: url("../images/developmentMirnes_1023.webp");
        background-image: image-set(
            url("../images/developmentMirnes_1023.webp") 1x,
            url("../images/developmentMirnes_1023@2x.webp") 2x
        );
        padding: 200px 0 2.5rem;
    }
    /* Quotes box */
    #quotes {
        grid-column: 2;
        justify-self: end;
    }
    /* External Certificates */
    .certificate a.button:hover {
    background: var(--secondary-blue); /* slightly lighter blue on hover */
    color: var(--white);          /* text stays white for contrast */
    }

    .certificate a.button:active {
        background: var(--accent-blue); /* bright blue when clicked */
        color: var(--white);          /* ensure text remains readable */
    }
    #linkedin .wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    .certificate {
        padding: 20px 25px 15px;
    }
    /* External Certificates | Services */
    .certificate, .services {
        width: 304px;
    }
    .form-control textarea {
        min-height: 180px;   /* enough for 4–5 lines */
        padding-top: 16px;
        padding-bottom: 16px;
        line-height: 1.5;
    }

 }
/* ======================================================================= */
/* BREAKPOINT: 900px (iPad landscape, Small laptops, Tablets in landscape) */
/* ======================================================================= */
@media screen and (min-width: 900px) {
    /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(3, 1fr);
    }
    .certificate {
        padding: 20px 20px 15px;
    }
    /* External Certificates | Services */
    .certificate {
        width: 246px;
    }
    /* Contact */
    #contact .wrapper {
        grid-template-columns: 2.4fr 1fr;
        column-gap: 2.5rem;
        align-items: start;
    }
    .contact-main {
        grid-column: 1;
        max-width: 100%;
        height: auto; /* allow growth */
    }
    .form-control textarea {
        min-height: 260px;
    }

    .textarea-icon {
        height: 256px;
    }

    /* Support */
    #support {
        display: grid;
        justify-items: center;
        padding: 2rem 1rem;
        margin: 0;
    }

    #support > div {
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        justify-items: center;
    }

    .support-label {
        font-size: 0.7rem;
    }

    /* Make icons bigger than before */
    .support-link {
        width: 100px;
        height: 100px;
         padding: 4px;
    }
    .support svg.icon {
        width: 70px;
        height: 70px;
    }
    #support > .support:nth-child(3) {
        grid-column: 1 / -1; /* span both columns */
        justify-content: center;   /* center content horizontally */
        text-align: center;
        justify-items: center;
    }
    /* Ensure support-links is a grid */
    #support .support-links {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* two columns for the first row */
        gap: 40px;
        justify-items: center; /* center items in their column */
    }

    /* Make the third support span full width and center */
    #support .support-links .support:nth-child(3) {
        grid-column: 1 / -1;   
        justify-self: center;
    }
    #contact .wrapper {
        display: grid;
        grid-template-columns: minmax(0, 2.7fr) minmax(0, 1.5fr);
        align-items: stretch; /* KEY */
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
        row-gap: 2.5rem;
        margin: 0;
        padding: 2.5rem 0;
    }
    /* Text after images */
    .text-after-images {
        width: 100%;
        max-width: 800px;
        text-align: center;
    }
    /* External Certificates */
    .certificate {
        padding: 35px 30px 15px;
        width: 266px;
    }
    /* Skills */
    .skills-list {
        grid-template-columns: repeat(8, 1fr);
    }
    /* services */
    .services {
        width: 304px;
        padding: 20px 20px 15px;
    }
    .skill {
        width: 85px;
        height: 85px;
    }
    /* Support */
    .support-link {
        width: 95px;
        height: 95px;
    }
    #support > div {
        gap: 2.5rem;
    }
}
/* ====================================================================== */
/* BREAKPOINT: 1200px (Most desktops, external monitors, large desktops)  */
/* ====================================================================== */
@media screen and (min-width: 1200px) {
   .header, .footer {
        padding: 2rem 0;
   }
    .description, .content-text {
        max-width: 800px;
    }
    .certificate, .services {
        max-width: 250px;
    }
    /* External Certificates */
    #linkedin .wrapper {
        grid-template-columns: repeat(4, 1fr);
    }
    .certificate {
        padding: 30px 20px 15px;
    }
    /* skills */
    .skill {
        width: 100px;
        height: 100px;
    }
    /* services */
    .services-grid {
        grid-template-columns: repeat(4, 1fr);
    }
    .services {
        padding: 20px 20px 15px;
        width: 245px;
    }
    /* Support */
    .support-link {
        width: 100px;
        height: 100px;
    }
}
/* ============================================= */
/*  BREAKPOINT: 1260px (Larger desktop monitors) */
/* ============================================= */
@media screen and (min-width: 1260px) {
    /* about */
    #about {
        padding: 200px 0;
    }
    /* linkedin, Pluralsight & SoloLearn Certificates */
    #certificates h2 {
    width: 1200px;
    }
    .certificate, .services {
        width: 270px;
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
        background: var(--white) !important;
        color: var(--text-dark);
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
        color: var(--text-dark);
        page-break-inside: avoid;
    }

    /* ===============================
       Contact
       =============================== */
    #contact {
        display: block !important;
        width: 100% !important;
        background: var(--white) !important;
        color: var(--text-dark);
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
        color: var(--text-dark);
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