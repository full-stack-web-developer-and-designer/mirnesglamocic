<?php
class Skills extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesglamocic_cert.skills;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $help_tip=$row['help_tip'];
            $img=$row['img'];
            $picturefill_img=$row['picturefill_img'];
			$alt=$row['alt'];


            echo "<div class='tooltip'><div class='help_tip'><p>$help_tip</p></div></div><img src=\"./images/$img\" srcset=\"./images/$picturefill_img\" alt='$alt' class='skill'>";
            }
        }
    }