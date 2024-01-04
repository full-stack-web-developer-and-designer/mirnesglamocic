<?php
class Skills extends ConnectSlider{
    // Fetch data from MySQL using PDO - PHP Data Object	
	public function renderSlider(){
        $sql = "SELECT * FROM mirnesgl_cert.skills;";
        $stmt = $this->__connect()->query($sql);
       
        while($row = $stmt->fetch()) {
            $img_165=$row['img_165'];
            $img_140=$row['img_140'];
            $img_130=$row['img_130'];
            $img_120=$row['img_120'];
            $img_110=$row['img_110'];
            $img_105=$row['img_105'];
            $img_100=$row['img_100'];
            $img=$row['img'];
			$alt=$row['alt'];

            echo "<picture class='skill'><!--[if IE 9]><video style='display: none;'><![endif]-->
            <source srcset=\"./images/$img_165\" type=\"image/webp\" width=\"165\" height=\"165\" loading=\"lazy\" media=\"(min-width: 1261px)\">
            <source srcset=\"./images/$img_140\" type=\"image/webp\" width=\"140\" height=\"140\" loading=\"lazy\" media=\"(min-width: 1230px)\">
            <source srcset=\"./images/$img_130\" type=\"image/webp\" width=\"130\" height=\"130\" loading=\"lazy\" media=\"(min-width: 1187px)\">
            <source srcset=\"./images/$img_120\" type=\"image/webp\" width=\"120\" height=\"120\" loading=\"lazy\" media=\"(min-width: 1111px)\">
            <source srcset=\"./images/$img_110\" type=\"image/webp\" width=\"110\" height=\"110\" loading=\"lazy\" media=\"(min-width: 995px)\">
            <source srcset=\"./images/$img_105\" type=\"image/webp\" width=\"105\" height=\"105\" loading=\"lazy\" media=\"(min-width: 957px)\">
            <source srcset=\"./images/$img_100\" type=\"image/webp\" width=\"100\" height=\"100\" loading=\"lazy\" media=\"(min-width: 758px)\">
            <source srcset=\"./images/$img_120\" type=\"image/webp\" width=\"120\" height=\"120\" loading=\"lazy\" media=\"(min-width: 706px)\">
            <source srcset=\"./images/$img_110\" type=\"image/webp\" width=\"110\" height=\"110\" loading=\"lazy\" media=\"(min-width: 679px)\">
            <source srcset=\"./images/$img_105\" type=\"image/webp\" width=\"105\" height=\"105\" loading=\"lazy\" media=\"(min-width: 653px)\">
            <source srcset=\"./images/$img_100\" type=\"image/webp\" width=\"100\" height=\"100\" loading=\"lazy\" media=\"(max-width: 652px)\">
            <!--[if IE 9]></video><![endif]-->
            <img decoding=\"async\" srcset=\"./images/$img\" width=\"165\" height=\"165\" loading=\"lazy\" alt='$alt' class='skill'></picture>";
            }
        }
    }