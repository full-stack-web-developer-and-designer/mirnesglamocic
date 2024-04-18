<?php
	require_once 'core/init.php';
	$head = Head::get(15);
    $page_id=15;
    $page = Pages::get(15);
?>
<!DOCTYPE html>
<html itemscope lang="en">
	<?php
		echo $head->render();
	?>
	<body>
		<?php include 'inc/header.php';?>
		<div class="wrapper">

			<?php echo $page->render(); ?>

			<div id="main">
				<p id="error"><b><i>&#34;You don't have permission to access this resource.&#34;</i></b></p>
			</div><!-- end #main -->

		</div><!-- end .wrapper -->
		<?php include_once './inc/footer.php';//end #footer?>
	</body>
</html>