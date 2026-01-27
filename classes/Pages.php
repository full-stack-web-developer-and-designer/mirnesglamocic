<?php
/**
 * Pages.php
 * 
 * Represents website pages and handles rendering page-specific content.
 * Fetches page data from the database and provides utility methods
 * to render the page title and other elements.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $page = Pages::get($pageId);
 *   echo $page->renderPage();
 */

class Pages extends Entity
{
    protected static string $tableName = "pages";
    protected static string $keyColumn = "page_id";

    public int $page_id;
    public string $slug;
    public string $title;
    public string $created_at;
    public string $updated_at;

    /**
     * Render the page content
     *
     * Currently renders the page title wrapped in an <h1> tag.
     *
     * @return string HTML content
     */
    public function renderPage(): string
    {
        $render = "<h1>$this->title</h1>";
        return $render;
    }
}
