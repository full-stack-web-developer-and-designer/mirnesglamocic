<?php
// inc/helpers.php

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

