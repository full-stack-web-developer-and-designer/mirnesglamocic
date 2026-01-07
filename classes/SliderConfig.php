<?php
final class SliderConfig
{
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
                [
                    'skill' => 'CSS',
                    'class' => 'linkedin preview',
                ],
                [
                    'skill' => 'CSS WebDesign',
                    'class' => 'linkedin preview',
                ],
            ],
        ],

        'css_new' => [
            'conditions' => [
                [
                    'skill' => 'CSS',
                    'class' => 'linkedin_new preview',
                ],
                [
                    'skill' => 'CSS WebDesign',
                    'class' => 'linkedin_new preview',
                ],
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
                [
                    'skill' => 'Frontend',
                    'class' => 'linkedin preview',
                ],
                [
                    'skill' => 'Frontend WebDesign',
                ],
            ],
        ],

        'frontend_sololearn' => [
            'conditions' => [
                [
                    'skill' => 'Frontend',
                    'class' => 'SoloLearn',
                ],
            ],
        ],

        'frontend_intro' => [
            'skills' => ['FrontendIntro', 'FrontendIntro WebDesign', 'FrontendIntro UX WebDesign'],
        ],

        'git' => [
            'conditions' => [
                [
                    'skill' => 'Git',
                    'class' => 'linkedin',
                ],
            ],
        ],
        
        'git_new' => [
            'conditions' => [
                [
                    'skill' => 'Git',
                    'class' => 'linkedin_new preview',
                ],
            ],
        ],

        'github' => [
            'conditions' => [
                [
                    'skill' => 'GitHub',
                    'class' => 'linkedin preview',
                ],
            ],
        ],

        'github_new' => [
            'conditions' => [
                [
                    'skill' => 'GitHub',
                    'class' => 'linkedin_new preview',
                ],
            ],
        ],

        'html' => [
            'skills' => ['HTML', 'HTML WebDesign'],
        ],

        'html_and_css' => [
            'skills' => ['HTMLandCSS', 'HTMLandCSS WebDesign'],
        ],

        'interaction_design' => [
            'skills' => ['Interaction Design'],
        ],

        'javascript_linkedin' => [
            'conditions' => [
                [
                    'skill' => 'JavaScript',
                    'class' => 'linkedin preview',
                ],
                [
                    'skill' => 'JavaScript WebDesign',
                ],
                [
                    'skill' => 'JavaScript WebDesigners',
                ],
                [
                    'skill' => 'JavaScript JSON',
                ],
            ],
        ],


        'javascript_pluralsight' => [
            'conditions' => [
                [
                    'skill' => 'JavaScript',
                    'class' => 'Pluralsight preview',
                ],
            ],
        ],

        'jquery' => [
            'conditions' => [
                [
                    'skill' => 'jQuery',
                    'class' => 'linkedin preview',
                ],
                [
                    'skill' => 'jQuery WebDesigners',
                ],
            ],
        ],

        'jquery_pluralsight' => [
            'conditions' => [
                [
                    'skill' => 'jQuery',
                    'class' => 'Pluralsight preview',
                ],
            ],
        ],

        'json' => [
            'conditions' => [
                [
                    'skill' => 'JSON XML',
                ],
                [
                    'skill' => 'JavaScript JSON',
                    'class' => 'linkedin preview',
                ],
            ],
        ],

        'lightroom' => [
            'skills' => ['Lightroom'],
        ],

        'linux' => [
            'skills' => ['Linux', 'Linux PHP'],
        ],

        'linux_distro' => [
            'skills' => ['LinuxDistro'],
        ],

        'linux_engineer' => [
            'skills' => ['LinuxEngineer', 'LinuxEngineer MariaDB'],
        ],

        'linux_foundation' => [
            'skills' => ['LinuxFoundation'],
        ],

        'mongodb' => [
            'skills' => ['MongoDB', 'NoSQL'],
        ],

        'mysql' => [
            'skills' => ['MySQL', 'PHP MySQL'],
        ],

        'node' => [
            'skills' => ['Node'],
        ],

        'photoshop' => [
            'conditions' => [
                [
                    'skill' => 'Photoshop',
                ],
                [
                    'skill' => 'Photoshop UX',
                ],
                [
                    'skill' => 'Photoshop Web Design',
                ],
            ],
        ],

        'photoshop_design' => [
            'skills' => ['Photoshop Design'],
        ],

        'php_frameworks' => [
            'skills' => ['PHPFrameworks'],
        ],

        'php_linkedin' => [
            'conditions' => [
                [
                    'skill' => 'PHP',
                    'class' => 'linkedin preview',
                ],
                [
                    'skill' => 'PHP MySQL',
                ],
                [
                    'skill' => 'PHP WebDesigners',
                ],
                [
                    'skill' => 'Linux PHP',
                ],
                [
                    'skill' => 'WordPress PHP',
                ],
                [
                    'skill' => 'PHP SEO',
                ],
            ],
        ],

        'php_pluralsight' => [
            'conditions' => [
                [
                    'skill' => 'PHP',
                    'class' => 'Pluralsight preview',
                ],
            ],
        ],

        'postgresql' => [
            'skills' => ['PostgreSQL'],
        ],

        'python' => [
            'skills' => ['Python'],
        ],

        'react' => [
            'skills' => ['React', 'React WebDesigners'],
        ],

        'sass' => [
            'skills' => ['SASS', 'SASS WebDesign'],
        ],

        'seo' => [
            'conditions' => [
                [
                    'skill' => 'SEO',
                ],
                [
                    'skill' => 'WordPress SEO',
                    'class' => 'linkedin',
                ],
                [
                    'skill' => 'PHP SEO',
                ],
            ],
        ],

        'sql' => [
            'skills' => ['SQL'],
        ],

        'svg' => [
            'skills' => ['SVG', 'SVG Illustrator'],
        ],

        'tailwind' => [
            'skills' => ['Tailwind'],
        ],

        'typescript' => [
            'skills' => ['TypeScript'],
        ],

        'ux' => [
            'skills' => ['UX', 'Photoshop UX', 'UX Web Design'],
        ],

        'ux_foundations' => [
            'skills' => ['UX Foundations'],
        ],

        'ux_intro' => [
            'skills' => ['UX Intro', 'FrontendIntro UX WebDesign'],
        ],

        'ux_parts' => [
            'skills' => ['UX Parts'],
        ],

        'ux_path' => [
            'skills' => ['UX Path'],
        ],

        'vcs' => [
            'conditions' => [
                [
                    'skill' => 'VCS',
                    'class' => 'linkedin preview',
                ],
            ],
        ],
        
        'view_source' => [
            'skills' => ['ViewSource'],
        ],

        'web_design' => [
            'skills' => ['WebDesign', 'UX Web Design', 'JavaScript WebDesign', 'HTML WebDesign', 'HTMLandCSS WebDesign', 'CSS WebDesign', 'WebServices WebDesign', 'Bootstrap WebDesign', 'SASS WebDesign', 'WebDevelopment WebDesign'],
        ],

        'web_designers' => [
            'skills' => ['React WebDesigners', 'JavaScript WebDesigners', 'jQuery WebDesigners', 'PHP WebDesigners'],
        ],

        'web_design_path' => [
            'skills' => ['WebDesignPath', 'UX Intro WebDesign', 'Frontend WebDesign', 'FrontendIntro WebDesign', 'FrontendIntro UX WebDesign'],
        ],

        'web_development' => [
            'skills' => ['WebDevelopment', 'WebDevelopment WebDesign'],
        ],

        'web_services' => [
            'conditions' => [
                [
                    'skill' => 'WordPress Rest',
                    'class' => 'linkedin',
                ],
                [
                    'skill' => 'WebServices',
                ],
            ],
        ],


        'wordpress' => [
            'skills' => [
                'WordPress',
                'WordPress Rest',
                'WordPress SEO',
                'WordPress PHP',
            ],
        ],

        'wordpress_plugin' => [
            'skills' => ['WordPressPlugin'],
        ],

        'wordpress_theme' => [
            'skills' => ['WordPressTheme'],
        ],

        'wordpress_ecommerce' => [
            'skills' => ['WordPressEcommerce'],
        ],
    ];
}