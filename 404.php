<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$title="404 Not Found! ";
	$meta['description']="The requested URL was not found on this server!";
	$og_url="https://mirnesglamocic.com/error403.html";
	$og_image="https://mirnesglamocic.com/images/404_og.png.jpg";
	$twitter_image="https://mirnesglamocic.com/images/404_og.png.webp";
	$css="error.min.css";
include './inc/head.php';
?>
<body>
<div id="wrapper">
<?php 
 // echo $postArr->render(); 	
  include './inc/header.php'; 
?>
<div class="wrapper">
<h1>Not Found</h1>
<div id="main">
	<p id="error"><b><i>&#34;The requested URL was not found on this server.&#34;</i></b></p>
</div><!-- end #main -->
</div><!-- end .wrapper -->
<?php include_once './inc/footer.php';//end #footer?>
</body>
</html>