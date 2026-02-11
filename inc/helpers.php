<?php
/**
 * helpers.php
 *
 * Provides utility functions for the portfolio website.
 * Includes:
 * - load_js(): loads JS files with cache-busting
 * - asset(): generates versioned CSS/JS URLs
 * - e(): sanitizes output for HTML
 * - renderMultilineTitle(): splits titles for multi-line display
 * - renderParagraphs(): converts text into HTML paragraphs
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-09
 *
 * Usage:
 * Include this file to use helper functions across PHP pages:
 * <?php include_once __DIR__ . '/helpers.php'; ?>
 */
function load_js(array $files, string $folder = '/JS/', string $minFolder = '/JS/'): void
{
    $env = defined('ENV') ? ENV : 'production';

    foreach ($files as $file) {
        $fileName = ($env === 'development')
            ? $file
            : str_replace('.js', '.min.js', $file);

        $path = ($env === 'development')
            ? $folder . $fileName
            : $minFolder . $fileName;

        $fullPath = $_SERVER['DOCUMENT_ROOT'] . $path;
        $version = file_exists($fullPath) ? filemtime($fullPath) : time();

        echo '<script src="' . $path . '?v=' . $version . '" defer></script>' . PHP_EOL;
    }
}


/**
 * Cache-busted asset loader (CSS / JS)
 * Appends file modification time as version query string
 *
 * @param string $path Relative path from document root (e.g. /CSS/style.css)
 * @return string Versioned asset URL
 */
function asset(string $path): string
{
    $fullPath = $_SERVER['DOCUMENT_ROOT'] . $path;

    if (file_exists($fullPath)) {
        return $path . '?v=' . filemtime($fullPath);
    }

    return $path;
}

// ========================================
// Utility: sanitize output
// ========================================
function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Splits a title into two lines by the last space.
 * Falls back to single-line if no space exists.
 */
function renderMultilineTitle(string $title): string
{
    $title = trim($title);

    if (strpos($title, ' ') === false) {
        return htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    $pos = strrpos($title, ' ');

    return
        htmlspecialchars(substr($title, 0, $pos), ENT_QUOTES, 'UTF-8') .
        '<br>' .
        htmlspecialchars(substr($title, $pos + 1), ENT_QUOTES, 'UTF-8');
}
/**
 * Renders a description split into paragraphs.
 * Uses double line-breaks as paragraph separators.
 *
 * @param string $text
 * @return string HTML paragraphs
 */
function renderParagraphs(string $text): string
{
    $text = trim($text);

    // Split on empty line
    $paragraphs = preg_split("/\R{2,}/", $text);

    $html = '';

    foreach ($paragraphs as $paragraph) {
        $html .= '<p>' . nl2br(htmlspecialchars(trim($paragraph), ENT_QUOTES, 'UTF-8')) . '</p>';
    }

    return $html;
}

