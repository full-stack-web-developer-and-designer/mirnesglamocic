<?php
class CertificateCTA extends Entity
{
    protected static string $tableName = 'certificate_ctas';
    protected static string $keyColumn = 'cta_id';

    public int $cta_id;
    public int $page_id;
    public ?string $title;
    public ?string $paragraph1;
    public ?string $paragraph2;
    public ?string $paragraph3;
    public ?string $contact_link;
    public ?string $projects_link;

    public static function getByPageId(int $page_id): ?CertificateCTA
    {
        self::init();
        $stmt = self::$db->prepare(
            "SELECT * FROM " . static::$tableName . " WHERE page_id = :page_id LIMIT 1"
        );
        $stmt->execute(['page_id' => $page_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $stmt->fetch() ?: null;
    }

    /**
     * Render the CTA section directly
     */
    public static function render(int $page_id): void
    {
        $cta = self::getByPageId($page_id);
        if (!$cta) return;

        ?>
        <section class="certificates-cta">
            <?php if (!empty($cta->title)): ?>
                <h2><?= htmlspecialchars($cta->title) ?></h2>
            <?php endif; ?>

            <?php for ($i = 1; $i <= 3; $i++): ?>
                <?php $prop = "paragraph$i"; ?>
                <?php if (!empty($cta->$prop)): ?>
                    <p><?= htmlspecialchars($cta->$prop) ?></p>
                <?php endif; ?>
            <?php endfor; ?>

            <div class="cta-buttons">
                <a href="<?= htmlspecialchars($cta->contact_link ?: './#contact') ?>">🚀 Contact Me</a>
                <a href="<?= htmlspecialchars($cta->projects_link ?: 'projects') ?>">📁 View My Projects</a>
            </div>
        </section>
        <?php
    }
}
