<?php
class Logos extends Entity
{
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
            WHERE p.category_id = 3  -- logos
            ORDER BY p.project_id DESC
        ";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function renderSlider(): void
    {
        $projects = self::fetch();
        foreach ($projects as $project) {
            $image = htmlspecialchars($project->image);
            $title = htmlspecialchars($project->title);
            $summary = htmlspecialchars($project->summary);

            echo "
            <article class='logo' aria-label='Project: $title by professional web designer Mirnes Glamočić'>
                <a href='/images/logos/BIG/{$image}' data-lightbox='logos'>
                    <img src='/images/logos/SMALL/{$image}' 
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
