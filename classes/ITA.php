<?php
class ITA extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderCertificates()
    {
        $sql = "SELECT * FROM mirnesgl_korea.ita_certificates;";
        $stmt = $this->__connect()->prepare($sql);
        $stmt->execute();


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id  = preg_replace('/[^a-z0-9_-]/i', '', $row['id']);
            $href = htmlspecialchars($row['href'], ENT_QUOTES, 'UTF-8');
            $img_400 = htmlspecialchars($row["img_400"], ENT_QUOTES, 'UTF-8');
            $img_300 = htmlspecialchars($row["img_300"], ENT_QUOTES, 'UTF-8');
            $img_250 = htmlspecialchars($row["img_250"], ENT_QUOTES, 'UTF-8');
            $img_200 = htmlspecialchars($row["img_200"], ENT_QUOTES, 'UTF-8');
            $img_180 = htmlspecialchars($row["img_180"], ENT_QUOTES, 'UTF-8');
            $img_170 = htmlspecialchars($row["img_170"], ENT_QUOTES, 'UTF-8');
            $img     = htmlspecialchars($row["img"], ENT_QUOTES, 'UTF-8');
            $alt = htmlspecialchars($row['alt'], ENT_QUOTES, 'UTF-8');

            echo "<article id=\"$id\" class=\"cert-item\">
                    <a href=\"./images/BIG/$href\" data-lightbox=\"ita\">
                        <picture class='ita'>
                            <source srcset=\"$img_400\" type=\"image/webp\" media=\"(min-width: 962px)\">
                            <!--<source srcset=\"$img_300\" type=\"image/webp\" width=\"300\" height=\"424\" media=\"(min-width: 1024px)\">-->
                            <source srcset=\"$img_300\" type=\"image/webp\" media=\"(min-width: 832px)\">
                            <source srcset=\"$img_250\" type=\"image/webp\" width=\"250\" height=\"353\" media=\"(min-width: 621px)\">
                            <source srcset=\"$img_200\" type=\"image/webp\" width=\"200\" height=\"283\" media=\"(min-width: 521px)\">
                            <source srcset=\"$img_180\" type=\"image/webp\" width=\"180\" height=\"254\" media=\"(min-width: 430px)\">
                            <source srcset=\"$img_170\" type=\"image/webp\" width=\"170\" height=\"240\" media=\"(min-width: 389px)\">
                            <source srcset=\"$img_300\" type=\"image/webp\" width=\"300\" height=\"424\" media=\"(max-width: 388px)\">

                            <img decoding=\"async\" src=\"$img\" width=\"400\" height=\"565\" loading=\"lazy\" alt=\"$alt\">
                        </picture></a>
                </article>";
        }
    }
}
