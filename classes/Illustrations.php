<?php

class Illustrations extends Entity
{
    /**
     * Fetch illustration projects from database
     *
     * @return array of objects
     */
    public static function fetch(): array
    {
        $sql = "
            SELECT 
                p.project_id,
                p.title,
                p.summary,
                pi.image
            FROM projects p
            INNER JOIN project_images pi 
                ON pi.project_id = p.project_id
            WHERE p.category_id = 4   -- 4 = illustration
            ORDER BY p.project_id DESC
        ";

        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Render slider HTML
     */
    public static function renderSlider(): void
    {
        $projects = self::fetch();

        foreach ($projects as $project) {
            $image = htmlspecialchars($project->image);
            $title = htmlspecialchars($project->title);
            $summary = htmlspecialchars($project->summary);

            echo "
            <article class='illustration' aria-label='Project: $title by professional web designer Mirnes Glamočić'>
                <a href='/images/illustrations/BIG/{$image}' data-lightbox='illustrations'>
                    <img src='/images/illustrations/SMALL/{$image}' 
                         alt='$title by professional web designer and programmer Mirnes Glamočić' 
                         class='blur' loading='lazy'>
                    <div class='content fade'>
                        <p>$summary</p>
                    </div>
                </a>
            </article>
            ";
        }
    }
}
