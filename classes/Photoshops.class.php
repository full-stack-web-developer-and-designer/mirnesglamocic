<?php
class Photoshops extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.projects_photoshop ORDER BY projects_photoshop_id DESC";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $big_img     = $row['big_img'];
            $img_576     = $row['img_576'];
            $img_530     = $row['img_530'];
            $img_500     = $row['img_500'];
            $img_450     = $row['img_450'];
            $img_408     = $row['img_408'];
            $img_350     = $row['img_350'];
            $img_282     = $row['img_282'];
            $img         = $row['img'];
            $alt         = $row['alt'];
            $content     = $row['content'];

                echo "<article class='photoshop'>
                <a href='./photoshops/BIG/$big_img' data-lightbox='photoshops'>
                    <picture class='image'><!--[if IE 9]><video style='display: none;'><![endif]-->
                        <source srcset=\"./photoshops/SMALL/$img_576\" type=\"image/webp\" width=\"576\" height=\"384\" loading=\"lazy\" media=\"(min-width: 1261px)\">
                        <source srcset=\"./photoshops/SMALL/$img_530\" type=\"image/webp\" width=\"530\" height=\"353\" loading=\"lazy\" media=\"(min-width: 1209px)\">
                        <source srcset=\"./photoshops/SMALL/$img_500\" type=\"image/webp\" width=\"500\" height=\"333\" loading=\"lazy\" media=\"(min-width: 1140px)\">
                        <source srcset=\"./photoshops/SMALL/$img_450\" type=\"image/webp\" width=\"450\" height=\"300\" loading=\"lazy\" media=\"(min-width: 1031px)\">
                        <source srcset=\"./photoshops/SMALL/$img_408\" type=\"image/webp\" width=\"408\" height=\"272\" loading=\"lazy\" media=\"(min-width: 922px)\">
                        <source srcset=\"./photoshops/SMALL/$img_350\" type=\"image/webp\" width=\"350\" height=\"233\" loading=\"lazy\" media=\"(min-width: 815px)\">
                        <source srcset=\"./photoshops/SMALL/$img_282\" type=\"image/webp\" width=\"282\" height=\"188\" loading=\"lazy\" media=\"(min-width: 634px)\">
                        <source srcset=\"./photoshops/SMALL/$img_500\" type=\"image/webp\" width=\"500\" height=\"333\" loading=\"lazy\" media=\"(min-width: 557px)\">
                        <source srcset=\"./photoshops/SMALL/$img_408\" type=\"image/webp\" width=\"408\" height=\"272\" loading=\"lazy\" media=\"(min-width: 457px)\">
                        <source srcset=\"./photoshops/SMALL/$img_282\" type=\"image/webp\" width=\"282\" height=\"188\" loading=\"lazy\" media=\"(max-width: 456px)\">
                        
                        <!--[if IE 9]></video><![endif]-->
                        <img decoding=\"async\" srcset=\"./photoshops/SMALL/$img\" width=\"576\" height=\"384\" loading=\"lazy\" alt=\"Image of $alt\">
                    </picture><div class=\"content fade\"><p>$content</p></div></a>
            </article><!-- end photoshop -->
            ";
            }
        }
    }