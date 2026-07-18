<?php
/**
 * CertDesc.php
 *
 * Handles rendering of certificate descriptions for the website.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);

class CertDesc extends Entity
{
    protected static string $tableName = 'cert_desc';


    /**
     * Render all certificate descriptions
     */
    public function renderDescription(): void
    {
        $db = DB::getInstance();


        $sql = "
            SELECT *
            FROM " . static::$tableName . "
        ";


        $stmt = $db->query($sql);


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


            $icon_id = htmlspecialchars(
                $row['icon_id'],
                ENT_QUOTES,
                'UTF-8'
            );


            $title = renderMultilineTitle(
                $row['title']
            );


            $description = nl2br(
                htmlspecialchars(
                    $row['description'],
                    ENT_QUOTES,
                    'UTF-8'
                )
            );


            $slug = htmlspecialchars(
                $row['slug'],
                ENT_QUOTES,
                'UTF-8'
            );



            echo <<<HTML

            <article class="certificate">

                <span>
                    <svg class="icons-cert"
                         width="30"
                         height="30"
                         aria-hidden="true">

                        <title>{$title}</title>

                        <use xlink:href="#icon-{$icon_id}">
                        </use>

                    </svg>
                </span>


                <h3>{$title}</h3>


                <p class="intro">
                    {$description}
                </p>


                <p>
                    <a href="{$slug}" class="button">
                        VIEW CERTIFICATES &raquo;
                    </a>
                </p>

            </article>

HTML;

        }
    }
}