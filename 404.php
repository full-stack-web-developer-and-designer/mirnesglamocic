<?php
	require_once 'core/init.php';
	$head = Head::get(16);
    $page_id=16;
    $page = Pages::get(16);
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">

	<?php echo $head->renderHead(); ?>
	
	<body>
		
		<?php require_once BASE_PATH . '/inc/header.php'; ?>
		
		<main>

			<div class="wrapper">
				
				<?php echo $page->renderPage(); ?>

				<div id="main">
					<p id="error"><b><i>&#34;The requested URL was not found on this server.&#34;</i></b></p>
				</div><!-- end #main -->

			</div><!-- end .wrapper -->

		</main>

		<?php include_once './inc/footer.php'; //end #footer?>

	</body>
	
</html>