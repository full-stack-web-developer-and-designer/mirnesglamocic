<?php
// Active record pattern

Entity::init();
/**
 * @method static static|null get(int $id)
 * @method static static[] getAll()
 */
abstract class Entity
{
    protected static string $tableName;
    protected static string $keyColumn = 'id';
    protected static PDO $db;

    public static function init(): void
    {
        self::$db = DB::getInstance();
    }

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

    public static function getAll(): array
    {
        $table = static::$tableName;
        return self::$db
            ->query("SELECT * FROM {$table}")
            ->fetchAll(PDO::FETCH_CLASS, static::class);
    }
}
