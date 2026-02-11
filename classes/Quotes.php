<?php
/**
 * Quotes.php
 *
 * Handles fetching and rendering quotes linked to pages.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

class Quotes extends Entity
{
    protected static string $tableName = 'quotes';
    protected static string $keyColumn = 'quote_id';

    /**
     * Fetch quotes by page
     */
    public static function getByPage(int $pageId): array
    {
        $sql = "
            SELECT quote_text, author
            FROM quotes
            WHERE page_id = :page_id
            ORDER BY sort_order ASC
        ";

        $stmt = self::$db->prepare($sql);
        $stmt->execute(['page_id' => $pageId]);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Render quotes as semantic HTML
     */
    public static function render(int $pageId): void
    {
        $quotes = self::getByPage($pageId);

        if (!$quotes) {
            return;
        }

        foreach ($quotes as $quote) {
            $text   = htmlspecialchars($quote->quote_text, ENT_QUOTES, 'UTF-8');
            $author = htmlspecialchars($quote->author ?? '', ENT_QUOTES, 'UTF-8');

            echo '<blockquote class="quote">';

            echo '<p>' . $text . '</p>';

            if ($author !== '') {
                echo '<cite>' . $author . '</cite>';
                }

            echo '</blockquote>';
        }
    }
}