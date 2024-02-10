<?php
	require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php		
	$title="403 Forbidden";
	$meta['description']="Forbidden to view the site&#39;s folders!";
	$og_url="https://mirnesglamocic.com/error403.html";
	$og_image="https://mirnesglamocic.com/images/frontend_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/frontend_og.webp";
	$css="error.min.css";
	include './inc/head.php';
?>
<body>
<?php 	
  include './inc/header.php'; 
?>
<div class="wrapper">
<h1>Forbidden</h1>
<div id="main">
	<p id="error"><b><i>&#34;You don't have permission to access this resource.&#34;</i></b></p>
</div><!-- end #main -->
</div><!-- end .wrapper -->
<?php include_once './inc/footer.php';//end #footer?>

</body>
</html>