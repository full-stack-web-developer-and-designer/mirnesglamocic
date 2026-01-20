<?php header("Content-type: text/css; charset: UTF-8"); ?>
<style>
    #hero.lazy, #about.lazy {
        background-image: none;
        background-color: #f1f1fa;
    }
    #hero,
    #about {
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    <?php $rnd = rand(1,2); ?>
    #home h1, .white {
        color: #fff;
        background: rgba(0, 0, 0, 0.4);
    }
    #hero {
        background-image:url("../images/bg<?php echo $rnd ?>.webp");
        background-attachment:fixed;
        padding:215px 0
        }
    #about {
        background-image:url(../images/developmentMirnes.webp);
        padding:200px 0
        }
    #aboutme,
    #LinkedIn,
    #skills,
    #services,
    #contact {
        background:#fff;
        color:#363636;
        padding-top:40px;
        text-align:left
        }
    #aboutme, #skills, #services, #contact {
        padding-bottom: 40px;
    }
    #LinkedIn, #skills, #services {
        margin-bottom: 40px;
    }
    #LinkedIn, #projects, #services {
        text-align: center;
    }
    #aboutme h2 {
        width: 850px;
        margin: 0 auto 30px;
    }
    #aboutme p:last-of-type {
        margin-bottom: 0;
    }
    .imgLeft {
        float: left;
        padding-right: 40px;
    }
#quotes {
    background: rgba(0, 0, 0, 0.6);
    padding: 40px;
    width: 350px;
    float: right;
}
#certificates {
    background: #fff;
    padding: 40px 0 0;
    }

.cert-images {
  display: grid;
  grid-template-columns:
    minmax(0, 400px)
    minmax(400px, 1fr)
    minmax(0, 400px);
  align-items: start;
  column-gap: 20px;
}
.cert-images > * {
  min-width: 0;
}

#PHP {
  grid-column: 1;
}
.cert-text {
  grid-column: 2;
  display: flex;
  flex-direction: column;
}

#WD {
  grid-column: 3;
}
/* Individual certificate */
.cert-item {
    justify-self: center;
}
/* HEADING */
#certificates h2 {
    width: 360px;
}
.cert-item picture {
  display: inline-block;  /* shrink-wrap */
  border: 2px solid #ccc;
}
.cert-item img {
  display: block;
  max-width: 100%;
  height: auto;
}

#WD {
    order: 3; /* floated right effect */
}

