<?php
class Pages extends Entity
{
    protected static string $tableName = "pages";
    protected static string $keyColumn = "page_id";

    public int $page_id;
    public string $slug;
    public string $title;
    public string $created_at;
    public string $updated_at;

    public function renderPage()
    {
        $render = "<h1>$this->title</h1>";
        return $render;
    }
}
