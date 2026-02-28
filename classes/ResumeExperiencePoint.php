<?php
declare(strict_types=1);

class ResumeExperiencePoint extends Entity
{
    protected static string $tableName = 'resume_experience_points';
    protected static string $keyColumn = 'point_id';

    public int $point_id;
    public int $experience_id;
    public string $description;

    public static function getByExperience(int $experience_id): array
    {
        $stmt = self::$db->prepare(
            "SELECT * FROM " . self::$tableName . "
             WHERE experience_id = :experience_id
             ORDER BY point_id ASC"
        );

        $stmt->execute(['experience_id' => $experience_id]);

        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}