<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
	$title="Docker certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Docker certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina.";
	$og_url="https://mirnesglamocic.com/dockercertificates.html";
	$og_image="https://mirnesglamocic.com/images/docker-og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/docker-og.webp";
	$css = "certificates.min.css";
	include './inc/head.php';
?>
<body class="development">
	<?php include 'inc/header.php';?>
		<div class="wrapper">
			<h1>Docker Certificates</h1>
			<section class="slider-container" aria-label="Docker certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
				<ul class="content-slider cs-hidden">
				<!-- slider box -->
					<?php
						$docker = new DockerSlide();
						$docker->renderSlider();
					?>
				</ul>
			</section><!--end .slider-container-->
		</div><!--end .wrapper-->
	<?php include_once './inc/footer.php';//end #footer?>
</body>
</html>