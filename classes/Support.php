<?php
/**
 * Support.php
 *
 * Handles rendering of support links (e.g., Patreon, BuyMeACoffee) with icons.
 *
 * Each support item is linked to a page and includes:
 * - href: the URL to support platform
 * - aria: accessibility label
 * - icon_id: SVG icon identifier
 *
 * Example usage:
 *   $support = new Support();
 *   echo $support->render();
 *
 * Author: Mirnes Glamočić
 * Created: 2023
 * Updated: 2026-01-27
 */

class Support extends Entity
{
    protected static string $tableName = 'support';
    protected static string $keyColumn  = 'support_id';

    public int $support_id;
    public int $page_id;
    public string $href = '';
    public string $aria = '';
    public string $icon_id = '';

    /**
     * Render a single support link with SVG icon and accessible label.
     *
     * @return string HTML output
     */
    public function renderSupport(): string
    {
        $href      = htmlspecialchars($this->href, ENT_QUOTES, 'UTF-8');
        $aria      = htmlspecialchars($this->aria, ENT_QUOTES, 'UTF-8');
        $icon_id   = htmlspecialchars($this->icon_id, ENT_QUOTES, 'UTF-8');
        $labelText = htmlspecialchars(
            str_replace(['Support me on ', 'Support me'], '', $this->aria),
            ENT_QUOTES,
            'UTF-8'
        );

        return <<<HTML
        <span class="support">
            <a class="support-link"
            href="{$href}"
            aria-label="{$aria}"
            target="_blank"
            rel="noopener noreferrer">
                <svg class="icon social-icon support-icon" role="img">
                    <title>{$aria}</title>
                    <use href="#icon-{$icon_id}"></use>
                </svg>
                <span class="support-label">{$labelText}</span>
            </a>
        </span>
        HTML;
    }
}
