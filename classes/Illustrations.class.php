<?php
class Illustrations extends ConnectSlider{
     // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.projects WHERE article='illustration';";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $article = $row['article'];
			$image = $row['image'];
            $alt = $row['alt'];
            $content = $row['content'];

            echo "<article class=\"$article\"><a href=\"./illustrations/BIG/$image\" data-lightbox=\"illustrations\"><img src=\"./illustrations/SMALL/$image\" alt=\"$alt by Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\" class='blur' loading='lazy'><div class='content fade'><p>$content</p></div></a></article>";
        }
    }
}