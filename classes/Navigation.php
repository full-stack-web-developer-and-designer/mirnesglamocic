<?php
class Navigation extends Entity
{
    protected static string $tableName = 'navigation';
    protected static string $keyColumn = 'nav_id';

    public static function renderMenu(): void
    {
        $sql = "
            SELECT 
                n.label,
                n.link_type,
                n.section_id,
                n.target,
                p.slug
            FROM navigation n
            LEFT JOIN pages p ON n.page_id = p.page_id
        ";

        $stmt = self::$db->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            if (empty($row['label'])) {
                continue;
            }

            $label  = htmlspecialchars($row['label'], ENT_QUOTES, 'UTF-8');
            $target = $row['target'] ?: '_self';

            $url = match ($row['link_type']) {
                'page'    => !empty($row['slug']) ? '/' . $row['slug'] : null,
                'section' => !empty($row['section_id']) ? '/#' . $row['section_id'] : null,
                default   => null,
            };

            if ($url === null) {
                continue;
            }

            $urlEsc    = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
            $targetEsc = htmlspecialchars($target, ENT_QUOTES, 'UTF-8');

            echo <<<HTML
            <li>
                <a href="{$urlEsc}"
                   target="{$targetEsc}"
                   title="View {$label}"
                   aria-label="View {$label}">
                    {$label}
                </a>
            </li>
            HTML;
        }
    }
}
