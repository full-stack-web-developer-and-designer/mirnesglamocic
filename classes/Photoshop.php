<?php

class Photoshop extends Entity
{
    /**
     * Fetch Photoshop projects
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
     * Render Photoshop items
     */
    public static function render(): void
    {
        $projects = self::fetch();

        if (empty($projects)) {
            return; // important: no broken HTML
        }

        foreach ($projects as $row) {
            echo "
            <article class='project photoshop' data-category='photoshop'>
                <a href='/images/photoshops/BIG/{$row->big_img}' data-lightbox='photoshops'>
                    <picture class='image'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_576}' media='(min-width: 1261px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_530}' media='(min-width: 1209px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_500}' media='(min-width: 1140px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_450}' media='(min-width: 1040px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_408}' media='(min-width: 954px)'>
                        <source srcset='/images/photoshops/SMALL/{$row->img_350}' media='(min-width: 840px)'>
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
