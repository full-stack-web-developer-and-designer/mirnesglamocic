<?php
class Logos extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.projects WHERE article='logo' ORDER BY projects_id DESC;";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $article = $row["article"];
            $image = $row["image"];
            $alt = $row["alt"];
            $content = $row["content"];

            echo "<article class=\"$article\"  aria-label='Projects of logos by professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina'><a href=\"./logos/BIG/$image.jpg\" data-lightbox='logos'><img src=\"./logos/SMALL/$image.jpg\" alt=\"$alt by professional web designer and programmer Mirnes Glamočić from Bosnia and Herzegovina\" class='blur' loading='lazy'><div class='content fade'><p>$content</p></div></a></article>";
        }
    }
}