#mycert {
    order: 2; /* centered between the two */
    flex: 1; /* take remaining space */
}
#mycert p {
    margin-bottom: 1.2rem; /* 19.2px */
}
#mycert p:last-child {
    margin-bottom: 0;
}
/* Center text */
#mycert {
    padding: 40px 20px 0;
    margin: 0 auto;
}
.certificate {
    width: 200px;
    padding: 35px 33px 15px;
    margin: 0 40px 40px 0;
    background: #fafafa;
    display: inline-block;
    position: relative;
    border: 2px solid #ccc;
}
.certificate:nth-of-type(4n) {
    margin-right: 0;
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

/* ICON LIST */
.skills-list {
  display: grid;
  grid-template-columns: 1fr; /* Mobile portrait: 1 icon per row */
  gap: 1rem;
  justify-items: center;
}

/* Mobile landscape: 2 icons per row */
@media (min-width: 480px) {
  .skills-list {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Tablet: 4 icons per row */
@media (min-width: 768px) {
  .skills-list {
    grid-template-columns: repeat(4, 1fr);
  }
}

/* Desktop: 8 icons per row */
@media (min-width: 1200px) {
  .skills-list {
    grid-template-columns: repeat(8, 1fr);
  }
}

/* ICON CARD */
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
  display: block;
  width: 100%;
  height: 100%;
}

.skill:hover {
  transform: scale(1.1);
  cursor: pointer;
}

/* Footer layout */
.skills-footer-columns {
  display: flex;
  justify-content: center; /* center the grid */
  width: 100%;             /* ensure full width like other columns */
}

.skills-footer-columns .skills-list {
  width: 100%;             /* make grid span full width */
  max-width: 1200px;       /* optional: match desktop width of other grids */
}
/* services */
/* Section heading */
h3#service {
    color: #635336;
    margin: 40px auto 0;
    letter-spacing: normal;
}

/* Articles styling */
.services {
    display: flex;
    flex-direction: column; /* stack icon, heading, text vertically */
    align-items: center;    /* center horizontally */
    text-align: center;     /* center heading and paragraph */
    width: 100%;            /* full width in grid column */
    max-width: 220px;       /* optional: limit width */
    padding: 35px 35px 15px;
    background: #faf7eb;
    border: 2px solid #d5cfb9;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.services:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}

/* Icon styling */
.service-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 1rem;
    fill: #635336;
}

/* Article heading */
.services h4 {
    color: #635336;
    margin: 0.5rem 0;
    font-size: 1.2rem;
    line-height: 1.3;
}

/* Article paragraph */
.services p {
    max-width: 300px; /* optional: text width for readability */
    font-size: 0.95rem;
    line-height: 1.5;
}

/* GRID CONTAINER FOR ARTICLES */
.services-grid {
    display: grid;
    grid-template-columns: 1fr;  /* mobile portrait: 1 column */
    gap: 2rem;                   /* space between articles */
    justify-items: center;       /* center each article horizontally */
    padding: 2rem 1rem 0;
}

/* Tablet: 2 columns */
@media (min-width: 600px) {
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Desktop: 3 columns */
@media (min-width: 992px) {
    .services-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Large desktop: 4 columns */
@media (min-width: 1200px) {
    .services-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

p#contact_offer {
    text-align: center;
}
#contact h2 {
    width: 760px;
    margin: 0 40px 30px 0;
}
p#response {
    font-size: 1.6em;
    height: 50px;
    margin: 1em 1.9em 1em 0.7em;
    color: #a2d838;
    text-align: center;
}
#form {
    width: 800px;
    display: inline-block;
}
.form-control {
    position: relative;
    height: auto;
}
form > .form-control {
    width: 96%;
    margin-bottom: 2%;
}
form > .form-control > input,
form > .form-control > textarea {
    width: 96%;
    margin: 0 2%;
    display: block;
    opacity: 0.9;
    font-weight: 400;
    font-family: inherit;
    font-size: 20px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background-color: #fbfbfb;
    border: 2px solid #aaa !important;
    margin-bottom: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: relative;
    resize: none;
    outline: none;
    color: #424242;
    transition: 0.3s;
}
form input {
    padding: 13px 15px 13px 70px;
    line-height: 20px;
    box-sizing: border-box;
}
.form-control label.valid {
    display: inline-block;
    margin-left: 0.7rem;
    position: absolute;
}
textarea {
    padding: 15px 15px 10px 70px;
    box-sizing: border-box;
    height: 220px;
}
.form-icons {
    width: 20px;
    background: #aaa;
}
.form-control svg,
.form-icons {
    position: absolute;
    left: 17px;
    top: 0;
    font-size: 20px;
    color: #aaa;
    padding: 9px 8px;
    transition: 0.3s;
}
.form-control #textarea {
    padding: 99.5px 22px;
}
input:focus, textarea:focus {
    border: 2px solid #0b60d4 !important;
    box-shadow: 0 0 8px 0 #0b60d4;
    outline: none !important;
    color: #0b60d4;
}
.form-control.InputIconBg svg {
    background-color: #aaa;
    color: #fff;
    padding: 16px 23px;
}
input:focus ~ svg,
textarea:focus ~ svg {
    color: #0b60d4;
}
.form-control.InputIconBg input:focus ~ svg,
.form-control.InputIconBg textarea:focus ~ svg {
    background-color: #0b60d4;
    color: #fff;
}
input::placeholder {
    opacity: 0;
}
label.valid {
    display: block;
    border: none;
    top: 1rem;
    left: 5.5rem;
}
label#floated_textarea {
    display: block;
    color: #424242;
    transition: all 0.2s ease-out;
    position: absolute;
    top: 1rem;
    left: 6rem;
}
input:focus ~ label.valid,
input:not(:placeholder-shown) ~ label.valid,
textarea:focus ~ label#floated_textarea,
textarea:not(:placeholder-shown) ~ label.valid {
    font-size: 12px;
    font-weight: 700;
    color: #0b60d4;
    text-transform: uppercase;
}
input:focus ~ label.valid,
input:not(:placeholder-shown) ~ label.valid {
    top: 0.3rem;
    left: 5rem;
}
textarea:focus ~ label#floated_textarea,
textarea:not(:placeholder-shown) ~ label#floated_textarea {
    top: 0.3rem;
    left: 5.5rem;
    color: #0b60d4;
    transition: all 0.2s ease-out;
}
label.error {
    -webkit-transform: translate(5.7rem, 0.6rem);
    -moz-transform: translate(5.7rem, 0.6rem);
    -ms-transform: translate(5.7rem, 0.6rem);
    -o-transform: translate(5.7rem, 0.6rem);
    transform: translate(5.7rem, 0.6rem);
    color: #e74c3c;
    pointer-events: none;
}
.form .btn_submit {
    background: #0d182a;
    color: #fff;
    padding: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    width: 92%;
    margin: 2% 2% 0;
    cursor: pointer;
    outline: none;
    opacity: 0.9;
    display: block;
    font-size: 18px;
    font-weight: 400;
    font-family: inherit;
}
.form .btn_submit:hover {
    background: #050d1a;
    border: 2px solid #01050c;
}
.form .btn_submit:active {
    background: #01050c;
    border: 2px solid #000103;
}
.error {
    color: #e74c3c;
    font-weight: 700;
    margin-left: 2%;
    display: inline;
}
a.social-icon {
    width: 65px;
    height: 65px;
    display: inline-block;
    margin-right: -4px;
}
#support {
    background: #032b62;
    width: 400px;
    height: auto;
    float: right;
    border-radius: 5px;
    padding: 30px 0;

}

