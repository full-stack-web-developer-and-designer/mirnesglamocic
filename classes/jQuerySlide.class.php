<?php
class jQuerySlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesglamocic_cert.certifications WHERE skill='jQuery' AND class='LinkedIn margin-top' OR skill='jQuery WebDesigners' ORDER BY rand();";
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