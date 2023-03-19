<?php
class JavaScriptSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesglamocic_cert.certifications WHERE skill='JavaScript' AND class='LinkedIn preview' OR skill='JavaScript WebDesign' OR skill='JavaScript WebDesigners' OR skill='JavaScript JSON' ORDER BY rand();";
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