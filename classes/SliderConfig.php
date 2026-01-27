<?php
/**
 * SliderConfig.php
 * 
 * Defines the mapping of slider keys to skills and conditions.
 * Used by the Slider class to fetch and render certificates.
 * 
 * Each key in MAP corresponds to a slider identifier.
 * - 'skills'    => array of skill names to filter certificates
 * - 'conditions'=> array of conditions with optional 'class' for filtering
 * 
 * Example:
 *   'css' => [
 *       'conditions' => [
 *           ['skill' => 'CSS', 'class' => 'linkedin preview'],
 *           ['skill' => 'CSS WebDesign', 'class' => 'linkedin preview'],
 *       ],
 *   ]
 * 
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-01-27
 */

final class SliderConfig
{
    /**
     * @var array<string, array{skills?: string[], conditions?: array<array{skill: string, class?: string}>}>
     * Maps slider keys to their respective skills or conditions.
     */
    public const MAP = [
        'angular' => [
            'skills' => ['Angular'],
        ],
        'backend_intro' => [
            'skills' => ['BackendIntro'],
        ],
        'backend_php' => [
            'skills' => ['BackendPHP'],
        ],
        'backend_python' => [
            'skills' => ['BackendPython'],
        ],
        'bash' => [
            'skills' => ['Bash'],
        ],
        'bootstrap' => [
            'skills' => ['Bootstrap', 'Bootstrap WebDesign'],
        ],
        'centos' => [
            'skills' => ['CentOS'],
        ],
        'css' => [
            'conditions' => [
                ['skill' => 'CSS', 'class' => 'linkedin preview'],
                ['skill' => 'CSS WebDesign', 'class' => 'linkedin preview'],
            ],
        ],
        'css_new' => [
            'conditions' => [
                ['skill' => 'CSS', 'class' => 'linkedin_new preview'],
                ['skill' => 'CSS WebDesign', 'class' => 'linkedin_new preview'],
            ],
        ],
        'docker' => [
            'skills' => ['Docker'],
        ],
        'editors' => [
            'skills' => ['Editors'],
        ],
        'frontend_linkedin' => [
            'conditions' => [
                ['skill' => 'Frontend', 'class' => 'linkedin preview'],
                ['skill' => 'Frontend WebDesign'],
            ],
        ],
        'frontend_sololearn' => [
            'conditions' => [
                ['skill' => 'Frontend', 'class' => 'SoloLearn'],
            ],
        ],
        'frontend_intro' => [
            'skills' => ['FrontendIntro', 'FrontendIntro WebDesign', 'FrontendIntro UX WebDesign'],
        ],
        'git' => [
            'conditions' => [
                ['skill' => 'Git', 'class' => 'linkedin'],
            ],
        ],
        'git_new' => [
            'conditions' => [
                ['skill' => 'Git', 'class' => 'linkedin_new preview'],
            ],
        ],
        // ... continue mapping all other slider keys as defined
    ];
}
