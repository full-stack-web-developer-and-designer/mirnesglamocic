<?php
/**
 * Entity.php
 *
 * Abstract base class for all database entities.
 *
 * Provides common database methods:
 *
 * - get($id)
 * - getAll()
 *
 * Concrete classes must define:
 *
 * - protected static string $tableName
 * - protected static string $keyColumn
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);


abstract class Entity
{
    /**
     * Database table name.
     */
    protected static string $tableName;



    /**
     * Primary key column.
     */
    protected static string $keyColumn = 'id';



    /**
     * Get single entity by ID.
     */
    public static function get(
        int $id
    ): ?static {


        $db = DB::getInstance();


        $table = static::$tableName;

        $key = static::$keyColumn;


        $sql = "
            SELECT *
            FROM {$table}
            WHERE {$key} = :id
            LIMIT 1
        ";



        $stmt = $db->prepare($sql);



        $stmt->execute([

            'id' => $id

        ]);



        $result = $stmt->fetchObject(
            static::class
        );



        return $result ?: null;
    }





    /**
     * Get all entities.
     */
    public static function getAll(): array
    {

        $db = DB::getInstance();



        $sql = "
            SELECT *
            FROM " . static::$tableName;



        return $db
            ->query($sql)
            ->fetchAll(
                PDO::FETCH_CLASS,
                static::class
            );
    }

}
