<?php
class WordPressEcommerceSlide extends Slider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderCertificates()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.certifications WHERE skill='WordPressEcommerce' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $picture = $row["picture"];
            $alt = $row["alt"];
            $class = $row["class"];
            echo <<<HTML
            <li class="item-a slide">
                <article class="cert">
                    <a href="./cert/BIG/{$picture}.webp" data-lightbox="image-group">
                        <img 
                            src="./cert/SMALL/{$picture}.webp" 
                            alt="{$alt}" 
                            class="{$class}" 
                            loading="lazy">
                    </a>
                </article>
            </li>
            HTML;
        }
    }
}
