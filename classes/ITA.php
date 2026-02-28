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

        $img400      = $this->imgUrl($cert->img_400);
        $img400_2x   = $this->imgUrl($cert->img_400_2x);

        $img300      = $this->imgUrl($cert->img_300);
        $img300_2x   = $this->imgUrl($cert->img_300_2x);

        $img250      = $this->imgUrl($cert->img_250);
        $img250_2x   = $this->imgUrl($cert->img_250_2x);

        $img200      = $this->imgUrl($cert->img_200);
        $img200_2x   = $this->imgUrl($cert->img_200_2x);

        $img      = $this->imgUrl($cert->img);
        $img_2x   = $this->imgUrl($cert->img_2x);

        $imgFallback = $this->imgUrl($cert->img); // jpg fallback
        $imgFull = $this->imgUrl($cert->img_full); // big img

        echo <<<HTML
        <article id="{$code}" class="cert-item">
            <a href="{$imgFull}" data-lightbox="ita">
                <picture class="ita">

                    <source 
                        type="image/webp"
                        media="(min-width: 1024px)"
                        srcset="{$img400} 1x, {$img400_2x} 2x">

                    <source 
                        type="image/webp"
                        media="(min-width: 768px)"
                        srcset="{$img300} 1x, {$img300_2x} 2x">

                    <source 
                        type="image/webp"
                        media="(min-width: 585px)"
                        srcset="{$img250} 1x, {$img250_2x} 2x">

                    <!-- Default WebP for small screens -->
                    <source 
                        type="image/webp"
                        srcset="{$img200} 1x, {$img200_2x} 2x">
                    <!-- JPG fallback -->
                    <img 
                        src="{$imgFallback}"
                        srcset="{$img} 1x, {$img_2x} 2x"
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
                MAX(CASE WHEN i.size_label = 'img_400@2x' THEN i.file_path END) AS img_400_2x,

                MAX(CASE WHEN i.size_label = 'img_300' THEN i.file_path END) AS img_300,
                MAX(CASE WHEN i.size_label = 'img_300@2x' THEN i.file_path END) AS img_300_2x,

                MAX(CASE WHEN i.size_label = 'img_250' THEN i.file_path END) AS img_250,
                MAX(CASE WHEN i.size_label = 'img_250@2x' THEN i.file_path END) AS img_250_2x,

                MAX(CASE WHEN i.size_label = 'img_200' THEN i.file_path END) AS img_200,
                MAX(CASE WHEN i.size_label = 'img_200@2x' THEN i.file_path END) AS img_200_2x,

                MAX(CASE WHEN i.size_label = 'img' THEN i.file_path END) AS img,
                MAX(CASE WHEN i.size_label = 'img@2x' THEN i.file_path END) AS img_2x,

                MAX(CASE WHEN i.size_label = 'img_full' THEN i.file_path END) AS img_full

        FROM ita_certificate c
        LEFT JOIN ita_certificate_images i ON i.ita_id = c.ita_id
        GROUP BY c.ita_id
        ";
        return self::$db
            ->query($sql)
            ->fetchAll(PDO::FETCH_OBJ);
    }
}
