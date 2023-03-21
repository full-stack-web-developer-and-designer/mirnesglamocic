<?php
class ServicesSlide extends Slider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.services";
        $stmt = $this->__connect()->query($sql);

        while($row = $stmt->fetch()) {
        	$service_img = $row['service_img'];
			$service_alt = $row['service_alt'];
            $title = $row['title'];
            $description = $row['description'];
            echo "<article class='services'>
                    <img src=\"./services/$service_img\" alt=\"$service_alt\" class='usluge'><h4>$title</h4><p>$description</p>
                  </article>";
            }
        }
    }