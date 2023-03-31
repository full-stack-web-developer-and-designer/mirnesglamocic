<?php
class Skills extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.skills;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $help_tip=$row['help_tip'];
            $img_240=$row['img_240'];
            $img_200=$row['img_200'];
            $img_190=$row['img_190'];
            $img_180=$row['img_180'];
            $img_140=$row['img_140'];
            $img_130=$row['img_130'];
            $img_120=$row['img_120'];
            $img_105=$row['img_105'];
            $img=$row['img'];
			$alt=$row['alt'];

            echo "<div class='tooltip'><div class='help_tip'><p>$help_tip</p></div></div><picture class='skill'><!--[if IE 9]><video style='display: none;'><![endif]-->
            <source srcset=\"./images/$img_240\" type=\"image/webp\" width=\"240\" height=\"240\" loading=\"lazy\" media=\"(min-width: 1261px)\">
            <source srcset=\"./images/$img_200\" type=\"image/webp\" width=\"200\" height=\"200\" loading=\"lazy\" media=\"(min-width: 1080px)\">
            <source srcset=\"./images/$img_190\" type=\"image/webp\" width=\"190\" height=\"190\" loading=\"lazy\" media=\"(min-width: 1024px)\">
            <source srcset=\"./images/$img_180\" type=\"image/webp\" width=\"180\" height=\"180\" loading=\"lazy\" media=\"(min-width: 768px)\">
            <source srcset=\"./images/$img_140\" type=\"image/webp\" width=\"140\" height=\"140\" loading=\"lazy\" media=\"(min-width: 541px)\">
            <source srcset=\"./images/$img_130\" type=\"image/webp\" width=\"130\" height=\"130\" loading=\"lazy\" media=\"(min-width: 509px)\">
            <source srcset=\"./images/$img_120\" type=\"image/webp\" width=\"120\" height=\"120\" loading=\"lazy\" media=\"(min-width: 320px)\">
            <source srcset=\"./images/$img_105\" type=\"image/webp\" width=\"105\" height=\"105\" loading=\"lazy\" media=\"(max-width: 319px)\">
            <!--[if IE 9]></video><![endif]-->
            <img decoding=\"async\" srcset=\"./images/$img\" width=\"240\" height=\"240\" loading=\"lazy\" alt='$alt' class='skill'></picture>";
            }
        }
    }