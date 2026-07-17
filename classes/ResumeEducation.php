<?php
declare(strict_types=1);

class ResumeEducation extends Entity
{
    // Set the table name
    protected static string $tableName = 'resume_education';
    protected static string $keyColumn = 'id';

    public int $id;
    public int $page_id;
    public string $institution_name;
    public string $logo_url;
    public string $degree;
    public string $location;
    public string $duration;
    public int $sort_order;

    // Fetch all education by page ID
    public static function getByPage(int $page_id): array
    {
        $db = DB::getInstance();

        $stmt = $db->prepare(
            "SELECT * FROM " . static::$tableName . " WHERE page_id = :page_id ORDER BY sort_order"
        );

        $stmt->execute(['page_id' => $page_id]);
        
        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }
}
?>