<?php
class Pages extends Entity
{
    public static $tableName = "pages";
    public static $keyColumn = "page_id";

    public function render()
    {
        $render = "<h1>$this->title</h1>";
        return $render;
    }
}