#support h3,
#support p {
    color: #fff;
    text-align: center;
    padding: 0 15px;
}

.support {
    display: block;
    text-align: center;
    margin-top: 32px;
}

.support-link {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    text-decoration: none;
    width: 120px;       /* fixed width for all icons */
    height: 120px;      /* fixed height for all icons + label */
    justify-content: center;
    color: #fff;
    background-color: #032b62; /* match container initially */
    border-radius: 8px;
    transition: color 0.25s ease, background-color 0.25s ease;
}
.support svg.icon {
    width: 65px;
    height: 65px;
    color: #FFF;
    transition: fill 0.25s ease;
}

.support-label {
    font-size: 0.8rem;
    color: #fff; /* normal state */
    transition: color 0.25s ease;
}
.support-link:hover {
    color: #032b62;        /* icon + label change together */
    background-color: #fff; /* hover background */
    transform: translateY(-2px);
}
.support-link:hover svg {
   background-color: #fff;
    color: #032b62;
}
.support-link:hover .support-label {
    color: #032b62; /* label matches icon on hover */
}
@media screen and (min-width: 1249px) and (max-width: 1260px) {
    .certificate {
        padding: 25px 25px 5px;
    }
}
@media screen and (min-width: 1232px) and (max-width: 1260px) {
    .services {
        padding: 25px 25px 15px;
    }
}
@media screen and (min-width: 1024px) and (max-width: 1260px) {
    #hero {
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_1260.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_1260@2x.webp") 2x
        );
    }
    #about {
        background-image: image-set(
            url("../images/developmentMirnes_1260.webp") 1x,
            url("../images/developmentMirnes_1260@2x.webp") 2x
        );
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: 1260px 787px;
    }
    
    #form {
        width: 75%;
    }
    #support {
        width: 25%;
    }
}
@media screen and (min-width: 962px) and (max-width: 1260px) {
.cert-images { 
        grid-template-columns: auto auto; /* columns = image width */
        justify-content: center;          /* center the whole pair */
        gap: 40px;                 /* EXACT space between images */
        width: 100%;
        box-sizing: border-box;
        align-items: center;
        justify-items: start;
    }


#certificates h2 {
     width: 100%;
}
   .cert-text {
  grid-column: 1 / -1;
  grid-row: 1;
}
  /* PHP image top-right */
  #PHP {
    grid-row: 2;
    justify-self: end;
}

