<?php

class SectionContent extends Entity
{
    protected static string $tableName  = 'page_section_content';
    protected static string $keyColumn  = 'content_id';

    // Table columns (optional, but nice for IDEs)
    public int $content_id;
    public int $page_id;
    public string $section;
    public string $block;
    public string $content;
    public int $position;

    /**
     * Get structured content for a page section
     *
     * @param int $pageId
     * @param string $section
     * @return array
     */
    public static function getSection(int $pageId, string $section): array
    {
        $stmt = self::$db->prepare("
            SELECT block, content
            FROM " . static::$tableName . "
            WHERE page_id = :page_id
              AND section = :section
            ORDER BY block, position
        ");

        $stmt->execute([
            'page_id' => $pageId,
            'section' => $section
        ]);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Group by block
        $data = [];
        foreach ($rows as $row) {
            $data[$row['block']][] = $row['content'];
        }

        return $data;
    }
}
