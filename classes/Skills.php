<?php
/**
 * Skills.php
 * 
 * Handles fetching and rendering skills grouped by category.
 * Skills are displayed as SVG icons, with the last three categories combined
 * into a human-readable list format.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $skills = new Skills();
 *   $skills->renderSkills();
 */

class Skills extends Entity
{
    protected static string $tableName = 'skills';
    protected static string $keyColumn = 'skills_id';

    /**
     * Render all skills as SVG icons grouped by category
     */
    public function renderSkills(): void
    {
        $stmt = self::$db->query(
            "SELECT *
             FROM " . static::$tableName . "
             WHERE page_id = 1
             ORDER BY category_order, sort_order"
        );

        /* =========================
           GROUP SKILLS BY CATEGORY
           ========================= */
        $groups = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $groups[$row['category']][] = $row;
        }

        /* =========================
           SPLIT LAST 3 CATEGORIES
           ========================= */
        $firstCategories = array_slice($groups, 0, count($groups) - 3, true);
        $lastCategories  = array_slice($groups, -3, null, true);

        /* =========================
           HELPER: Proper capitalization with exceptions
           ========================= */
        $capitalize = function(string $s): string {
            $exceptions = [
                'seo' => 'SEO',
                'php' => 'PHP',
                'html' => 'HTML',
                'css' => 'CSS',
                'js' => 'JavaScript',
                'mysql' => 'MySQL',
                'git' => 'Git',
                'vs code' => 'VSCode',
                'xampp' => 'XAMPP',
                'wamp' => 'WAMP',
                'ubuntu' => 'Ubuntu',
                'fedora' => 'Fedora',
                'debian' => 'Debian',
                'windows' => 'Windows',
            ];

            $key = strtolower(trim($s));
            if (isset($exceptions[$key])) {
                return $exceptions[$key];
            }

            return mb_convert_case($s, MB_CASE_TITLE, 'UTF-8');
        };

        /* =========================
           HELPER: human readable list for last 3 categories
           ========================= */
        $humanList = function (array $items): string {
            if (count($items) === 1) return $items[0];
            if (count($items) === 2) return "{$items[0]} and {$items[1]}";
            $last = array_pop($items);
            return implode(', ', $items) . " and {$last}";
        };

        echo "<div class='skills'>";

        /* =========================
           NORMAL CATEGORIES
           ========================= */
        foreach ($firstCategories as $category => $skills) {
            echo "<div class='skills-column'>";
            echo "<h3>" . $capitalize($category) . "</h3>";
            echo "<div class='skills-list'>"; // 🔑 REQUIRED WRAPPER

            foreach ($skills as $skill) {
                $icon_id = htmlspecialchars($skill['icon_id'], ENT_QUOTES);
                $name    = htmlspecialchars($skill['name'], ENT_QUOTES);

                echo "
                <div class='skill' aria-label='{$name}' title='{$name}' role='img'>
                    <svg>
                        <title>{$name}</title>
                        <use xlink:href='#icon-{$icon_id}'></use>
                    </svg>
                </div>";
            }

            echo "</div>"; // skills-list
            echo "</div>"; // skills-column
        }

        /* =========================
           LAST THREE CATEGORIES
           ========================= */
        $lastTitles    = array_map($capitalize, array_keys($lastCategories));
        $combinedTitle = $humanList($lastTitles);

        echo "<div class='skills-footer'>";
        echo "<h3>{$combinedTitle}</h3>";
        echo "<div class='skills-footer-columns'>";
        echo "<div class='skills-list'>"; // single grid for all last three categories

        foreach ($lastCategories as $skills) {
            foreach ($skills as $skill) {
                $icon_id = htmlspecialchars($skill['icon_id'], ENT_QUOTES);
                $name    = htmlspecialchars($skill['name'], ENT_QUOTES);

                echo "
                <div class='skill' aria-label='{$name}' title='{$name}' role='img'>
                    <svg width='100' height='100'>
                        <title>{$name}</title>
                        <use xlink:href='#icon-{$icon_id}'></use>
                    </svg>
                </div>";
            }
        }

        echo "</div>"; // skills-list
        echo "</div>"; // skills-footer-columns
        echo "</div>"; // skills-footer
        echo "</div>"; // skills
    }
}
