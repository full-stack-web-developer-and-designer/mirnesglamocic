<head>
<!--
Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: https://mirnesglamocic.com
-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $meta['description']; ?>">
<meta name="author" content="Mirnes Glamočić">
<meta name="robots" content="index,follow">
<meta name="theme-color" content="#273142;">
<!-- Facebook & Viber -->
<meta name="title" property="og:title" content="<?php echo $title;?>">
<!-- Facebook, Viber, LinkedIn, Whatsapp & KakaoTalk(meta tags) -->
<meta property="og:url" content="<?php echo $og_url;?>">
<meta property="og:type" content="website">
<meta property="og:image" itemprop="image" content="<?php echo $og_image;?>">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?php echo $title;?>">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:locale" content="en_us">
<meta property="fb:app_id" content="1568922700258839">
<!-- LinkedIn, Whatsapp & KakaoTalk(meta tag) -->
<meta property="og:title" content="<?php echo $title;?>">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $meta['description'];?>">
<meta name="twitter:image:src" content="<?php echo $twitter_image;?>">
<meta name="twitter:image:alt" content="<?php echo $title;?>">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="mirnesglamocic.com/">
<meta itemprop="description" content="<?php echo $meta['description'];?>">
<meta itemprop="image" content="Mirnes Glamočić">
<!-- include google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700%7CRoboto:400,400i,700,700i&display=swap&amp;subset=latin-ext" rel="stylesheet">
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<link rel="android-chrome-icon" sizes="192x192" href="./android-chrome-192x192.png">
<link rel="canonical" href="<?php echo $og_url;?>">
<!-- Custom CSS -->
<link rel="stylesheet" href="/CSS/style.min.css" media="all">
<link rel="stylesheet" href="/CSS/<?php echo $css;?>" media="all">
<!-- lightslider CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet">
<!-- lightbox css -->
<link rel="stylesheet" type="text/css" href="/lightbox2/src/css/lightbox.min.css">
<!-- page reload if the user changes mobile orientation -->
<script>
    window.onorientationchange=function(){var a=window.orientation;switch(a){case 0:case 90:case -90:window.location.reload()}};
</script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- include jQuery if cdn fails-->
<script>
	window.jQuery || document.write("<script src='./JS/jquery-1.7.2.min.js'><\/script>");
</script>
<!-- picturefill -->
<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js" integrity="sha512-Nh/FthCqOFq56kGp1DsNb6GKK29iIv2ZJc7Fylln1WRrWpeE5LjSBWeAp61dkBASDxZT12aL9mZyIrhsAqgRpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- include picturefill if cdn fails-->
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
</script></head>
