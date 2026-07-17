<?php
declare(strict_types=1);

class ResumeLanguage extends Entity
{
    protected static string $tableName = 'resume_languages';
    protected static string $keyColumn = 'language_id';

    public int $language_id;
    public int $page_id;
    public string $language;     // English, German, etc.
    public string $proficiency;  // Fluent, Intermediate, etc.

    public static function getByPage(int $page_id): array
    {
        $db = DB::getInstance();

        $stmt = $db->prepare(
            "SELECT * FROM " . self::$tableName . " WHERE page_id = :page_id ORDER BY language_id"
        );
        
        $stmt->execute(['page_id' => $page_id]);

        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}