#WD {
  grid-column: 2;
  grid-row: 2;
  justify-self: start;
}
.cert-item picture {
  width: 400px;
  height: 565px;
  align-items: center;
}

.cert-item img {
  display: block;
  width: 100%;
  height: auto;
}
}

@media screen and (min-width: 832px) and (max-width: 961px) {
.cert-images { 
        grid-template-columns: auto auto; /* columns = image width */
        justify-content: center;          /* center the whole pair */
        gap: 40px;                 /* EXACT space between images */
        width: 100%;
        box-sizing: border-box;
        align-items: center;
        justify-items: start;
    }


#certificates h2 {
     width: 100%;
}
   .cert-text {
  grid-column: 1 / -1;
  grid-row: 1;
}
  /* PHP image top-right */
  #PHP {
    grid-row: 2;
    justify-self: end;
}

#WD {
  grid-column: 2;
  grid-row: 2;
  justify-self: start;
}
.cert-item picture {
  width: 300px;
  height: 464px;
  align-items: center;
}

.cert-item img {
  display: block;
  width: 100%;
  height: auto;
}
}
@media screen and (min-width: 768px) and (max-width: 831px) {
.cert-images { 
        grid-template-columns: auto auto; /* columns = image width */
        justify-content: center;          /* center the whole pair */
        gap: 40px;                 /* EXACT space between images */
        width: 100%;
        box-sizing: border-box;
        align-items: center;
        justify-items: start;
    }


#certificates h2 {
     width: 100%;
}
   .cert-text {
  grid-column: 1 / -1;
  grid-row: 1;
}
  /* PHP image top-right */
  #PHP {
    grid-row: 2;
    justify-self: end;
}

#WD {
  grid-column: 2;
  grid-row: 2;
  justify-self: start;
}
.cert-item picture {
  width: 250px;
  align-items: center;
}

.cert-item img {
  display: block;
  width: 100%;
  height: auto;
}
}
@media screen and (min-width: 768px) and (max-width: 1260px) {
    #aboutme h2 {
        width: 100%;
        margin: 0 auto 40px;
    }
    #support p {
        padding: 100px 20px 50px;
    }
    #contact h2 {
        width: 95%;
    }
}

