<?php
class AboutMe extends Entity
{
    protected static string $tableName = 'about_me';
    protected static string $keyColumn = 'about_id';

    public int $about_id;
    public int $page_id;
    public string $heading;
    public int $sort_order;

    // Paragraphs
    public array $paragraphs = [];

    // Images in multiple sizes
    public ?string $img_150 = null;
    public ?string $img_150_2x = null;
    public ?string $img_200 = null;
    public ?string $img_200_2x = null;
    public ?string $img_fallback = null;

    /**
     * Fetch About Me section by page ID with images pivoted
     */
    public static function getByPage(int $pageId): ?self
    {
        $sql = "
            SELECT 
                am.about_id,
                am.page_id,
                am.heading,
                am.sort_order,
                -- Mobile 150w
                MAX(CASE WHEN i.size_label = '150w' AND i.file_path LIKE '%.webp' AND i.file_path NOT LIKE '%@2x%' THEN i.file_path END) AS img_150,
                MAX(CASE WHEN i.size_label = '150w' AND i.file_path LIKE '%@2x.webp' THEN i.file_path END) AS img_150_2x,

                -- Desktop 200w
                MAX(CASE WHEN i.size_label = '200w' AND i.file_path LIKE '%.webp' AND i.file_path NOT LIKE '%@2x%' THEN i.file_path END) AS img_200,
                MAX(CASE WHEN i.size_label = '200w' AND i.file_path LIKE '%@2x.webp' THEN i.file_path END) AS img_200_2x,

                -- Fallback JPG
                MAX(CASE WHEN i.size_label = '200w' AND i.file_path LIKE '%.jpg' THEN i.file_path END) AS img_fallback
            FROM about_me am
            LEFT JOIN about_me_images i ON i.about_id = am.about_id
            WHERE am.page_id = :pageId
            GROUP BY am.about_id
            LIMIT 1
        ";
        $db = DB::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->execute(['pageId' => $pageId]);
        $about = $stmt->fetchObject(self::class);

        if (!$about) {
            return null;
        }

        // Load paragraphs
        $about->paragraphs = self::getParagraphs($about->about_id);

        return $about;
    }

    protected static function getParagraphs(int $aboutId): array
    {
        $db = DB::getInstance();
        $stmt = $db->prepare(
            "SELECT content FROM about_me_text WHERE about_id = :aboutId ORDER BY sort_order ASC"
        );
        $stmt->execute(['aboutId' => $aboutId]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    /**
     * Render the About Me section HTML
     */
public function render(): void
{
    $heading = htmlspecialchars($this->heading, ENT_QUOTES, 'UTF-8');
    $alt = $heading;

    echo '<div class="wrapper">' . PHP_EOL;
    echo '    <div class="about-content">' . PHP_EOL;
    echo '        <h2>' . $heading . '</h2>' . PHP_EOL;

    echo '        <picture class="imgLeft">' . PHP_EOL;

    // Desktop first (min-width 768px)
    echo '            <source type="image/webp" media="(min-width: 768px)" srcset="./images/' . $this->img_200 . ' 1x, ./images/' . $this->img_200_2x . ' 2x">' . PHP_EOL;

    // Mobile next (max-width 767px)
    echo '            <source type="image/webp" media="(max-width: 767px)" srcset="./images/' . $this->img_150 . ' 1x, ./images/' . $this->img_150_2x . ' 2x">' . PHP_EOL;

    // Fallback image (JPG)
    echo '            <img decoding="async" src="./images/' . $this->img_fallback . '" width="200" height="200" loading="lazy" alt="' . $alt . '">' . PHP_EOL;

    echo '        </picture>' . PHP_EOL;

    echo '        <div class="aboutme-text">' . PHP_EOL;
    foreach ($this->paragraphs as $p) {
        echo '            <p>' . htmlspecialchars($p, ENT_QUOTES, 'UTF-8') . '</p>' . PHP_EOL;
    }
    echo '        </div>' . PHP_EOL;
    echo '    </div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
}
}
