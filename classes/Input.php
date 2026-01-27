<?php
/**
 * Input.php
 * 
 * Handles safe access to HTTP input data ($_POST and $_GET).
 * Provides utility methods to check if input exists and to retrieve values.
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 * 
 * Usage:
 *   if (Input::exists('post')) { 
 *       $username = Input::get('username'); 
 *   }
 */

class Input
{
    /**
     * Check if input exists for a given request type
     *
     * @param string $type "post" or "get" (default: "post")
     * @return bool True if data exists, false otherwise
     */
    public static function exists($type = "post")
    {
        switch ($type) {
            case "post":
                return !empty($_POST);
            case "get":
                return !empty($_GET);
            default:
                return false;
        }
    }

    /**
     * Retrieve a value from POST or GET
     *
     * @param string $item Name of input field
     * @return string Value of input field or empty string if not set
     */
    public static function get($item)
    {
        if (isset($_POST[$item])) {
            return $_POST[$item];
        } elseif (isset($_GET[$item])) {
            return $_GET[$item];
        }
        return "";
    }
}
