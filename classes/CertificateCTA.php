<?php
/**
 * CertificateCTA.php
 *
 * Handles certificate page call-to-action content.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class CertificateCTA extends Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName =
        'certificate_ctas';


    /**
     * Primary key column.
     */
    protected static string $keyColumn =
        'cta_id';


    /**
     * Primary key.
     */
    public int $cta_id = 0;


    /**
     * Related page ID.
     */
    public int $page_id = 0;


    /**
     * CTA title.
     */
    public ?string $title = null;


    /**
     * CTA paragraphs.
     */
    public ?string $paragraph1 = null;

    public ?string $paragraph2 = null;

    public ?string $paragraph3 = null;


    /**
     * Contact button link.
     */
    public ?string $contact_link = null;


    /**
     * Projects button link.
     */
    public ?string $projects_link = null;


    /**
     * Get CTA by page ID.
     */
    public static function getByPageId(
        int $pageId
    ): ?self {

        $db = DB::getInstance();


        $stmt = $db->prepare(
            "
            SELECT *
            FROM " . static::$tableName . "
            WHERE page_id = :page_id
            LIMIT 1
            "
        );


        $stmt->execute([
            'page_id' => $pageId
        ]);


        $stmt->setFetchMode(
            PDO::FETCH_CLASS,
            static::class
        );


        $cta = $stmt->fetch();


        return $cta instanceof self
            ? $cta
            : null;
    }


    /**
     * Render CTA section directly.
     */
    public static function render(
        int $pageId
    ): void {

        $cta = self::getByPageId(
            $pageId
        );


        if ($cta === null) {
            return;
        }


        $title = self::escape(
            $cta->title
        );


        $contactLink = self::escape(
            $cta->contact_link
            ?: './#contact'
        );


        $projectsLink = self::escape(
            $cta->projects_link
            ?: 'projects'
        );
        ?>

        <section class="certificates-cta">

            <?php if ($title !== ''): ?>

                <h2>
                    <?= $title ?>
                </h2>

            <?php endif; ?>


            <?php for ($i = 1; $i <= 3; $i++): ?>

                <?php
                $property =
                    'paragraph' . $i;

                $paragraph =
                    self::escape(
                        $cta->{$property}
                    );
                ?>

                <?php if ($paragraph !== ''): ?>

                    <p>
                        <?= $paragraph ?>
                    </p>

                <?php endif; ?>

            <?php endfor; ?>


            <div class="cta-buttons">

                <a href="<?= $contactLink ?>">
                    🚀 Contact Me
                </a>

                <a href="<?= $projectsLink ?>">
                    📁 View My Projects
                </a>

            </div>

        </section>

        <?php
    }


    /**
     * Escape output for safe HTML rendering.
     */
    private static function escape(
        ?string $value
    ): string {

        return htmlspecialchars(
            $value ?? '',
            ENT_QUOTES | ENT_HTML5,
            'UTF-8'
        );
    }
}
