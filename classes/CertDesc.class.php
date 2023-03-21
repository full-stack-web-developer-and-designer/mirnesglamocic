<?php
class CertDesc extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.cert_desc;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $fontawesome_icon=$row['fontawesome_icon'];
			$title=$row['title'];
            $first_part=$row['first_part'];
            $second_part=$row['second_part'];
            $href=$row['href'];

            echo "<article class='certificate'>
            <span><i class='$fontawesome_icon' aria-hidden='true'></i></span>
            <h3>$title</h3>
            <p class='intro'>$first_part<br><br>$second_part</p>
            <p><a href='$href' class='button'>VIEW CERTIFICATES &raquo;</a></p>
        </article>";
            }
        }
    }