<?php
class Slider extends ConnectSlider {
	// Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
	$sql = "SELECT * FROM mirnesglamocic_cert.certifications ORDER BY rand();";
	$stmt = $this->__connect()->query($sql);
	
	while($row = $stmt->fetch()) {
		echo "<li class='item-a'><article class='product'>
		<a href=\"cert/BIG/'.$picture.'\" data-lightbox='image-group'><img src=\"cert/SMALL/'.$picture.'\" alt=\"'.$alt.'\" class=\"'.#class.'\"></a></article></li>";
		}
	}
}