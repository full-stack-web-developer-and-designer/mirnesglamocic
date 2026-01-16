<?php
class Photoshops extends ConnectSlider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.projects_photoshop ORDER BY projects_photoshop_id DESC";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $big_img = $row["big_img"];
            $img_576 = $row["img_576"];
            $img_530 = $row["img_530"];
            $img_500 = $row["img_500"];
            $img_450 = $row["img_450"];
            $img_408 = $row["img_408"];
            $img_350 = $row["img_350"];
            $img_282 = $row["img_282"];
            $img = $row["img"];
            $alt = $row["alt"];

            echo "<article class='photoshop' aria-label='Photoshop certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina'>
                <a href='./photoshops/BIG/$big_img' data-lightbox='photoshops'>
                    <picture class='image'><!--[if IE 9]><video style='display: none;'><![endif]-->
                        <source srcset=\"./photoshops/SMALL/$img_576\" type=\"image/webp\" width=\"576\" height=\"384\" media=\"(min-width: 1261px)\">
                        <source srcset=\"./photoshops/SMALL/$img_530\" type=\"image/webp\" width=\"530\" height=\"353\" media=\"(min-width: 1209px)\">
                        <source srcset=\"./photoshops/SMALL/$img_500\" type=\"image/webp\" width=\"500\" height=\"333\" media=\"(min-width: 1140px)\">
                        <source srcset=\"./photoshops/SMALL/$img_450\" type=\"image/webp\" width=\"450\" height=\"300\" media=\"(min-width: 1040px)\">
                        <source srcset=\"./photoshops/SMALL/$img_408\" type=\"image/webp\" width=\"408\" height=\"272\" media=\"(min-width: 954px)\">
                        <source srcset=\"./photoshops/SMALL/$img_350\" type=\"image/webp\" width=\"350\" height=\"233\" media=\"(min-width: 840px)\">
                        <source srcset=\"./photoshops/SMALL/$img_282\" type=\"image/webp\" width=\"282\" height=\"188\" media=\"(min-width: 640px)\">
                        <source srcset=\"./photoshops/SMALL/$img_500\" type=\"image/webp\" width=\"500\" height=\"333\" media=\"(min-width: 557px)\">
                        <source srcset=\"./photoshops/SMALL/$img_408\" type=\"image/webp\" width=\"408\" height=\"272\" media=\"(min-width: 457px)\">
                        <source srcset=\"./photoshops/SMALL/$img_282\" type=\"image/webp\" width=\"282\" height=\"188\" media=\"(max-width: 456px)\">
                        
                        <!--[if IE 9]></video><![endif]-->
                        <img decoding=\"async\" src=\"./photoshops/SMALL/$img\" width=\"576\" height=\"384\" loading=\"lazy\" alt=\"$alt\">
                    </picture><div class=\"content fade\"><p>$alt</p></div></a>
            </article><!-- end photoshop -->
            ";
        }
    }
}
