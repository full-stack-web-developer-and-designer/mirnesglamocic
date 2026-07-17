<?php
/**
 * Config.php
 *
 * Handles access to global configuration values.
 *
 * Supports slash-separated paths.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026
 */

declare(strict_types=1);

// ========================================
// Environment
// ========================================

$host = strtolower(
    preg_replace(
        '/:\d+$/',
        '',
        $_SERVER['HTTP_HOST'] ?? ''
    )
);

define(
    'ENV',
    in_array(
        $host,
        [
            '127.0.0.1',
            'localhost',
        ],
        true
    )
        ? 'development'
        : 'production'
);

class Config
{
    /**
     * WhatsApp/Viber phone number.
     */
    public const PHONE = '387671047935';

    /**
     * Get configuration value.
     *
     * Example:
     *
     * Config::get('mysql/host');
     */
    public static function get(
        ?string $path = null
    ): mixed {
        if ($path === null || $path === '') {
            return null;
        }

        if (
            !isset($GLOBALS['config']) ||
            !is_array($GLOBALS['config'])
        ) {
            return null;
        }

        $result = $GLOBALS['config'];

        foreach (explode('/', $path) as $part) {
            if (
                !is_array($result) ||
                !array_key_exists($part, $result)
            ) {
                return null;
            }

            $result = $result[$part];
        }

        return $result;
    }

    /**
     * Default contact message.
     */
    public static function defaultMessage(): string
    {
        $page = basename(
            $_SERVER['PHP_SELF'] ?? ''
        );

        return match ($page) {
            'projects.php' =>
                "Hello Mirnes,\n\n" .
                "I viewed your projects portfolio " .
                "and would like to discuss a website project.",

            'resume.php' =>
                "Hello Mirnes,\n\n" .
                "I reviewed your resume and would " .
                "like to discuss a job opportunity.",

            default =>
                "Hello Mirnes,\n\n" .
                "I found your website and would " .
                "like to get in touch.",
        };
    }
}
