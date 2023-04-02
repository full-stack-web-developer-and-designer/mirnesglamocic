<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$fb_title="Error 404 - Page not found! ";
	$meta['og_description']="";
	$og_url="";
	$og_image="https://mirnesglamocic.com/images/404_og.png.jpg";
	$og_image_alt=$fb_title;
	$linkedin_title=$fb_title;
	$title=$fb_title;
	$meta['description']="";
	$twitter_image="https://mirnesglamocic.com/images/404_og.png.webp";
	$meta['keywords']="";
include './inc/head.php';
?>
<style>
.error_page #main {margin: 40px 0;}
#main p{text-align: center;
		color: #B47814; }
</style><!-- end #head -->

<body class="error_page">
<div id="wrapper">
<header id="header" class="cf">
<?php 
 // echo $postArr->render(); 	
  include './inc/header.php'; 
?>
</header><!-- end #header -->
<div id="main"><p><b><i>&#34;The requested page does not exist!<br>Please check if you entered the address correctly!&#34;</i></b></p></div>
<?php
	include './inc/footer.php';
	//end #footer
?>
