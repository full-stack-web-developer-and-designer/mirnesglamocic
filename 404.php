<?php
	require_once 'core/init.php';
	$head = Head::get(16);
    $page_id=16;
    $page = Pages::get(16);
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php
		echo $head->renderHead();
	?>
	<body>
		<div id="wrapper">
		<?php 
		// echo $postArr->render(); 	
		include './inc/header.php'; 
		?>
		<div class="wrapper">
			
			<?php echo $page->renderPage(); ?>

			<div id="main">
				<p id="error"><b><i>&#34;The requested URL was not found on this server.&#34;</i></b></p>
			</div><!-- end #main -->

		</div><!-- end .wrapper -->
		<?php include_once './inc/footer.php';//end #footer?>
	</body>
</html>