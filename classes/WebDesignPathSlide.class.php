<?php
class WebDesignPathSlide extends Slider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderSlider()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.certifications WHERE skill='WebDesignPath' OR skill='UX Intro WebDesign' OR skill='Frontend WebDesign' OR skill='FrontendIntro WebDesign' OR skill='FrontendIntro UX WebDesign' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $picture = $row["picture"];
            $alt = $row["alt"];
            $class = $row["class"];
            echo "<li class='item-a slide'>
            <article class='cert' aria-label='Web Design certificates of professional web developer and web designer Mirnes Glamočić from Bosnia and Herzegovina'>
            <a href='./cert/BIG/$picture.webp' data-lightbox='image-group'><img src='./cert/SMALL/$picture.webp' alt=\"$alt by Web Designer and Developer Mirnes Glamočić from Bosnia and Herzegovina\" class=\"$class\" loading=\"lazy\"></a>
            </article></li>";
        }
    }
}
