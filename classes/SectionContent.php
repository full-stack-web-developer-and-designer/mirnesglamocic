<?php
/**
 * SectionContent.php
 *
 * Handles fetching page section content.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 */

declare(strict_types=1);


class SectionContent extends Entity
{
    protected static string $tableName = 'page_section_content';

    protected static string $keyColumn = 'content_id';


    /**
     * Get section content by page and section name.
     *
     * Returns:
     *
     * [
     *     'before_images' => [
     *          'text 1',
     *          'text 2'
     *     ],
     *
     *     'after_images' => [
     *          'text 1'
     *     ]
     * ]
     */
    public static function getSection(
        int $pageId,
        string $section
    ): array {

        $db = DB::getInstance();


        $sql = "
            SELECT *
            FROM " . static::$tableName . "
            WHERE page_id = :page_id
            AND section = :section
            ORDER BY position ASC
        ";

        $stmt = $db->prepare($sql);

        $stmt->execute([
            'page_id' => $pageId,
            'section' => $section
        ]);


        $rows = $stmt->fetchAll(
            PDO::FETCH_ASSOC
        );


        $content = [];


        foreach ($rows as $row) {


            $block = $row['block'];


            if (!isset($content[$block])) {

                $content[$block] = [];
            }


            $content[$block][] = $row['content'];
        }


        return $content;
    }
}