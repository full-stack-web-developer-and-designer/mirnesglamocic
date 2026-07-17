<?php
/**
 * DB.php
 *
 * Singleton class to manage PDO database connection.
 *
 * Ensures only one PDO instance exists
 * and is reused throughout the application.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);

class DB
{
    /**
     * PDO instance.
     */
    private static ?PDO $instance = null;

    /**
     * Private constructor.
     */
    private function __construct()
    {
    }

    /**
     * Prevent cloning.
     */
    private function __clone()
    {
    }

    /**
     * Get PDO connection.
     */
    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            try {
                $host = (string) Config::get(
                    'mysql/host'
                );

                $database = (string) Config::get(
                    'mysql/db'
                );

                $charset = (string) (
                    Config::get(
                        'mysql/charset'
                    ) ?? 'utf8mb4'
                );

                $dsn =
                    "mysql:host={$host};" .
                    "dbname={$database};" .
                    "charset={$charset}";

                self::$instance = new PDO(
                    $dsn,
                    (string) Config::get(
                        'mysql/user'
                    ),
                    (string) Config::get(
                        'mysql/password'
                    ),
                    [
                        PDO::ATTR_ERRMODE =>
                            PDO::ERRMODE_EXCEPTION,

                        PDO::ATTR_DEFAULT_FETCH_MODE =>
                            PDO::FETCH_ASSOC,

                        PDO::ATTR_EMULATE_PREPARES =>
                            false,
                    ]
                );
            } catch (PDOException $e) {
                throw new RuntimeException(
                    'Database connection failed.',
                    0,
                    $e
                );
            }
        }

        return self::$instance;
    }

    /**
     * Begin database transaction.
     */
    public static function beginTransaction(): bool
    {
        return self::getInstance()
            ->beginTransaction();
    }

    /**
     * Commit transaction.
     */
    public static function commit(): bool
    {
        return self::getInstance()
            ->commit();
    }

    /**
     * Rollback transaction.
     */
    public static function rollback(): bool
    {
        $db = self::getInstance();

        if (!$db->inTransaction()) {
            return false;
        }

        return $db->rollBack();
    }
}