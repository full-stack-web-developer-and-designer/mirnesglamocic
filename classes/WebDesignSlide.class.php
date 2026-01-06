<?php
class WebDesignSlide extends Slider
{
    // Fetch data from MySQL using PDO - PHP Data Object
    public function renderCertificates()
    {
        $sql =
            "SELECT * FROM mirnesgl_korea.certifications WHERE skill='WebDesign' OR skill='UX Web Design' OR skill='JavaScript WebDesign' OR skill='HTML WebDesign' OR skill='HTMLandCSS WebDesign' OR skill='CSS WebDesign' OR skill='WebServices WebDesign' OR skill='Bootstrap WebDesign' OR skill='SASS WebDesign' OR skill='WebDevelopment WebDesign' ORDER BY rand();";
        $stmt = $this->__connect()->query($sql);

        while ($row = $stmt->fetch()) {
            $picture = htmlspecialchars($row['picture'], ENT_QUOTES, 'UTF-8');
            $alt     = htmlspecialchars($row['alt'], ENT_QUOTES, 'UTF-8');
            $class   = htmlspecialchars($row['class'], ENT_QUOTES, 'UTF-8');
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
