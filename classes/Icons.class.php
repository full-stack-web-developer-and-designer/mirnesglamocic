<?php
class Icons extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderIcons()
    {
        $sql = "SELECT * FROM mirnesgl_korea.contact_icon";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $href = $row["href"];
            $aria_label = $row["aria_label"];
            $svg = $row["svg"];

            echo "<span class='icon_box'>
            <a class='social-icon' href=\"$href\" aria-label=\"$aria_label\" target='_blank'>$svg</a>   
            </span>";
        }
    }
}
