<?php
class CertDesc extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderCertDesc()
    {
        $sql = "SELECT * FROM mirnesgl_korea.cert_desc;";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $icon_id = $row["icon_id"];
            $title = $row["title"];
            $first_part = $row["first_part"];
            $second_part = $row["second_part"];
            $slug = $row["slug"];

            echo "<article class='certificate'>
            <span>
                <svg class='icons-cert' width='30' height='30' aria-hidden='true'>
                    <title>{$title}</title>
                        <use xlink:href='#icon-{$icon_id}'></use>
                </svg></span>
            <h3>$title</h3>
            <p class='intro'>$first_part<br><br>$second_part</p>
            <p><a href='" . htmlspecialchars($slug) . "' class='button'>VIEW CERTIFICATES &raquo;</a></p>
        </article>";
        }
    }
}
