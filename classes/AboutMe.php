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
                MAX(CASE WHEN i.size_label = '150w' AND i.file_path LIKE '%.webp' THEN i.file_path END) AS img_150,
                MAX(CASE WHEN i.size_label = '150w' AND i.file_path LIKE '%.jpg' THEN i.file_path END) AS img_150_2x,
                MAX(CASE WHEN i.size_label = '200w' AND i.file_path LIKE '%.webp' THEN i.file_path END) AS img_200,
                MAX(CASE WHEN i.size_label = '200w' AND i.file_path LIKE '%.jpg' THEN i.file_path END) AS img_200_2x
            FROM about_me am
            LEFT JOIN about_me_images i ON i.about_id = am.about_id
            WHERE am.page_id = :pageId
            GROUP BY am.about_id
            LIMIT 1
        ";
        $stmt = self::$db->prepare($sql);
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
        $stmt = self::$db->prepare(
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
    $alt = !empty($this->img_200) ? $heading : '';

    echo '<div class="wrapper">' . "\n";
    echo '    <div class="about-content">' . "\n";
    echo '        <h2>' . $heading . '</h2>' . "\n";
    echo '        <picture class="imgLeft">' . "\n";
    echo '            <!-- Mobile -->' . "\n";
    echo '            <source srcset="./images/' . $this->img_150 . ', ./images/' . $this->img_150_2x . ' 2x" type="image/webp" media="(max-width: 767px)">' . "\n";
    echo '            <source srcset="./images/' . $this->img_150_2x . ', ./images/' . $this->img_150_2x . ' 2x" media="(max-width: 767px)">' . "\n";
    echo '            <!-- Desktop -->' . "\n";
    echo '            <source srcset="./images/' . $this->img_200 . ', ./images/' . $this->img_200_2x . ' 2x" type="image/webp" media="(min-width: 768px)">' . "\n";
    echo '            <source srcset="./images/' . $this->img_200_2x . ', ./images/' . $this->img_200_2x . ' 2x" media="(min-width: 768px)">' . "\n";
    echo '            <!-- Fallback -->' . "\n";
    echo '            <img decoding="async" src="./images/' . $this->img_200_2x . '" width="200" height="200" loading="lazy" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '">' . "\n";
    echo '        </picture>' . "\n";
    echo '        <div class="aboutme-text">' . "\n";

    foreach ($this->paragraphs as $p) {
        echo '            <p>' . htmlspecialchars($p, ENT_QUOTES, 'UTF-8') . '</p>' . "\n";
    }

    echo '        </div>' . "\n";
    echo '    </div>' . "\n";
    echo '</div>' . "\n";
}

}
