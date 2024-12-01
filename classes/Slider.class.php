<?php
class Slider extends ConnectSlider {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
	$sql = "SELECT * FROM mirnesgl_korea.certifications ORDER BY rand();";
	$stmt = $this->__connect()->query($sql);
	
	while($row = $stmt->fetch()) {
		echo "<li class='item-a slide'>
		<article class='cert'>
		<a href='./cert/BIG/$picture.webp' data-href='./cert/SMALL/$picture.webp' class='progressive replace' data-lightbox='image-group'><img src='./cert/SMALL/$picture.webp' alt=\"$alt by Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\" class=\"$class\" loading=\"lazy\"></a>
		</article></li>";
		}
	}
}