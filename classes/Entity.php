<?php
/**
 * Entity.php
 * 
 * Abstract base class for all database entities.
 * Provides basic CRUD-like methods using PDO, including:
 *   - get($id): fetch single row as object
 *   - getAll(): fetch all rows as objects
 * 
 * Requires a concrete class to define:
 *   - protected static string $tableName
 *   - protected static string $keyColumn (defaults to 'id')
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $page = Page::get($id);      // Fetch single record
 *   $allPages = Page::getAll();  // Fetch all records
 */

abstract class Entity
{
    /**
     * Name of the table associated with the entity
     */
    protected static string $tableName;

    /**
     * Primary key column of the table
     */
    protected static string $keyColumn = 'id';

    /**
     * Shared PDO instance
     */
    protected static PDO $db;

    /**
     * Initialize the PDO connection
     */
    public static function init(): void
    {
        self::$db = DB::getInstance();
    }

    /**
     * Get a single entity by ID
     *
     * @param int $id
     * @return object|null Returns an instance of the called class or null if not found
     */
    public static function get(int $id): ?object
    {
        $table = static::$tableName;
        $key   = static::$keyColumn;
        $class = static::class;

        $stmt = self::$db->prepare(
            "SELECT * FROM {$table} WHERE {$key} = :id LIMIT 1"
        );
        $stmt->execute(['id' => $id]);

        return $stmt->fetchObject($class) ?: null;
    }

    /**
     * Get all records from the table as objects
     *
     * @return array Array of objects of the called class
     */
    public static function getAll(): array
    {
        return self::$db
            ->query("SELECT * FROM " . static::$tableName)
            ->fetchAll(PDO::FETCH_CLASS, static::class);
    }
}

// Initialize PDO connection when this file is included
Entity::init();
