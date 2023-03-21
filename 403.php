<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php		
	$title="Error 403";
	$og_title="Error 403";
	$website_url="www.mirnesglamocic.com/";
	$meta['description']="Forbidden to view the site&#39;s folders!";
	$meta['keywords']="";
	$og_image="images/error.403.png";
	$image_alt="Error 403!";
	include 'inc/head.php';
?>
<style>
.accomodation #main {margin: 0 0 10px 0;}
#main p{text-align: center;}
</style><!-- end #head -->
<body class="accomodation">
<div id="wrapper">
<header id="header" class="cf">
<?php 	
  include './inc/header.php'; 
?>
</header><!-- end #header -->
<div id="main"><p><b><i>&#34;You are forbidden to view the site&#39;s folders!&#34;</i></b></p></div>
<?php
	include './inc/footer.php';
	//end #footer
?>
