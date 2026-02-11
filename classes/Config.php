<?php
/**
 * Config.php
 * 
 * Handles access to the global configuration array.
 * Allows fetching configuration values using a slash-separated path.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   $dbHost = Config::get('database/host');
 *   $siteName = Config::get('site/name');
 */
// ========================================
// Environment
// ========================================
define('ENV', in_array($_SERVER['HTTP_HOST'], ['mirnesglamocic.ba', '127.0.0.1', 'localhost']) ? 'development' : 'production');

class Config
{
    /**
     * Get a value from the global configuration array.
     *
     * @param string|null $path Slash-separated path, e.g., "database/host"
     * @return mixed Returns the value if found, or false if not
     */
    public static function get($path = null)
    {
        if ($path) {
            $result = $GLOBALS["config"];
            $path = explode("/", $path);
            foreach ($path as $part) {
                if (isset($result[$part])) {
                    $result = $result[$part];
                }
            }
            return $result;
        }
        return false;
    }
}
