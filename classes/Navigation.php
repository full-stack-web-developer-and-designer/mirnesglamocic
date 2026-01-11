<?php
    class Navigation extends Entity
{
    protected static string $tableName = 'navigation';
    protected static string $keyColumn = 'id';

    public static function renderMenu(): void
    {
        $sql = "
            SELECT 
                n.label,
                n.link_type,
                n.section_id,
                n.external_url,
                n.target,
                p.slug
            FROM navigation n
            LEFT JOIN pages p ON n.page_id = p.page_id
            ORDER BY n.position ASC
        ";

        $stmt = self::$db->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            if (empty($row['label'])) {
                continue;
            }

            $label  = htmlspecialchars($row['label'], ENT_QUOTES, 'UTF-8');
            $aria   = 'View ' . $label;
            $target = $row['target'] ?: '_self';

            $url = match ($row['link_type']) {
                'page'     => !empty($row['slug']) ? '/' . $row['slug'] : null,
                'section'  => !empty($row['section_id']) ? '/#' . $row['section_id'] : null,
                'external' => !empty($row['external_url']) ? $row['external_url'] : null,
                default    => null,
            };

            if ($url === null) {
                continue;
            }

            $urlEsc    = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
            $targetEsc = htmlspecialchars($target, ENT_QUOTES, 'UTF-8');

            $rel = ($row['link_type'] === 'external' && $target === '_blank')
                ? ' rel="noopener noreferrer"'
                : '';

            echo <<<HTML
            <li>
                <a href="{$urlEsc}"
                   target="{$targetEsc}"{$rel}
                   title="{$aria}"
                   aria-label="{$aria}">
                    {$label}
                </a>
            </li>
            HTML;
        }
    }
}
