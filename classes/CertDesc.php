<?php
/**
 * CertDesc.php
 * 
 * Handles rendering of certificate descriptions for the website.
 * Fetches data from the database and outputs certificate blocks with icon, title, and description.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $cert = new CertDesc();
 *   $cert->renderCertDesc();
 */

class CertDesc extends Entity
{
    protected static string $tableName = 'cert_desc';

    /**
     * Render all certificate descriptions
     */
    public function renderDescription(): void
    {
        // Use Entity's DB connection
        $sql = "SELECT * FROM " . self::$tableName . ";";
        $stmt = self::$db->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $icon_id     = htmlspecialchars($row["icon_id"], ENT_QUOTES);
            $title = renderMultilineTitle($row['title']);
            $description = nl2br(htmlspecialchars($row['description'], ENT_QUOTES));
            $slug        = htmlspecialchars($row["slug"], ENT_QUOTES);

            echo <<<HTML
            <article class='certificate'>
                <span>
                    <svg class='icons-cert' width='30' height='30' aria-hidden='true'>
                        <title>{$title}</title>
                        <use xlink:href='#icon-{$icon_id}'></use>
                    </svg>
                </span>
                <h3>{$title}</h3>
                <p class='intro'>{$description}</p>
                <p><a href="{$slug}" class='button'>VIEW CERTIFICATES &raquo;</a></p>
            </article>
            HTML;
        }
    }
}
