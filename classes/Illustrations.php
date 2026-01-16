<?php
class Illustrations extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.projects WHERE category='illustration' ORDER BY projects_id DESC;";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $category = $row["category"];
            $image = $row["image"];
            $alt = $row["alt"];
            $content = $row["content"];

            echo "<article class=\"$category\" aria-label='Projects of illustrations by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina'><a href=\"./illustrations/BIG/$image.jpg\" data-lightbox='illustrations'><img src=\"./illustrations/SMALL/$image.jpg\" alt=\"$alt by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\" class='blur' loading='lazy'><div class='content fade'><p>$content</p></div></a></article>";
        }
    }
}
