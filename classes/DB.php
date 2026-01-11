<?php

class DB
{
    private static ?PDO $instance = null;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $dsn =
                "mysql:host=" . Config::get("mysql/host") .
                ";dbname=" . Config::get("mysql/db") .
                ";charset=" . Config::get("mysql/charset");

            self::$instance = new PDO(
                $dsn,
                Config::get("mysql/user"),
                Config::get("mysql/password"),
                [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]
            );
        }

        return self::$instance;
    }
}
