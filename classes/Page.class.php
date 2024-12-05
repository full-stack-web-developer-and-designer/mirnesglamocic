<?php
class Page
{
    private static $db;
    public static function get($page_id)
    {
        $sql = self::$db->query(
            "SELECT * FROM pages WHERE page_id = {$page_id}"
        );
        $page = $sql->fetchObject("Page");
        return $page;
    }
    public static function getAll()
    {
        $sql = self::$db->query("SELECT * FROM pages");
        $pageArr = $sql->fetchAll();
        return $pageArr;
    }
    public static function init()
    {
        self::$db = Connect::getInstance();
    }
}
