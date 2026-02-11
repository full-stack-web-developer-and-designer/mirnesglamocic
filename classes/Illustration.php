<?php
/**
 * Illustrations.php
 * 
 * Handles fetching and rendering of illustration projects.
 * 
 * Features:
 *   - fetch(): retrieve all illustration projects from database
 *   - renderSlider(): render HTML slider for illustration projects
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $illustrations = Illustrations::fetch();       // Get projects
 *   Illustrations::renderSlider();                 // Render HTML slider
 */

class Illustration extends Entity
{
    /**
     * Fetch illustration projects from database
     *
     * @return array of objects Each object has project_id, title, summary, image
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
     * Render slider HTML for illustration projects
     *
     * Output is directly echoed.
     */
    public static function renderIllustration(): void
    {
        $projects = self::fetch();

        foreach ($projects as $project) {
            $image = htmlspecialchars($project->image);
            $title = htmlspecialchars($project->title);
            $summary = htmlspecialchars($project->summary);

            echo "
            <article class='project illustration' aria-label='Project: $title by professional web designer Mirnes Glamočić'>
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
