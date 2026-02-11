<?php
/**
 * Photoshop.php
 * 
 * Handles fetching and rendering Photoshop projects from the database.
 * Each project includes multiple image sizes for responsive design and
 * renders HTML for a Lightbox gallery.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $projects = Photoshop::fetch();
 *   Photoshop::render();
 */

class Photoshop extends Entity
{
    /**
     * Fetch Photoshop projects from the database
     *
     * @return array Array of project objects
     */
    public static function fetch(): array
    {
        $sql = "
            SELECT
                p.project_id,
                p.title,
                p.summary,
                ps.big_img,
                ps.img_576,
                ps.img_530,
                ps.img_500,
                ps.img_450,
                ps.img_408,
                ps.img_350,
                ps.img_282,
                ps.img
            FROM projects p
            INNER JOIN project_photoshop ps
                ON ps.project_id = p.project_id
            WHERE p.category_id = 2
            ORDER BY p.project_id DESC
        ";

        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Render Photoshop projects as HTML
     *
     * Each project outputs a <article> with a responsive <picture> and Lightbox link.
     */
    public static function renderPhotoshop(): void
    {
        $projects = self::fetch();

        if (empty($projects)) {
            return; // Avoid broken HTML
        }

        foreach ($projects as $row) {
            echo "
            <article class='project photoshop' data-category='photoshop'>
                <a href='/images/photoshops/BIG/{$row->big_img}' data-lightbox='photoshops'>
                    <picture class='image'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_576}' media='(min-width: 1260px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_500}' media='(min-width: 1200px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_450}' media='(min-width: 1024px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_408}' media='(min-width: 900px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_350}' media='(min-width: 768px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_282}' media='(max-width: 456px)'>

                        <img
                            src='/images/photoshops/SMALL/{$row->img}'
                            loading='lazy'
                            alt='" . htmlspecialchars($row->title) . "'>
                    </picture>

                    <div class='content fade'>
                        <p>" . htmlspecialchars($row->summary) . "</p>
                    </div>
                </a>
            </article>
            ";
        }
    }
}