@media screen and (min-width: 1206px) and (max-width: 1248px) {
    .certificate {
        padding: 20px 20px 5px;
    }
}
@media screen and (min-width: 1188px) and (max-width: 1231px) {
    .services {
        padding: 20px 20px 15px;
    }
}
@media screen and (min-width: 1162px) and (max-width: 1205px) {
    .certificate {
        padding: 15px 15px 5px;
    }
}
@media screen and (min-width: 849px) and (max-width: 1187px) {
    .services {
        width: 300px;
        padding: 30px 30px 15px;
        margin: 40px 40px 0 0;
    }
    .services:nth-of-type(2n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 1124px) and (max-width: 1161px) {
    .certificate {
        padding: 10px 10px 5px;
    }
}
@media screen and (min-width: 1028px) and (max-width: 1123px) {
    .certificate {
        padding: 35px 35px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 1057px) and (max-width: 1112px) {
    .form-control svg {
        left: 16px;
    }
}
@media screen and (min-width: 981px) and (max-width: 1056px) {
    .form-control svg {
        left: 14px;
    }
}
@media screen and (min-width: 962px) and (max-width: 1027px) {
    .certificate {
        padding: 30px 30px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (max-width: 1023px) {
    #hero {
        background-attachment: inherit;
    }
}
@media screen and (min-width: 768px) and (max-width: 1023px) {
    #hero {
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_1023.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_1023@2x.webp") 2x
        );
    }

    #hero {
        background-position: top right;
    }
    #about {
        background-image: image-set(
            url("../images/developmentMirnes_1023.webp") 1x,
            url("../images/developmentMirnes_1023@2x.webp") 2x
        );
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: 1023px 639px;
        padding: 200px 0 40px;
    }
    .services:nth-of-type(2n) {
        margin-right: 0;
    }
    #form {
        width: 75%;
    }
    #support {
        width: 25%;
        height: 658px;
    }
}
@media screen and (min-width: 977px) and (max-width: 980px) {
    .form-control svg {
        left: 14px;
    }
}
@media screen and (min-width: 963px) and (max-width: 976px) {
    .form-control svg {
        left: 15px;
    }
}
@media screen and (min-width: 888px) and (max-width: 962px) {
    .form-control svg {
        left: 14px;
    }
}
@media screen and (min-width: 930px) and (max-width: 961px) {
    .certificate {
        padding: 25px 25px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 924px) and (max-width: 929px) {
    .certificate {
        padding: 20px 20px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 864px) and (max-width: 923px) {
    .certificate {
        padding: 15px 15px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 768px) and (max-width: 886px) {
    .form-control svg {
        left: 13px;
    }
}
@media screen and (min-width: 832px) and (max-width: 863px) {
    .certificate {
        padding: 10px 10px 5px;
    }
    .certificate:nth-of-type(4n) {
        margin-right: 40px;
    }
    .certificate:nth-of-type(3n) {
        margin-right: 0;
    }
}
@media screen and (min-width: 768px) and (max-width: 848px) {
    .services {
        width: 240px;
    }
}
@media screen and (min-width: 768px) and (max-width: 831px) {
    .certificate:nth-of-type(2n) {
        margin-right: 0;
    }
}
@media screen and (max-width: 767px) {
    p#response,
    h4 {
        margin: 1em 0.7em;
        height: auto;
    }
    #aboutme {
        padding: 30px 0;
    }
    #aboutme h2 {
        display: block;
        width: auto;
    }
    .imgLeft {
        display: none;
    }
    #quotes {
        width: auto;
    }
    #certificates {
        padding: 5% 0 0;
    }
    #certificates h2 {
        width: auto;
        display: block;
    }
    .certificate:nth-of-type(2n) {
        margin-right: 0;
    }
    #PHP, #WD {
        float: none;
    }
    #form {
        width: 100%;
    }
    form > .form-control {
        width: 98%;
    }
    form > .form-control > input,
    form > .form-control > textarea {
        width: 98%;
        margin: 0 2%;
    }
    .form-control svg {
        left: 15px;
    }
    .form .btn_submit {
        width: 96%;
        margin: 0 2%;
    }
    #support {
        width: 100%;
        height: auto;
        display: block;
        margin: 40px auto 0;
        text-align: center;
    }
    #support p {
        padding: 50px 0;
    }
}
@media screen and (min-width: 570px) and (max-width: 767px) {
    #mycert {
        clear: both;
    }
}
@media screen and (min-width: 521px) and (max-width: 767px) {
    #support {
        width: 75%;
    }
}
@media screen and (min-width: 409px) and (max-width: 767px) {
    #hero {
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_767.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_767@2x.webp") 2x
        );
        background-size: 767px 900px;
        padding: 35px;
    }
    #home h1 {
        margin: 150px auto;
    }
    #about {
        background-image: image-set(
            url("../images/developmentMirnes_767.webp") 1x,
            url("../images/developmentMirnes_767@2x.webp") 2x
        );
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding: 160px 0 20px;
    }
    #certificates h2 {
        margin: 0 0 5%;
    }
    #PHP,
    #WD {
        display: inline-block;
        margin-bottom: 40px;
    }
    #WD {
        margin-left: 40px;
    }
    #contact h2 {
        width: 100%;
        margin: 0 auto 40px;
    }
}
@media screen and (min-width: 354px) and (max-width: 767px) {
    #support {
        display: block;
        margin: 0 auto;
    }
    .support {
        width: 100px;
        margin: 0 5px 0 0;
        padding: 0 0 50px;
        float: none;
        display: inline-block;
        text-align: center;
        width: 30%;
    }
    .support:last-of-type {
        margin: 0;
    }
}
@media screen and (min-width: 674px) and (max-width: 690px) {
    .form-control svg {
        left: 14px;
    }
}
@media screen and (min-width: 530px) and (max-width: 667px) {
    .form-control svg {
        left: 12px;
    }
}
@media screen and (max-width: 639px) {
    #mycert {
        display: block;
        width: auto;
    }
}
@media screen and (min-width: 612px) and (max-width: 624px) {
    .certificate {
        padding: 30px 30px 15px;
    }
}
@media screen and (min-width: 604px) and (max-width: 624px) {
    .services {
        padding: 30px 30px 15px;
    }
}
@media screen and (min-width: 591px) and (max-width: 611px) {
    .certificate {
        padding: 30px 25px 15px;
    }
}

