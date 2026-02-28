<?php
declare(strict_types=1);

class ResumeExperience extends Entity
{
    protected static string $tableName = 'resume_experience';
    protected static string $keyColumn = 'experience_id';

    public int $experience_id;
    public int $page_id;
    public string $job_title;
    public string $company;
    public int $start_year;
    public ?string $end_year;  // Change this to string to allow 'Present' as a valid value

    public static function getByPage(int $page_id): array
    {
        $stmt = self::$db->prepare(
            "SELECT * FROM " . self::$tableName . " WHERE page_id = :page_id ORDER BY start_year DESC"
        );
        $stmt->execute(['page_id' => $page_id]);

        $experiences = $stmt->fetchAll(PDO::FETCH_CLASS, self::class);

        // Handle possible casting or special string cases
        foreach ($experiences as $experience) {
        if (strtolower((string)$experience->end_year) === 'present') {
            $experience->end_year = 'Present';
        }
    }

        return $experiences;
    }

    public function getPoints(): array
    {
        return ResumeExperiencePoint::getByExperience($this->experience_id);
    }
}