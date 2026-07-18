<?php
/**
 * Logo.php
 *
 * Handles logo portfolio projects.
 *
 * Responsibilities:
 * - Fetch logo projects from the database
 * - Provide structured logo data for Mirnes AI
 * - Render logo projects with Lightbox support
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);


class Logo extends Entity
{
    /**
     * Fetch logo projects from the database.
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
                pi.image
            FROM projects p
            INNER JOIN project_images pi
                ON pi.project_id = p.project_id
            WHERE p.category_id = 3
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
     * Return logo projects formatted for Mirnes AI.
     *
     * Only textual project information is returned.
     * Image paths are not required by the AI prompt.
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
            WHERE p.category_id = 3
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
     * Render logo project slider with Lightbox support.
     */
    public static function renderLogo(): void
    {
        $projects = self::fetch();


        foreach ($projects as $project) {

            $image = htmlspecialchars(
                (string) $project->image,
                ENT_QUOTES | ENT_HTML5,
                'UTF-8'
            );


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


            echo "
                <article
                    class='project logo'
                    aria-label='Logo project: {$title}'>

                    <a
                        href='/images/logos/BIG/{$image}'
                        data-lightbox='logos'
                        data-title='{$title}'>

                        <img
                            src='/images/logos/SMALL/{$image}'
                            alt='{$title} logo design by Mirnes Glamočić'
                            class='blur'
                            loading='lazy'
                            decoding='async'>

                        <div class='content fade'>
                            <p>{$summary}</p>
                        </div>

                    </a>

                </article>
            ";
        }
    }
}