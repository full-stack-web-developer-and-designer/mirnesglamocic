<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php	
	$title="Error 404!";
	$og_title="Error 404!";
	$website_url="www.mirnesglamocic.com/";
	$meta['description']="Error 404!";
	$meta['keywords']="";
	$og_image="./images/error.404.png";
	$image_alt="Error 404!";
	include 'inc/head.php';	
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
<div id="main"><p><b><i>"The requested page does not exist!<br>Please check if you entered the address correctly!"</i></b></p></div>
<?php
	include 'inc/footer.php';
	//end #footer
?>
