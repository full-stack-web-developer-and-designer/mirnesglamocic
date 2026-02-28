<?php
declare(strict_types=1);

class ResumeSkill extends Entity
{
    protected static string $tableName = 'resume_skills';
    protected static string $keyColumn = 'skill_id';

    public int $skill_id;
    public int $page_id;
    public string $category; // e.g., Frontend, Backend, Design
    public string $name;     // skill name
    public int $sort_order;

    public static function getByPage(int $page_id): array
    {
        $stmt = self::$db->prepare(
            "SELECT * FROM " . self::$tableName . " WHERE page_id = :page_id ORDER BY category, sort_order"
        );
        $stmt->execute(['page_id' => $page_id]);

        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}