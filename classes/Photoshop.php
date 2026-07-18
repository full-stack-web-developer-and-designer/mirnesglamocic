<?php
/**
 * Photoshop.php
 *
 * Handles Photoshop and image-editing portfolio projects.
 *
 * Responsibilities:
 * - Fetch Photoshop projects from the database
 * - Provide structured project data for Mirnes AI
 * - Render responsive Lightbox gallery HTML
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);


class Photoshop extends Entity
{
    /**
     * Fetch Photoshop projects from the database.
     *
     * @return object[]
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


        $db = DB::getInstance();

        $stmt = $db->prepare($sql);

        $stmt->execute();


        return $stmt->fetchAll(
            PDO::FETCH_OBJ
        );
    }


    /**
     * Return Photoshop projects formatted for Mirnes AI.
     *
     * Only textual project information is required by the AI prompt.
     *
     * @return object[]
     */
    public static function getForAI(): array
    {
        $sql = "
            SELECT
                p.project_id,
                p.title,
                p.summary
            FROM projects p
            WHERE p.category_id = 2
            ORDER BY p.project_id DESC
        ";


        $db = DB::getInstance();

        $stmt = $db->prepare($sql);

        $stmt->execute();


        return $stmt->fetchAll(
            PDO::FETCH_OBJ
        );
    }


    /**
     * Render Photoshop projects as responsive Lightbox gallery items.
     */
    public static function renderPhotoshop(): void
    {
        $projects = self::fetch();


        if ($projects === []) {
            return;
        }


        foreach ($projects as $project) {

            $title = htmlspecialchars(
                (string) $project->title,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $summary = htmlspecialchars(
                (string) $project->summary,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $bigImage = htmlspecialchars(
                (string) $project->big_img,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img576 = htmlspecialchars(
                (string) $project->img_576,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img500 = htmlspecialchars(
                (string) $project->img_500,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img450 = htmlspecialchars(
                (string) $project->img_450,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img408 = htmlspecialchars(
                (string) $project->img_408,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img350 = htmlspecialchars(
                (string) $project->img_350,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $img282 = htmlspecialchars(
                (string) $project->img_282,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            $defaultImage = htmlspecialchars(
                (string) $project->img,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


            echo <<<HTML
            <article
                class="project photoshop"
                data-category="photoshop"
                aria-label="Image editing project: {$title}">

                <a
                    href="/images/photoshops/BIG/{$bigImage}"
                    data-lightbox="photoshops"
                    data-title="{$title}">

                    <picture class="image">

                        <source
                            srcset="/images/photoshops/SMALL/{$img576}"
                            media="(min-width: 1260px)">

                        <source
                            srcset="/images/photoshops/SMALL/{$img500}"
                            media="(min-width: 1200px)">

                        <source
                            srcset="/images/photoshops/SMALL/{$img450}"
                            media="(min-width: 1024px)">

                        <source
                            srcset="/images/photoshops/SMALL/{$img408}"
                            media="(min-width: 900px)">

                        <source
                            srcset="/images/photoshops/SMALL/{$img350}"
                            media="(min-width: 768px)">

                        <source
                            srcset="/images/photoshops/SMALL/{$img282}"
                            media="(max-width: 456px)">

                        <img
                            src="/images/photoshops/SMALL/{$defaultImage}"
                            alt="{$title} image editing project by Mirnes Glamočić"
                            loading="lazy"
                            decoding="async">

                    </picture>

                    <div class="content fade">
                        <p>{$summary}</p>
                    </div>

                </a>

            </article>
            HTML;
        }
    }
}