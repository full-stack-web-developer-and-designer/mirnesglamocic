<head>
<meta charset="UTF-8">
<!--
Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: https://mirnesglamocic.com
-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($meta['description']) ?>">
<meta name="author" content="Mirnes Glamočić">
<meta name="robots" content="index,follow">
<meta name="theme-color" content="#273142;">
<!-- Facebook, Viber, LinkedIn, Whatsapp & KakaoTalk(meta tags) -->
<meta property="og:url" content="<?= htmlspecialchars($og_url) ?>">
<meta property="og:type" content="website">
<meta property="og:image" itemprop="image" content="<?= htmlspecialchars($og_image) ?>">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= htmlspecialchars($title) ?>">
<meta property="og:site_name" content="<?= htmlspecialchars($title) ?>">
<meta property="og:locale" content="en_US">
<meta property="fb:app_id" content="1568922700258839">
<!-- LinkedIn, Whatsapp & KakaoTalk(meta tag) -->
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
<meta itemprop="description" content="<?= htmlspecialchars($meta['description']) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($twitter_image) ?>">
<meta name="twitter:image:alt" content="<?= htmlspecialchars($title)?>">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="mirnesglamocic.com/">
<meta itemprop="description" content="<?= htmlspecialchars($meta['description']) ?>">
<meta itemprop="image" content="<?= htmlspecialchars($og_image) ?>">
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
<link rel="canonical" href="<?= htmlspecialchars($og_url) ?>">
<!-- Custom CSS -->
<link rel="stylesheet" href="/CSS/style.min.css" media="all">
<link rel="stylesheet" href="/CSS/<?= htmlspecialchars($css) ?>" media="all">
<!-- lightslider CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet">
<!-- lightbox css -->
<link rel="stylesheet" type="text/css" href="/lightbox2/src/css/lightbox.min.css">
<!-- progressive-image CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/schema.php'; ?>
</head>