@media screen and (min-width: 583px) and (max-width: 603px) {
    .services {
        margin: 40px 40px 0 0;
        padding: 30px 10px 15px;
    }
}
@media screen and (min-width: 570px) and (max-width: 590px) {
    .certificate {
        padding: 30px 20px 15px;
    }
}
@media screen and (min-width: 409px) and (max-width: 582px) {
    .services {
        margin: 40px auto 0;
        width: 80%;
        padding: 40px 40px 15px;
    }
    .services:nth-of-type(4) {
        margin-right: auto;
    }
}
@media screen and (max-width: 569px) {
    .certificate {
        width: 80%;
        margin: 0 auto 40px;
    }
}
@media screen and (min-width: 409px) and (max-width: 529px) {
    .form-control svg {
        left: 9px;
    }
}



@media screen and (min-width: 354px) and (max-width: 450px) {
    #support {
        width: 90%;
    }
}
@media screen and (min-width: 429px) and (max-width: 460px) {
    #services h2 {
        margin-bottom: 30px;
    }
}
@media screen and (max-width: 408px) {
    #home h1 {
        margin: 140px auto;
        padding: 20px;
    }
    #hero {
        background-image: image-set(
            url("../images/bg<?php echo $rnd ?>_408.webp") 1x,
            url("../images/bg<?php echo $rnd ?>_408@2x.webp") 2x
        );
        padding: 20px;
    }
    #about {
        background-image: image-set(
            url("../images/developmentMirnes_408.webp") 1x,
            url("../images/developmentMirnes_408@2x.webp") 2x
        );
        padding: 0;
    }
    p#response,
    h4 {
        margin: 1em 0.7em;
        height: auto;
    }
    #certificates h2 {
        margin: 0 0 30px;
        padding: 5px 0;
    }
    .certificate {
        width: auto;
        display: block;
    }
    .certificate,
    .certificate:nth-of-type(4n) {
        float: none;
        margin: 0 0 40px;
        padding: 35px 15px 15px;
    }
    .certificate:nth-of-type(2n) {
        margin-right: auto;
    }
    #services h2 {
        margin-bottom: 30px;
    }
    #contact h2 {
        margin: 0 auto 30px;
        width: 96%;
    }
    #services {
        text-align: center;
    }
    .services,
    .services:nth-of-type(4) {
        width: 80%;
        padding: 2.5%;
        margin: 40px auto 0;
        display: inline-block;
    }
    #services h3#service {
        padding: 0 0.2em;
    }
    #contact {
        padding-top: 40px;
    }
    .support {
        margin-top: 0;
        margin-bottom: 50px;
    }
    
}
@media screen and (min-width: 389px) and (max-width: 408px) {
    #PHP,
    #WD {
        display: inline-block;
        margin-bottom: 20px;
    }
    #WD {
        margin-left: 20px;
    }
}
@media screen and (min-width: 354px) and (max-width: 408px) {
    h1 {
        font-size: 2.5em;
        margin: 1.4em 0 1em;
    }
}
@media screen and (min-width: 320px) and (max-width: 408px) {
    #home h1 {
        margin: 100px auto;
    }
    .form-control svg {
        left: 7px;
    }
}
@media screen and (min-width: 210px) and (max-width: 408px) {
    h2 {
        font-size: 1.7em;
    }
    label#floated_textarea {
        left: 5.5rem;
    }
    textarea:focus ~ label#floated_textarea,
    textarea:not(:placeholder-shown) ~ label#floated_textarea {
        left: 5rem;
    }
}
@media screen and (max-width: 388px) {
    #PHP,
    #WD,
    .ita {
        width: auto;
        height: auto;
        display: block;
    }
    #PHP,
    #WD {
        width: auto;
        margin: 0 auto 30px;
        float: none;
    }
}
@media screen and (min-width: 202px) and (max-width: 328px) {
    #quotes {
        padding: 0;
    }
    #quotes h2 {
        padding: 15px 0;
    }
    #quotes br.none {
        display: none;
    }
}
@media screen and (max-width: 342px) {
    p#response,
    h4 {
        font-size: 1.3em;
    }
}

