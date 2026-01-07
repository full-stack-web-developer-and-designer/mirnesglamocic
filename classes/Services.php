<?php
<<<<<<<< HEAD:classes/Services.php
class Services extends Slider
========
class ServicesSlide extends Slider
>>>>>>>> b866a1546f695f7360d6afcb252e9b2270930e56:classes/ServicesSlide.class.php
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderServices()
    {
        $sql = "SELECT * FROM mirnesgl_korea.services";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $service_img = $row["service_img"];
            $service_alt = $row["service_alt"];
            $title = $row["title"];
            $description = $row["description"];
            echo "<article class='services' aria-label='Web services certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina'>
                    <img src=\"./services/$service_img\" alt=\"$service_alt\" loading=\"lazy\" class='usluge'><h4>$title</h4><p>$description</p>
                  </article>";
        }
    }
}
