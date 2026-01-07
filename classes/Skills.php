<?php
class Skills extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSkills()
    {
        $sql = "SELECT * FROM mirnesgl_korea.skills;";
        $stmt = $this->__connect()->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $img_120 = $row["img_120"];
            $img_110 = $row["img_110"];
            $img_105 = $row["img_105"];
            $img_100 = $row["img_100"];
            $img = $row["img"];
            $alt = $row["alt"];

            echo "<picture class='skill'>
            <source srcset=\"./images/$img_100\" type=\"image/webp\" width=\"100\" height=\"100\" media=\"(min-width: 1153px)\">
            <source srcset=\"./images/$img_120\" type=\"image/webp\" width=\"120\" height=\"120\" media=\"(min-width: 1020px)\">
            <source srcset=\"./images/$img_110\" type=\"image/webp\" width=\"110\" height=\"110\" media=\"(min-width: 859px)\">
            <source srcset=\"./images/$img_105\" type=\"image/webp\" width=\"105\" height=\"105\" media=\"(min-width: 821px)\">
            <source srcset=\"./images/$img_100\" type=\"image/webp\" width=\"100\" height=\"100\" media=\"(min-width: 680px)\">
            <source srcset=\"./images/$img_110\" type=\"image/webp\" width=\"110\" height=\"110\" media=\"(min-width: 679px)\">
            <source srcset=\"./images/$img_105\" type=\"image/webp\" width=\"105\" height=\"105\" media=\"(min-width: 653px)\">
            <source srcset=\"./images/$img_100\" type=\"image/webp\" width=\"100\" height=\"100\" media=\"(max-width: 652px)\">
            <img decoding=\"async\" src=\"./images/$img\" width=\"165\" height=\"165\" loading=\"lazy\" alt='$alt' class='skill'></picture>";
        }
    }
}
