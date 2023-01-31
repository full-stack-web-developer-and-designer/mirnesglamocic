<?php
class PHPSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesglamocic_cert.certifications WHERE skill='PHP' AND class='LinkedIn' OR skill='PHP MySQL' OR skill='PHP WebDesigners' OR skill='Linux PHP' OR skill='WordPress PHP' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while($row = $stmt->fetch()) {
        	$picture = $row['picture'];
			$alt = $row['alt'];
            $class = $row['class'];
            echo "<li class='item-a slide'>
            <article>
            <a href='./cert/BIG/$picture' data-lightbox='image-group'><img src='./cert/SMALL/$picture' alt=\"$alt\" class=\"$class\"></a>
            </article></li>";
            }
        }
    }