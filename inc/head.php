<head id="head">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<!-- meta tags -->
<meta name="robots" content="index,follow">
<meta name="description" content="<?php echo $meta['description']; ?>"/>
<meta name="keywords" content="<?php echo $meta['keywords']; ?>"/>
<meta name="theme-color" content="#e84e1b">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Mirnes Glamočić">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="mirnesglamocic.com/">
<meta itemprop="description" content="<?php echo $meta['description'];?>">
<meta itemprop="image" content="<?php echo $og_image;?>">
<!-- Facebook (meta tags) -->
<meta property="og:title" content="<?php echo $og_title;?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $website_url;?>"/>
<meta property="og:www.mirnesglamocic.com" content="mirnesglamocic"/>
<meta property="fb:admins" content="Mirnes Glamočić"/>
<meta property="og:description" content="<?php echo $meta['description'];?>">
<meta property="og:locale" content="en" />
<meta property="og:image" content="<?php echo $og_image;?>"/>
<meta property="og:site_name" content="mirnesglamocic.com">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="mirnesglamocic.com">
<meta name="twitter:title" content="<?php echo $title;?>">
<meta name="twitter:description" content="<?php echo $meta['description'];?>">
<meta name="twitter:image" content="<?php echo $og_image;?>">
<meta name="twitter:image:alt" content="<?php //echo $image_alt;?>">
<!-- include google fonts -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,400i,700,700i|Dancing+Script&display=swap&amp;subset=latin-ext" rel="stylesheet">
<link rel="icon" href="images/iconified/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon-iphone-60x60.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-ipad-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-iphone-retina-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-ipad-retina-152x152.png">
<link rel="canonical" href="https://mirnesglamocic.com/" />
<!-- include picturefill -->
<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="./JS/picturefill.min.js" async></script>
<!-- include fontawesome --> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c3fb2ab6eb.js" crossorigin="anonymous"></script>
<!-- lightslider CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet"/>
<!-- Custom CSS -->
<link rel="stylesheet" href="./CSS/style.css" media="all"/>
<link rel="stylesheet" href="./CSS/responsive.css" media="all"/>
<!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	window.jQuery || document.write("<script src='./JS/jQuery-1.7.2.js'><\/script>");
</script>
<!-- lightslider js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

<!--jQuery validate plugin -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- lightbox css -->
<link rel="stylesheet" type="text/css" href="/lightbox2/src/css/lightbox.css">
<noscript><p class="errorJS">To display the page correctly, please enable JavaScript in your browser!</p></noscript>
<title><?php echo $title; ?></title>
<!-- picturefill -->
<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="./JS/picturefill.min.js" async></script>
<!-- responsive navigation -->
<script>
var navigation=$.noConflict();
	navigation(document).ready(function($) {
		var respmenu = $('#respmenu');
		var menu = $('#nav>ul');
		$(respmenu).on('click', function(e){
			e.preventDefault();
			menu.toggleClass("open");
		});
		$(window).resize(function(){
			var sirina = $(window).width();
			if(sirina > 768 && menu.is(':hidden')){
				menu.removeAttr('style');
			}
		});
	});
</script>
<script defer>
window.onorientationchange = function() { 

    var orientation = window.orientation; 

        switch(orientation) { 

            case 0:

            case 90:

            case -90: window.location.reload(); 

            break; } 

};
</script>

</head>