<?php
class Slider extends ConnectSlider
{
    public function render(string $key): void
    {
        if (!isset(SliderConfig::MAP[$key])) {
            throw new InvalidArgumentException("Unknown slider key: {$key}");
        }

        $config = SliderConfig::MAP[$key];

        $whereParts = [];
        $params     = [];

        /* ==========================
           CASE 1: SIMPLE skills
        ========================== */
        if (isset($config['skills'])) {
            $placeholders = implode(',', array_fill(0, count($config['skills']), '?'));
            $whereParts[] = "skill IN ($placeholders)";
            $params       = array_merge($params, $config['skills']);
        }

        /* ==========================
           CASE 2: ADVANCED conditions
        ========================== */
        if (isset($config['conditions'])) {
            foreach ($config['conditions'] as $condition) {
                $parts = [];
                foreach ($condition as $column => $value) {
                    $parts[]  = "{$column} = ?";
                    $params[] = $value;
                }
                $whereParts[] = '(' . implode(' AND ', $parts) . ')';
            }
        }

        if (empty($whereParts)) {
            throw new RuntimeException("No valid conditions for slider: {$key}");
        }

        $whereSql = implode(' OR ', $whereParts);

        $sql = "
            SELECT picture, alt, class
            FROM mirnesgl_korea.certifications
            WHERE {$whereSql}
            ORDER BY RAND()
        ";

        $stmt = $this->__connect()->prepare($sql);
        $stmt->execute($params);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $row) {
            $picture = htmlspecialchars($row['picture'], ENT_QUOTES, 'UTF-8');
            $alt     = htmlspecialchars($row['alt'], ENT_QUOTES, 'UTF-8');
            $class   = htmlspecialchars($row['class'], ENT_QUOTES, 'UTF-8');

            echo <<<HTML
            <li class="item-a slide">
                <article class="cert">
                    <a href="./cert/BIG/{$picture}.webp" data-href="./cert/SMALL/{$picture}.webp" data-lightbox="image-group">
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
    public function renderSection(string $label, string|array $sliders): void
    {
        // Normalize input: always work with an array
        $sliders = is_array($sliders) ? $sliders : [$sliders];
        ?>
        <section class="slider-container" aria-label="<?php echo htmlspecialchars($label); ?> Slider">

            <h2 class="visually-hidden">
                <?php echo htmlspecialchars($label); ?>
            </h2>

            <ul class="content-slider cs-hidden" tabindex="0">
                <?php
                foreach ($sliders as $sliderKey) {
                    $this->render($sliderKey);
                }
                ?>
            </ul>
        </section>
        <?php
    }

}