<?php
/**
 * Logos.php
 * 
 * Handles rendering of logo projects.
 * Fetches logo projects from the database and generates slider HTML
 * with lightbox support for display on the website.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $logos = Logos::fetch();
 *   Logos::renderSlider();
 */

class Logo extends Entity
{
    /**
     * Fetch logo projects from the database
     *
     * @return array Array of objects with project data
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
            WHERE p.category_id = 3  -- logos
            ORDER BY p.project_id DESC
        ";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Render logo slider HTML with lightbox support
     */
    public static function renderLogo(): void
    {
        $projects = self::fetch();
        foreach ($projects as $project) {
            $image = htmlspecialchars($project->image);
            $title = htmlspecialchars($project->title);
            $summary = htmlspecialchars($project->summary);

            echo "
            <article class='project logo' aria-label='Project: $title by professional web designer Mirnes Glamočić'>
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
