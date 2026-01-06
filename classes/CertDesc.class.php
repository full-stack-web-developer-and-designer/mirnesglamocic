<?php
class CertDesc extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderCertDesc()
    {
        $sql = "SELECT * FROM mirnesgl_korea.cert_desc;";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $icon = $row["icon"];
            $title = $row["title"];
            $first_part = $row["first_part"];
            $second_part = $row["second_part"];
            $href = $row["href"];

            echo "<article class='certificate'>
            <span><img class='icons' src='./images/$icon' alt='$title icon' loading='lazy'></span>
            <h3>$title</h3>
            <p class='intro'>$first_part<br><br>$second_part</p>
            <p><a href='./$href' class='button'>VIEW CERTIFICATES &raquo;</a></p>
        </article>";
        }
    }
}
