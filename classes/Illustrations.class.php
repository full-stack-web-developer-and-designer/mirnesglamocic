<?php
class Illustrations extends ConnectSlider{
     // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.projects WHERE article='illustration' ORDER BY projects_id DESC;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $article = $row['article'];
			$image = $row['image'];
            $alt = $row['alt'];
            $content = $row['content'];

            echo "<article class=\"$article\"><a href=\"./illustrations/BIG/$image.jpg\" data-lightbox=\"illustrations\"><img src=\"./illustrations/SMALL/$image.jpg\" alt=\"$alt by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\" class='blur' loading='lazy'><div class='content fade'><p>$content</p></div></a></article>";
        }
    }
}