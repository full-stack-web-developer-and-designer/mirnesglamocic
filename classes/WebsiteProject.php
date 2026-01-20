<?php

class WebsiteProject extends Entity
{
    public static function fetch(array $typeSlugs = []): array
    {
        $sql = "
            SELECT 
                p.project_id,
                p.title,
                p.summary,

                pw.role,
                pw.skills,
                pw.features,
                pw.link,
                pw.github,

                pw.img_1100,
                pw.img_1100_2x,
                pw.img_768,
                pw.img_768_2x,
                pw.img_375,
                pw.img_375_2x,
                pw.img,

                GROUP_CONCAT(DISTINCT wt.slug ORDER BY wt.slug SEPARATOR ' ') AS website_types
            FROM projects p
            INNER JOIN project_websites pw 
                ON pw.project_id = p.project_id
            LEFT JOIN project_website_types pwt 
                ON pwt.project_id = p.project_id
            LEFT JOIN website_types wt 
                ON wt.website_type_id = pwt.website_type_id
            WHERE p.category_id = 1
            GROUP BY p.project_id
        ";

        $params = [];

        if (!empty($typeSlugs)) {
            $having = [];
            foreach ($typeSlugs as $slug) {
                $having[] = "SUM(wt.slug = ?) > 0";
                $params[] = $slug;
            }

            $sql .= " HAVING " . implode(' AND ', $having);
        }

        $sql .= " ORDER BY p.project_id DESC";

        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