@media screen and (max-width: 209px) {
    #aboutme h2,
    #certificates h2,
    #services h2,
    #contact h2 {
        font-size: 1.5em;
    }
    .form-control svg {
        left: 5px;
    }
    .form-control.InputIconBg svg {
        padding: 15px;
    }
    .form-control i.fas.fa-pencil-alt {
        padding: 99.5px 15px;
    }
    .form-control label.valid {
        margin-left: -8%;
    }
    label#floated_textarea {
        left: 4rem;
    }
    textarea:focus ~ label#floated_textarea,
    textarea:not(:placeholder-shown) ~ label#floated_textarea {
        left: 3.5rem;
    }
}
@media screen and (max-width: 201px) {
    #quotes {
        display: none;
    }
}
@media screen and (max-width: 108px) {
    .services,
    .services:nth-of-type(4) {
        width: 90%;
        padding: 5%;
    }
}
@media print {
    #hero,
    #about,
    #quotes,
    .certificate,
    #PHP,
    #WD,
    #LinkedIn,
    #contact_me,
    #support p {
        display: none;
    }
    #aboutme p,
    #mycert {
        padding-right: 50px;
    }
    #certificates {
        padding-top: 0;
    }
    #aboutme h2,
    #certificates h2,
    #services h2,
    .services,
    .services h4,
    h2,
    section#contact p#contact_offer,
    #support {
        background: #fff;
        color: #000;
    }
    .services {
        padding: 35px 30px 15px;
        margin: 0 25px 25px 0;
        width: 194px;
    }
    .services h4 {
        font-size: 1.2em;
    }
    #home h1,
    #certificates h2,
    #mycert,
    #contact,
    #support {
        width: 100%;
        display: block;
        margin: 0 auto;
        background: #fff;
        color: #000;
    }
    #services h3#service {
        color: #000;
    }
    #aboutme h2 {
        display: inline;
        padding-left: 140px;
    }
    #contact,
    #support {
        height: 300px;
    }
}
</style>