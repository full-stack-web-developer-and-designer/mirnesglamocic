<?php
class WebDesignSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.certifications WHERE skill='WebDesign' OR skill='UX Web Design' OR skill='JavaScript WebDesign' OR skill='HTML WebDesign' OR skill='HTMLandCSS WebDesign' OR skill='CSS WebDesign' OR skill='WebServices WebDesign' OR skill='Bootstrap WebDesign' OR skill='SASS WebDesign' OR skill='WebDevelopment WebDesign' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while($row = $stmt->fetch()) {
        	$picture = $row['picture'];
			$alt = $row['alt'];
            $class = $row['class'];
            echo "<li class='item-a slide'>
            <article class='cert'>
            <a href='./cert/BIG/$picture' data-href='./cert/SMALL/$picture' class='progressive replace' data-lightbox='image-group'><img src='./cert/SMALL/$picture' alt=\"$alt\" class=\"$class\" loading=\"lazy\"></a>
            </article></li>";
            }
        }
    }