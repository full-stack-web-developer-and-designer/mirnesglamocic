<?php
/**
 * Class WebsiteRenderer
 *
 * Renders website projects as HTML articles.
 *
 * Usage:
 *   $projects = WebsiteProject::fetch(['portfolio']);
 *   WebsiteRenderer::render($projects);
 */
class WebsiteRenderer
{
    /**
     * Render a list of website projects.
     *
     * @param object[] $projects Array of projects fetched via WebsiteProject::fetch()
     */
    public static function render(array $projects): void
    {
        foreach ($projects as $project) {

            // website_types is space-separated, not comma-separated
            $types = !empty($project->website_types)
                ? explode(' ', $project->website_types)
                : [];

            // Skills as bullets
            $skills = array_map('trim', explode(',', $project->skills ?? ''));
            $skills_bullet = htmlspecialchars(implode(' • ', $skills), ENT_QUOTES);

            // Features list
            $features = array_map('trim', explode(',', $project->features ?? ''));

            // Image paths
            $imgBase = IMG_WEBSITES;

            // HTML output using HEREDOC
            echo <<<HTML
<article class="case-study">
    <!-- Responsive images -->
    <picture>
        <source srcset="{$imgBase}{$project->img_1100} 1x, {$imgBase}{$project->img_1100_2x} 2x" media="(min-width: 1100px)">
        <source srcset="{$imgBase}{$project->img_768} 1x, {$imgBase}{$project->img_768_2x} 2x" media="(min-width: 376px)">
        <source srcset="{$imgBase}{$project->img_375} 1x, {$imgBase}{$project->img_375_2x} 2x" media="(max-width: 375px)">
        <img src="{$imgBase}{$project->img}" alt="{$project->title}" loading="lazy">
    </picture>

    <div class="view">
        <h2>{$project->title}</h2>

        <div class="block">
            <h2>Project Overview</h2>
        </div>
        <div class="overview">
            <div class="overview-box">
                <strong>Role:</strong>
                <span>{$project->role}</span>
            </div>
            <div class="overview-box">
                <strong>Tech:</strong>
                <span>{$skills_bullet}</span>
            </div>
        </div>

        <div class="block">
            <h2>Key Features</h2>
            <ul class="features">
HTML;

            foreach ($features as $feature) {
                $featureEscaped = htmlspecialchars($feature, ENT_QUOTES);
                echo "<li>{$featureEscaped}</li>";
            }

            echo <<<HTML
            </ul>
        </div>

        <div class="actions">
HTML;

            // Live site link
            if (!empty($project->link)) {
                $link = htmlspecialchars($project->link, ENT_QUOTES);
                echo <<<HTML
            <a href="https://{$link}" target="_blank" class="btn primary" rel="noopener noreferrer">
                <svg class="icon" aria-hidden="true">
                    <use href="#icon-link"></use>
                </svg>
                Live Site &raquo;
            </a>
HTML;
            }

            // GitHub link
            if (!empty($project->github)) {
                $github = htmlspecialchars($project->github, ENT_QUOTES);
                echo <<<HTML
            <a href="https://github.com/full-stack-web-developer-and-designer/{$github}" target="_blank" class="btn secondary" rel="noopener noreferrer">
                <svg class="icon" aria-hidden="true">
                    <use href="#icon-github"></use>
                </svg>
                View Source &raquo;
            </a>
HTML;
            }

            echo <<<HTML
        </div> <!-- actions -->
    </div> <!-- view -->
</article>
HTML;
        }
    }
}
