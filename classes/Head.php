<?php
    /**
     * Head.php
     * 
     * Handles rendering of the <head> section for the website.
     * Includes meta tags, favicon, CSS, fonts, Open Graph, Twitter cards, etc.
     * 
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     * Created: 2023
     * Updated: 2026-01-27
     * 
     * Usage:
     *   $head = Head::get($pageId);
     *   echo $head->renderHead();
     */

class Head extends Entity
{
    protected static string $tableName = 'meta';
    protected static string $keyColumn = 'meta_id';
    public int $meta_id;
    public int $page_id;
    public string $title;
    public string $description;
    public string $created_at;
    public string $updated_at;
    public $og_url;
    public $og_image;
    public $twitter_image;
    public $css;
    
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderHead(): string
{
    // 1️⃣ ENV + choose CSS filenames
    $isLocal = (defined('ENV') && ENV === 'development');
    $mainCssFile = 'style.css';

    if (!$isLocal) {
        $minFile = 'style.min.css';
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/CSS/' . $minFile)) {
            $mainCssFile = $minFile;
        }
    }

    // Page-specific CSS from DB
    $cssFile = $this->css ?? '';
    $cssFile = ltrim($cssFile, '/');
    $cssFile = basename($cssFile);

    if ($cssFile && !$isLocal && !preg_match('/\.min\.(css|php)$/', $cssFile)) {
        $minFile = preg_replace('/\.(css|php)$/', '.min.$1', $cssFile);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/CSS/' . $minFile)) {
            $cssFile = $minFile;
        }
    }

    // 2️⃣ BUILD CACHE-BUSTED CSS URLS  ← PUT IT HERE
    $mainCssHref = asset('/CSS/' . $mainCssFile);

    $pageCssHref = '';
    if (!empty($cssFile)) {
        $pageCssHref = asset('/CSS/' . $cssFile);
    }


        
        // Escape all dynamic content
        $title = htmlspecialchars($this->title, ENT_QUOTES | ENT_HTML5);
        $description = htmlspecialchars($this->description, ENT_QUOTES | ENT_HTML5);
        $ogUrl = htmlspecialchars($this->og_url, ENT_QUOTES | ENT_HTML5);
        $ogImage = htmlspecialchars($this->og_image, ENT_QUOTES | ENT_HTML5);
        $twitterImage = htmlspecialchars($this->twitter_image, ENT_QUOTES | ENT_HTML5);
        
        // Capture the schema.php output as string
        $schemaHtml = '';
        $schemaFile = $_SERVER['DOCUMENT_ROOT'] . '/partials/schema.php';
        if (file_exists($schemaFile)) {
            ob_start();
            include $schemaFile;
            $schemaHtml = ob_get_clean();
        }

        return <<<HTML
        <head>
            
            <!-- Wow! Welcome to my code. If you need a professional website don't hesitate to contact me: https://mirnesglamocic.com -->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>{$title}</title>
            <meta name="description" content="{$description}">
            <meta name="author" content="Mirnes Glamočić">
            <meta name="robots" content="index,follow">
            <meta name="theme-color" content="#1E3A8A">
            
            <!-- Open Graph -->
            <meta property="og:title" content="{$title}">
            <meta property="og:url" content="{$ogUrl}">
            <meta property="og:type" content="website">
            <meta property="og:image:type" content="image/jpeg">
            <meta property="og:image:width" content="1200">
            <meta property="og:image:height" content="630">
            <meta property="og:image" content="{$ogImage}">
            <meta property="og:image:alt" content="{$title}">
            <meta property="og:site_name" content="{$title}">
            <meta property="og:locale" content="en_US">
            <meta property="fb:app_id" content="1568922700258839">
            
            <!-- Twitter -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="{$title}">
            <meta name="twitter:description" content="{$description}">
            <meta name="twitter:image:src" content="{$twitterImage}">
            <meta name="twitter:image:alt" content="{$title}">
            
            <!-- Google / Search Engine Tags -->
            <meta itemprop="name" content="Mirnes Glamočić – Web Developer & Designer">
            <meta itemprop="description" content="{$description}">
            <meta itemprop="image" content="{$ogImage}">
            
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Oswald:400,700%7CRoboto:400,400i,700,700i&display=swap&amp;subset=latin-ext" rel="stylesheet">
            
            <!-- Favicon -->
            <link rel="icon" type="image/svg+xml" href="/favicon.svg">
            <link rel="shortcut icon" href="/favicon.ico">
            <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
            <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
            <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
            <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
            <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
            <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
            <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
            <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
            <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/manifest.json">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
            <link rel="manifest" href="/site.webmanifest">
            <!-- Optional for Safari pinned tabs -->
            <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

            <!-- canonical -->
            <link rel="canonical" href="{$ogUrl}">
            
            <!-- CSS -->
            <link rel="stylesheet" href="{$mainCssHref}" media="all">
            <link rel="stylesheet" href="{$pageCssHref}" media="all">

            <!-- lightslider CSS-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet">
            
            <!-- lightbox css -->
            <link rel="stylesheet" type="text/css" href="/lightbox2/src/css/lightbox.min.css">
            
            <!-- progressive-image CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css">
            
            <!-- Schema -->
            {$schemaHtml}
        </head>
        HTML;
    }
}