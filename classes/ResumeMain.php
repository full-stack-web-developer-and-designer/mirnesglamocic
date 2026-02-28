<?php
declare(strict_types=1);

class ResumeMain extends Entity
{
    protected static string $tableName = 'resume_main';
    protected static string $keyColumn = 'resume_id';

    public int $resume_id;
    public int $page_id;
    public string $profile_text;
    public string $availability_text;
    public string $created_at;
    public string $updated_at;

    public static function getByPage(int $page_id): ?self
    {
        $stmt = self::$db->prepare(
            "SELECT * FROM " . self::$tableName . " WHERE page_id = :page_id LIMIT 1"
        );
        $stmt->execute(['page_id' => $page_id]);

        return $stmt->fetchObject(self::class) ?: null;
    }
}