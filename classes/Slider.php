<?php
/**
 * Slider.php
 * 
 * Handles fetching and rendering certificate sliders.
 * Supports filtering by skills and conditions defined in SliderConfig::MAP.
 * Can render individual sliders or entire sections with multiple sliders.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $slider = new Slider();
 *   $slider->render('slider_key'); // render a single slider
 *   $slider->renderSection('Certificates', ['slider1', 'slider2']); // render a section
 */

class Slider extends Entity
{
    /**
     * Render a single slider by key
     *
     * @param string $key Slider key defined in SliderConfig::MAP
     */
    public function render(string $key): void
    {
        if (!isset(SliderConfig::MAP[$key])) {
            throw new InvalidArgumentException("Unknown slider key: {$key}");
        }

        $config = SliderConfig::MAP[$key];

        $sql = "SELECT * FROM certificates";
        $params = [];
        $where = [];

        // Handle skills
        if (!empty($config['skills'])) {
            $placeholders = implode(',', array_fill(0, count($config['skills']), '?'));
            $where[] = "skill IN ($placeholders)";
            $params = array_merge($params, $config['skills']);
        }

        // Handle conditions
        if (!empty($config['conditions'])) {
            $conditionClauses = [];
            foreach ($config['conditions'] as $cond) {
                if (!empty($cond['class'])) {
                    $conditionClauses[] = "(skill = ? AND class = ?)";
                    $params[] = $cond['skill'];
                    $params[] = $cond['class'];
                } else {
                    $conditionClauses[] = "(skill = ?)";
                    $params[] = $cond['skill'];
                }
            }
            $where[] = '(' . implode(' OR ', $conditionClauses) . ')';
        }

        if (!empty($where)) {
            $sql .= " WHERE " . implode(" OR ", $where);
        }

        $sql .= " ORDER BY RAND()";

        $stmt = Entity::$db->prepare($sql);
        $stmt->execute($params);

        $certificates = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($certificates)) {
            return; // Skip empty sliders
        }

        foreach ($certificates as $row) {
            $picture = htmlspecialchars($row['picture'], ENT_QUOTES, 'UTF-8');
            $alt     = htmlspecialchars($row['alt'], ENT_QUOTES, 'UTF-8');

            $small = "/cert/SMALL/{$picture}.webp";
            $big   = "/cert/BIG/{$picture}.webp";

            echo <<<HTML
            <li class="item-a slide">
                <article class="cert">
                    <a href="{$big}" class="progressive replace" data-href="{$small}" data-lightbox="image-group">
                        <img src="{$small}" class="preview" alt="{$alt}" loading="lazy">
                    </a>
                </article>
            </li>
            HTML;
        }
    }

    /**
     * Render a slider section with a label and one or more sliders
     *
     * @param string $label Section label
     * @param string|array $sliders Single slider key or array of keys
     */
    public function renderSection(string $label, string|array $sliders): void
    {
        $sliders = is_array($sliders) ? $sliders : [$sliders];

        // Check if any slider has certificates
        $hasContent = false;
        foreach ($sliders as $sliderKey) {
            $config = SliderConfig::MAP[$sliderKey] ?? null;
            if ($config) {
                $skills = $config['skills'] ?? [];
                $conditions = $config['conditions'] ?? [];
                if (!empty($skills) || !empty($conditions)) {
                    $hasContent = true;
                    break;
                }
            }
        }

        if (!$hasContent) {
            return; // Skip entire section if empty
        }
        ?>
        <section class="slider-container" aria-label="<?php echo htmlspecialchars($label); ?> Slider">
            <h2 class="visually-hidden"><?php echo htmlspecialchars($label); ?></h2>
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
