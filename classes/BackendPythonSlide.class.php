<?php
class BackendPythonSlide extends Slider
{
    // Fetch data from MySQL using PDO - PHP Data Object
     public function renderCertificates(string $skill = 'BackendPython')
    {
        $sql =
            "SELECT picture, alt, class
            FROM mirnesgl_korea.certifications
            WHERE skill = :skill ORDER BY rand();";
        $stmt = $this->__connect()->prepare($sql);
        $stmt->bindValue(':skill', $skill, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        $certificates = $stmt->fetchAll();
        shuffle($certificates);

        foreach ($certificates as $row) {
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
