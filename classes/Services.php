<?php
class Services extends Entity
{
    protected static string $tableName = 'services';
    protected static string $keyColumn = 'service_id';

    public function renderServices(): void
    {
        $stmt = self::$db->query(
            "SELECT * FROM " . static::$tableName
        );

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $icon_id     = htmlspecialchars($row['icon_id'], ENT_QUOTES);
            $aria        = htmlspecialchars($row['aria'], ENT_QUOTES);
            $description = $row['description'];

            // --- TITLE WITH <br> ---
            $titleRaw = htmlspecialchars($row['title'], ENT_QUOTES);
            $words = explode(' ', $titleRaw);
            $title = $words[0] . '<br>' . implode(' ', array_slice($words, 1));

            echo "
            <article class='services' aria-label='{$aria}'>
                <svg class='service-icon' width='100' height='100' aria-hidden='true'>
                    <title>{$titleRaw}</title>
                    <use xlink:href='#icon-{$icon_id}'></use>
                </svg>
                <h4>{$title}</h4>
                <p>{$description}</p>
            </article>";
        }
    }
}
