<?php
/**
 * DB.php
 * 
 * Singleton class to manage the PDO database connection.
 * Ensures only one PDO instance is created and reused across the application.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $pdo = DB::getInstance();
 */

class DB
{
    /**
     * Holds the single PDO instance
     */
    private static ?PDO $instance = null;

    /**
     * Private constructor to prevent direct instantiation
     */
    private function __construct() {}

    /**
     * Prevent cloning of the instance
     */
    private function __clone() {}

    /**
     * Returns the single PDO instance
     *
     * @return PDO
     */
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
