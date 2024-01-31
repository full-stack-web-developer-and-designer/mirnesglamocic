<?php
class ITA extends ConnectSlider{
     // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.ita_certificates;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $article = $row['article'];
            $href = $row['href'];
			$img_400 = $row['img_400'];
            $img_300 = $row['img_300'];
            $img_250 = $row['img_250'];
            $img_200 = $row['img_200'];
            $img_180 = $row['img_180'];
            $img_170=$row['img_170'];
            $img = $row['img'];
            $alt = $row['alt'];

            echo "<article id=\"$article\">
                    <a href=\"./images/BIG/$href\" data-lightbox=\"ita\">
                        <picture class='ita'>
                            <!--[if IE 9]><video style='display: none;'><![endif]-->
                            <source srcset=\"$img_400\" type=\"image/webp\" width=\"400\" height=\"565\" loading=\"lazy\" media=\"(min-width: 1261px)\">
                            <source srcset=\"$img_300\" type=\"image/webp\" width=\"300\" height=\"424\" loading=\"lazy\" media=\"(min-width: 1024px)\">
                            <source srcset=\"$img_250\" type=\"image/webp\" width=\"250\" height=\"353\" loading=\"lazy\" media=\"(min-width: 768px)\">
                            <source srcset=\"$img_200\" type=\"image/webp\" width=\"200\" height=\"283\" loading=\"lazy\" media=\"(min-width: 521px)\">
                            <source srcset=\"$img_180\" type=\"image/webp\" width=\"180\" height=\"254\" loading=\"lazy\" media=\"(min-width: 430px)\">
                            <source srcset=\"$img_170\" type=\"image/webp\" width=\"170\" height=\"240\" loading=\"lazy\" media=\"(min-width: 389px)\">
                            <source srcset=\"$img_300\" type=\"image/webp\" width=\"300\" height=\"424\" loading=\"lazy\" media=\"(max-width: 388px)\">
                            <!--[if IE 9]></video><![endif]-->
                            <img decoding=\"async\" srcset=\"$img\" width=\"400\" height=\"565\" loading=\"lazy\" alt=\"$alt\">
                        </picture></a>
                </article>";
        }
    }
}