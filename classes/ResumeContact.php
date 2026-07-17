<?php
declare(strict_types=1);

class ResumeContact extends Entity
{
    protected static string $tableName = 'resume_contact';
    protected static string $keyColumn = 'contact_id';

    public int $contact_id;
    public int $page_id;
    public string $type;      // email, phone, address, link
    public string $value;
    public string $icon;      // e.g., 'fas fa-envelope'
    public int $sort_order;

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