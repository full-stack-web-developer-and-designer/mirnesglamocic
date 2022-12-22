<?php
class ITA extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesglamocic_cert.ita_certificates;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
			$title = $row['title'];
            $picture_PHP = $row['picture_PHP'];
            $alt_PHP = $row['alt_PHP'];
            $picture_WD = $row['picture_WD'];
            $alt_WD = $row['alt_WD'];
            $part_1=$row['part_1'];
            $part_2=$row['part_2'];
            $part_3 =$row['part_3'];
            $part_4 =$row['part_4'];
            $part_5 =$row['part_5'];

            echo "<h2>$title</h2><article id='PHP'><a href='./images/BIG/$picture_PHP' data-lightbox='image-group'><img src='images/$picture_PHP' alt=\"$alt_PHP\"></a></article><article id='WD'><a href='./images/BIG/$picture_WD' data-lightbox='image-group'><img src='images/$picture_WD' alt=\"$alt_WD\"></a></article><article id='mycert'><br><p>$part_1</p><br><p>$part_2</p><br><p>$part_3</p><br> <p>$part_4</p><br><p>$part_5</p>
            </article>";
            }
        }
    }