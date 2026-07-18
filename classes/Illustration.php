<?php
/**
 * Illustration.php
 *
 * Handles illustration portfolio projects.
 *
 * Responsibilities:
 * - Fetch illustration projects from the database
 * - Provide structured illustration data for Mirnes AI
 * - Render illustration projects with Lightbox support
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);


class Illustration extends Entity
{
    /**
     * Fetch illustration projects from the database.
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
            WHERE p.category_id = 4
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
     * Return illustration projects formatted for Mirnes AI.
     *
     * Only textual project information is returned.
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
            WHERE p.category_id = 4
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
     * Render illustration slider HTML.
     */
    public static function renderIllustration(): void
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


            echo <<<HTML
            <article
                class="project illustration"
                aria-label="Illustration project: {$title}">

                <a
                    href="/images/illustrations/BIG/{$image}"
                    data-lightbox="illustrations"
                    data-title="{$title}">

                    <img
                        src="/images/illustrations/SMALL/{$image}"
                        alt="{$title} illustration by Mirnes Glamočić"
                        class="blur"
                        loading="lazy"
                        decoding="async">

                    <div class="content fade">
                        <p>{$summary}</p>
                    </div>

                </a>

            </article>
            HTML;
        }
    }
}