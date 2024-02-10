<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html itemscope lang="en">
<?php
	$title="Version Control certificates of IT expert Mirnes Glamočić";
	$meta['description']="See the Version Control certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina. The best of the best!";
	$og_url="https://mirnesglamocic.com/gitcertificates.html";
	$og_image="https://mirnesglamocic.com/images/git_og.jpg";
	$twitter_image="https://mirnesglamocic.com/images/git_og.webp";
	$css = "certificates.min.css";
	include './inc/head.php';
?>
<body>
	<?php include 'inc/header.php';?>
	<div class="wrapper">
		<h1>Version Control Certificates</h1>
	
		<section class="slider-container" aria-label="GIT certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
			<ul class="content-slider cs-hidden">
			<!-- slider box -->
				<?php
					$Git = new GitSlide();
					$Git->renderSlider();
					$Vcs = new VcsSlide();
					$Vcs->renderSlider();
				?>
			</ul>
		</section><!--end .slider-container-->

		<section class="slider-container" aria-label="GitHub certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina">
			<ul class="content-slider cs-hidden">
			<!-- slider box -->
				<?php
					$GitHub = new GitHubSlide();
					$GitHub->renderSlider();
				?>
			</ul>
		</section><!--end .slider-container-->
	</div><!--end .wrapper-->
<?php include_once './inc/footer.php';//end #footer?>
</body>
</html>