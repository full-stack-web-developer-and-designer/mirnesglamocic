<?php
class WebDesignPathSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.certifications WHERE skill='WebDesignPath' OR skill='UX Intro WebDesign' OR skill='Frontend WebDesign' OR skill='FrontendIntro WebDesign' OR skill='FrontendIntro UX WebDesign' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while($row = $stmt->fetch()) {
        	$picture = $row['picture'];
			$alt = $row['alt'];
            $class = $row['class'];
            echo "<li class='item-a slide'>
            <article class='cert'>
            <a href='./cert/BIG/$picture' data-lightbox='image-group'><img src='./cert/SMALL/$picture' alt=\"$alt\" class=\"$class\" loading=\"lazy\"></a>
            </article></li>";
            }
        }
    }