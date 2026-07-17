<?php
declare(strict_types=1);

class ResumeProjects extends Entity
{
    // Set the table name
    protected static string $tableName = 'resume_projects';
    protected static string $keyColumn = 'id';

    public int $id;
    public int $page_id;
    public string $title;
    public ?string $description;
    public string $link;
    
    public int $sort_order;

    // Fetch all projects by page ID
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