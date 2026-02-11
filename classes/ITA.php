<?php
/**
 * ITA.php
 * 
 * Handles rendering of ITA certificates.
 * Fetches certificate data from database, including multiple image sizes,
 * and generates responsive HTML output for lightbox display.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $ita = ITA::get($pageId);
 *   $ita->renderCertificates();
 */

class ITA extends Entity
{
    protected static string $tableName = 'ita_certificate';
    protected static string $keyColumn = 'ita_id';

    /**
     * Render all certificates with responsive images and lightbox support
     */
    public function renderCertificates(): void
    {
        foreach (self::getAllCertificatesWithImages() as $cert) {
            $code = htmlspecialchars($cert->code, ENT_QUOTES, 'UTF-8');
            $alt  = htmlspecialchars($cert->alt, ENT_QUOTES, 'UTF-8');

            echo <<<HTML
            <article id="{$code}" class="cert-item">
                <a href="{$this->imgUrl($cert->img)}" data-lightbox="ita">
                    <picture class="ita">
                        <source srcset="{$this->imgUrl($cert->img_400)}" type="image/webp" media="(min-width: 1024px)">
                        <source srcset="{$this->imgUrl($cert->img_300)}" type="image/webp" media="(min-width: 832px)">
                        <source srcset="{$this->imgUrl($cert->img_300)}" type="image/webp" media="(min-width: 768px)">
                        <source srcset="{$this->imgUrl($cert->img_250)}" type="image/webp" media="(min-width: 600px)">
                        <source srcset="{$this->imgUrl($cert->img_300)}" type="image/webp" media="(min-width: 408px)">
                        <source srcset="{$this->imgUrl($cert->img_250)}" type="image/webp" media="(min-width: 320px)">
                        <source srcset="{$this->imgUrl($cert->img_200)}" type="image/webp" media="(max-width: 319px)">
                        <img src="{$this->imgUrl($cert->img)}"
                            width="400"
                            height="565"
                            loading="lazy"
                            decoding="async"
                            alt="{$alt}">
                    </picture>
                </a>
            </article>
            HTML;
        }
    }

    /**
     * Return full URL for a certificate image
     *
     * @param string|null $file Relative path from database
     * @return string Full URL
     */
    private function imgUrl(?string $file): string
    {
        if (empty($file)) {
            return '';
        }

        // Remove leading './images/' or 'images/' if present
        $file = preg_replace('#^\.?/images/#', '', $file);

        return BASE_URL . 'images/' . ltrim($file, '/');
    }

    /**
     * Fetch all certificates with their images in multiple sizes
     *
     * @return array Array of objects containing certificate data
     */
    public static function getAllCertificatesWithImages(): array
    {
        $sql = "
            SELECT 
                c.ita_id,
                c.code,
                c.alt,
                MAX(CASE WHEN i.size_label = 'img_400' THEN i.file_path END) AS img_400,
                MAX(CASE WHEN i.size_label = 'img_300' THEN i.file_path END) AS img_300,
                MAX(CASE WHEN i.size_label = 'img_250' THEN i.file_path END) AS img_250,
                MAX(CASE WHEN i.size_label = 'img_200' THEN i.file_path END) AS img_200,
                MAX(CASE WHEN i.size_label = 'img_180' THEN i.file_path END) AS img_180,
                MAX(CASE WHEN i.size_label = 'img_170' THEN i.file_path END) AS img_170,
                MAX(CASE WHEN i.size_label = 'img' THEN i.file_path END) AS img
            FROM ita_certificate c
            LEFT JOIN ita_certificate_images i ON i.ita_id = c.ita_id
            GROUP BY c.ita_id
        ";
        return self::$db
            ->query($sql)
            ->fetchAll(PDO::FETCH_OBJ);
    }
}
