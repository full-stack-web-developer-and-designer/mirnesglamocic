<!--
Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: https://mirnesglamocic.com
-->
<head id="head">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $title; ?></title>
<!-- meta tags -->
<meta name="robots" content="index,follow">
<meta name="description" content="<?php echo $meta['description']; ?>"/>
<meta name="keywords" content="<?php echo $meta['keywords']; ?>"/>
<meta name="theme-color" content="#0648a0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Mirnes Glamočić">
<!-- Facebook (meta tags) -->
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php echo $title;?>"/>
<meta property="og:description" content="<?php echo $meta['og_description'];?>">
<meta property="og:url" content="<?php echo $og_url;?>"/>
<meta property="og:image:secure_url" itemprop="image" content="<?php echo $og_image;?>"/>
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="<?php echo $og_image_alt;?>" />
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:locale" content="en_us" />
<meta property="fb:app_id" content="1568922700258839"/>
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $meta['description'];?>">
<meta name="twitter:image:src" content="<?php echo $twitter_image;?>">
<meta name="twitter:image:alt" content="<?php echo $og_image_alt;?>">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="mirnesglamocic.com/">
<meta itemprop="description" content="<?php echo $meta['description'];?>">
<meta itemprop="image" content="Mirnes Glamočić">
<!-- include google fonts -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,400i,700,700i|Dancing+Script&display=swap&amp;subset=latin-ext" rel="stylesheet">
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="canonical" href="https://mirnesglamocic.com/" />
<!-- include fontawesome --> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c3fb2ab6eb.js" crossorigin="anonymous"></script>
<!-- Custom CSS -->
<link rel="stylesheet" href="/CSS/style.css" media="all"/>
<!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jQuery-1.7.2.min.js'><\/script>");
</script>
<!-- lightslider CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet"/>
<!-- lightslider js-->
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<!-- lightbox css -->
<link rel="stylesheet" type="text/css" href="./lightbox2/src/css/lightbox.min.css">
<!--jQuery validate plugin -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<noscript><p class="errorJS">To display the page correctly, please enable JavaScript in your browser!</p></noscript>
<!-- responsive navigation -->
<script>
var navigation=$.noConflict();navigation(document).ready(function(n){var e=n("#respmenu"),i=n("#nav>ul");n(e).on("click",function(n){n.preventDefault(),i.toggleClass("open")}),n(window).resize(function(){n(window).width()>768&&i.is(":hidden")&&i.removeAttr("style")})});
</script>
<script defer>
window.onorientationchange=function(){var a=window.orientation;switch(a){case 0:case 90:case -90:window.location.reload()}};
</script>
<!-- picturefill -->
<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js" integrity="sha512-Nh/FthCqOFq56kGp1DsNb6GKK29iIv2ZJc7Fylln1WRrWpeE5LjSBWeAp61dkBASDxZT12aL9mZyIrhsAqgRpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
	window.jQuery || document.write("<script src='./JS/picturefill.min.js'><\/script>");
  </script>
<!-- lazy loading images -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css">
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/polyfills.js"></script>
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/webp-hero.bundle.js"></script>
<script>
 var webpMachine = new webpHero.WebpMachine();
 webpMachine.polyfillDocument();
</script>
</head>