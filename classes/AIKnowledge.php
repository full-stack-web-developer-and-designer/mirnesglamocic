<?php
/**
 * AIKnowledge.php
 *
 * Provides structured website knowledge for Mirnes AI.
 *
 * Collects information from:
 * - Static professional information
 * - Services database table
 * - Website projects database tables
 * - Skills database table
 *
 * The generated knowledge is included in the Mirnes AI system prompt.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2026
 * Updated: 2026
 */

declare(strict_types=1);


class AIKnowledge
{
    /**
     * Cached complete knowledge.
     */
    private ?string $knowledge = null;


    /**
     * Return complete website knowledge.
     */
    public function getKnowledge(): string
    {
        if ($this->knowledge !== null) {
            return $this->knowledge;
        }


        $sections = [

            $this->getAbout(),

            $this->getServices(),

            $this->getWebsiteDevelopment(),

            $this->getUiUxDesign(),

            $this->getWordPressDevelopment(),

            $this->getPerformanceOptimization(),

            $this->getSeoOptimization(),

            $this->getWebsiteMaintenance(),

            $this->getResponsiveDesign(),

            $this->getCustomWebApplications(),

            $this->getLogoDesign(),
            $this->getLogoProjects(),

            $this->getIllustration(),
            $this->getIllustrationProjects(),

            $this->getImageEditing(),
            $this->getImageEditingProjects(),

            $this->getHostingAndDomains(),

            $this->getProjects(),

            $this->getSkills(),

            $this->getCertificates(),

            $this->getContact()

        ];


        $sections = array_filter(
            $sections,
            static fn (string $section): bool =>
                trim($section) !== ''
        );


        $this->knowledge = implode(
            "\n\n",
            $sections
        );


        return $this->knowledge;
    }


    /**
     * About Mirnes.
     */
    private function getAbout(): string
    {
        return <<<TEXT
CATEGORY: ABOUT MIRNES

Keywords:
about, Mirnes, biography, experience, developer, designer,
full-stack developer, UI/UX designer

Knowledge:

Mirnes Glamočić is a Full-Stack Web Developer and UI/UX Designer.

He creates modern, responsive, fast and SEO-friendly websites,
custom web applications and WordPress solutions.

Experience:
10+ years of professional web development and UI/UX design experience.

His work focuses on:

- Clean and maintainable code
- Responsive and mobile-first design
- Website performance
- Search engine optimization
- Accessibility
- User experience
- Professional visual design

Main technologies include:

- PHP
- MySQL
- JavaScript
- HTML5
- CSS3
- Bootstrap
- jQuery
- WordPress
- SEO
- UI/UX Design
TEXT;
    }


    /**
     * Services loaded from the database.
     */
    private function getServices(): string
    {
        $text = <<<TEXT
CATEGORY: SERVICES

Keywords:
services, offer, work, development services, design services

Knowledge:

Mirnes provides professional web development, design and digital services.

Available services:

TEXT;


        try {
            if (
                class_exists('Services') &&
                method_exists('Services', 'getForAI')
            ) {
                $services = Services::getForAI();


                foreach ($services as $service) {
                    $title =
                        is_object($service)
                            ? ($service->title ?? null)
                            : ($service['title'] ?? null);

                    $description =
                        is_object($service)
                            ? ($service->description ?? null)
                            : ($service['description'] ?? null);


                    if (
                        !is_string($title) ||
                        trim($title) === ''
                    ) {
                        continue;
                    }


                    $text .=
                        '- ' .
                        $this->cleanText($title) .
                        "\n";


                    if (
                        is_string($description) &&
                        trim($description) !== ''
                    ) {
                        $text .=
                            '  Description: ' .
                            $this->cleanText($description) .
                            "\n";
                    }
                }


                if (
                    trim($text) !==
                    trim(
                        <<<TEXT
CATEGORY: SERVICES

Keywords:
services, offer, work, development services, design services

Knowledge:

Mirnes provides professional web development, design and digital services.

Available services:
TEXT
                    )
                ) {
                    return rtrim($text);
                }
            }
        } catch (Throwable $e) {
            // Use fallback knowledge below.
        }


        return $text . <<<TEXT
- Web Design
- Web Development
- Hosting and Domain
- SEO Optimization
- WordPress Development
- Website Performance Optimization
- Website Maintenance and Support
- Custom Web Applications
- Website Redesign
- Responsive Web Design
- Logo Design
- Illustration
- Image Editing
TEXT;
    }


    /**
     * Website development knowledge.
     */
    private function getWebsiteDevelopment(): string
    {
        return <<<TEXT
CATEGORY: WEBSITE DEVELOPMENT

Keywords:
website, web development, custom website, business website,
portfolio website, PHP development, database website

Knowledge:

Mirnes develops custom websites and web solutions.

Website development services may include:

- Business websites
- Portfolio websites
- Company websites
- Landing pages
- Custom PHP websites
- Database-driven websites
- Content management integration
- Website deployment

Websites are developed with attention to responsiveness,
performance, usability and search engine optimization.
TEXT;
    }


    /**
     * UI and UX design knowledge.
     */
    private function getUiUxDesign(): string
    {
        return <<<TEXT
CATEGORY: UI UX DESIGN

Keywords:
UI, UX, interface, user experience, web design, wireframe,
layout, redesign, design system

Knowledge:

Mirnes designs modern website interfaces focused on usability,
clarity and responsive behavior.

UI/UX design services may include:

- Website interface design
- User experience improvements
- Responsive layouts
- Mobile-first design
- Wireframes
- Website redesign
- Navigation improvements
- Visual hierarchy
- Design systems

The objective is to create clean, intuitive and
user-friendly digital experiences.
TEXT;
    }


    /**
     * WordPress development knowledge.
     */
    private function getWordPressDevelopment(): string
    {
        return <<<TEXT
CATEGORY: WORDPRESS DEVELOPMENT

Keywords:
WordPress, Elementor, CMS, theme, plugin, multilingual,
Polylang, WooCommerce

Knowledge:

Mirnes develops professional WordPress websites.

WordPress services may include:

- Responsive WordPress websites
- Elementor website development
- Theme configuration
- Plugin configuration
- Multilingual website setup
- Performance optimization
- Security improvements
- Website maintenance
- Production-ready deployment

WordPress projects are created with attention to design,
responsiveness, speed, SEO and usability.
TEXT;
    }


    /**
     * Performance optimization knowledge.
     */
    private function getPerformanceOptimization(): string
    {
        return <<<TEXT
CATEGORY: WEBSITE PERFORMANCE OPTIMIZATION

Keywords:
performance, speed, PageSpeed, Core Web Vitals, optimization,
cache, lazy loading, fast website

Knowledge:

Mirnes optimizes websites for faster loading and better efficiency.

Performance work may include:

- Core Web Vitals improvements
- Image optimization
- Lazy loading
- CSS optimization
- JavaScript optimization
- Cache configuration
- Database optimization
- Asset reduction
- Loading-performance improvements

The objective is a faster, smoother and more efficient website.
TEXT;
    }


    /**
     * SEO knowledge.
     */
    private function getSeoOptimization(): string
    {
        return <<<TEXT
CATEGORY: SEO OPTIMIZATION

Keywords:
SEO, Google, search engine, ranking, metadata, sitemap,
robots.txt, structured data

Knowledge:

Mirnes provides technical and on-page SEO optimization.

SEO work may include:

- Technical SEO
- On-page SEO
- Metadata optimization
- Semantic HTML improvements
- Structured data
- XML sitemap configuration
- Robots.txt configuration
- Website performance improvements
- Mobile usability improvements
- Accessibility-related improvements

The objective is to improve website quality,
search visibility and technical performance.
TEXT;
    }


    /**
     * Maintenance and support knowledge.
     */
    private function getWebsiteMaintenance(): string
    {
        return <<<TEXT
CATEGORY: WEBSITE MAINTENANCE AND SUPPORT

Keywords:
maintenance, support, updates, bug fixing, backup,
security, technical support

Knowledge:

Mirnes provides website maintenance and technical support.

Maintenance services may include:

- Website content updates
- Bug fixing
- Security updates
- Backups
- Plugin updates
- Database maintenance
- Performance checks
- Technical troubleshooting
- Ongoing website support

Maintenance helps keep websites secure, functional and current.
TEXT;
    }


    /**
     * Responsive design knowledge.
     */
    private function getResponsiveDesign(): string
    {
        return <<<TEXT
CATEGORY: RESPONSIVE WEB DESIGN

Keywords:
responsive, mobile, tablet, desktop, mobile-first,
screen size, adaptive layout

Knowledge:

Mirnes creates responsive websites using a mobile-first approach.

Responsive layouts are designed for:

- Mobile phones
- Tablets
- Laptops
- Desktop computers
- Large displays

Page layouts, navigation, typography and media adapt
to different screen sizes and device capabilities.
TEXT;
    }


    /**
     * Custom web application knowledge.
     */
    private function getCustomWebApplications(): string
    {
        return <<<TEXT
CATEGORY: CUSTOM WEB APPLICATIONS

Keywords:
web application, web app, PHP application, MySQL application,
admin panel, dashboard, portal, custom software

Knowledge:

Mirnes develops custom web applications using PHP,
MySQL, JavaScript and related web technologies.

Custom solutions may include:

- Administrative panels
- Dashboards
- Client portals
- Booking systems
- Content management tools
- Database-driven applications
- Internal business tools
- Custom website functionality

Every application is planned according to the specific
requirements of the project.
TEXT;
    }


    /**
     * Logo design knowledge.
     */
    /**
 * Logo design knowledge.
 */
private function getLogoDesign(): string
{
    return <<<TEXT
CATEGORY: LOGO DESIGN

Keywords:
logo, logos, branding, brand identity, favicon,
SVG logo, vector logo, visual identity, logo redesign,
logo process, logo examples, logo deliverables

Knowledge:

Mirnes creates modern and professional logo designs
for websites, businesses, personal brands and digital projects.

Logo design services may include:

- Custom logo concepts
- Brand identity elements
- SVG vector logos
- Favicon creation
- Logo redesign
- Typography-based logos
- Minimal logo design
- Website logo preparation

Logo design process:

1. The client describes the business, audience and visual preferences.
2. Mirnes reviews the project requirements and desired style.
3. Initial logo concepts are prepared.
4. The selected concept is refined based on feedback.
5. Final logo files are prepared for web and print use.

Possible deliverable formats include:

- SVG
- AI
- PDF
- PNG
- JPG

Logos can be prepared for:

- Websites
- Social media
- Business cards
- Digital branding
- Print materials
- Favicons

When asked for logo examples, explain that specific examples
are not currently available in the AI knowledge and offer
to describe the logo design service or process instead.

Mirnes AI must not invent specific logo clients, company names
or completed logo projects that are not present in the portfolio.
TEXT;
}
/**
 * Logo portfolio projects loaded from the database.
 */
private function getLogoProjects(): string
{
    $text = <<<TEXT
CATEGORY: LOGO PROJECTS

Keywords:
logo projects, logo portfolio, logo examples,
branding projects, logo designs, previous logo work

Knowledge:

Logo portfolio projects:

TEXT;


    try {
        if (
            class_exists('Logo') &&
            method_exists('Logo', 'getForAI')
        ) {
            $projects = Logo::getForAI();


            foreach ($projects as $project) {

                $title =
                    $project->title ?? null;


                if (
                    !is_string($title) ||
                    trim($title) === ''
                ) {
                    continue;
                }


                $text .=
                    '- ' .
                    $this->cleanText($title) .
                    "\n";


                $summary =
                    $project->summary ?? null;


                if (
                    is_string($summary) &&
                    trim($summary) !== ''
                ) {
                    $text .=
                        '  Description: ' .
                        $this->cleanText($summary) .
                        "\n";
                }


                $text .= "\n";
            }


            if ($projects !== []) {
                return rtrim($text);
            }
        }

    } catch (Throwable $e) {
        // Use fallback knowledge below.
    }


    return $text .
        "No specific logo projects are currently available " .
        "in the database.";
}
    /**
     * Illustration knowledge.
     */
    /**
 * Illustration knowledge.
 */
private function getIllustration(): string
{
    return <<<TEXT
CATEGORY: ILLUSTRATION

Keywords:
illustration, illustrations, artwork, vector illustration,
hero image, hero graphic, icons, website graphic,
illustration process, illustration examples

Knowledge:

Mirnes creates digital illustrations and graphics
for websites and digital content.

Illustration services may include:

- Website illustrations
- Hero-section graphics
- Landing-page illustrations
- Vector illustrations
- UI illustrations
- Custom icons
- Marketing graphics
- Social media graphics

Illustration process:

1. The client provides the project purpose, visual style and dimensions.
2. Mirnes reviews the website or brand identity.
3. The illustration concept and composition are planned.
4. The illustration is created and adjusted based on feedback.
5. Final files are prepared for the required digital use.

Illustrations can be prepared for:

- Website hero sections
- Landing pages
- Service sections
- Social media
- Marketing materials
- Interface elements
- Blog graphics

Possible formats may include:

- SVG
- PNG
- JPG
- WebP
- Editable vector formats when applicable

Illustrations are designed to match the visual identity,
layout and purpose of the project.

Illustration examples can be shown through Mirnes's portfolio
when relevant examples are available on the website.

Mirnes AI must not invent specific illustration projects,
clients or completed artworks that are not present in the portfolio.
TEXT;
}
/**
 * Illustration portfolio projects loaded from the database.
 */
private function getIllustrationProjects(): string
{
    $text = <<<TEXT
CATEGORY: ILLUSTRATION PROJECTS

Keywords:
illustration projects, illustration portfolio,
illustration examples, artwork examples,
vector projects, previous illustration work

Knowledge:

Illustration portfolio projects:

TEXT;


    try {
        if (
            class_exists('Illustration') &&
            method_exists(
                'Illustration',
                'getForAI'
            )
        ) {
            $projects =
                Illustration::getForAI();


            foreach ($projects as $project) {

                $title =
                    $project->title ?? null;


                if (
                    !is_string($title) ||
                    trim($title) === ''
                ) {
                    continue;
                }


                $text .=
                    '- ' .
                    $this->cleanText($title) .
                    "\n";


                $summary =
                    $project->summary ?? null;


                if (
                    is_string($summary) &&
                    trim($summary) !== ''
                ) {
                    $text .=
                        '  Description: ' .
                        $this->cleanText($summary) .
                        "\n";
                }


                $text .= "\n";
            }


            if ($projects !== []) {
                return rtrim($text);
            }
        }

    } catch (Throwable $e) {
        // Use fallback knowledge below.
    }


    return $text .
        "No specific illustration projects are currently " .
        "available in the database.";
}

    /**
     * Image editing knowledge.
     */
    /**
 * Image editing knowledge.
 */
private function getImageEditing(): string
{
    return <<<TEXT
CATEGORY: IMAGE EDITING

Keywords:
image editing, photo editing, Photoshop, retouching,
background removal, object removal, color correction,
image enhancement, product photo, image editing process,
image editing examples

Knowledge:

Mirnes provides professional image editing and
web-image optimization.

Image editing services may include:

- Background removal
- Object removal
- Photo retouching
- Color correction
- Image enhancement
- Image resizing
- Product photo editing
- Banner creation
- Social media graphics
- Image optimization for websites

Image editing process:

1. The client provides the original image and required changes.
2. Mirnes reviews the image quality and requested result.
3. The image is edited according to the project requirements.
4. A preview can be reviewed when revisions are required.
5. The final image is exported in the appropriate format and size.

Images can be prepared for:

- Websites
- E-commerce stores
- Portfolio pages
- Social media
- Online advertising
- Blog posts
- Marketing materials

Possible output formats include:

- JPG
- PNG
- WebP
- PDF when required

Image optimization may include:

- File-size reduction
- Resolution adjustment
- WebP conversion
- Responsive image preparation
- Quality optimization for faster website loading

Image editing examples can be shown through Mirnes's portfolio
when relevant examples are available on the website.

Mirnes AI must not invent specific clients, photographs
or completed image-editing projects that are not present
in the portfolio.
TEXT;
}
/**
 * Image-editing portfolio projects loaded from the database.
 */
private function getImageEditingProjects(): string
{
    $text = <<<TEXT
CATEGORY: IMAGE EDITING PROJECTS

Keywords:
image editing projects, image editing portfolio,
Photoshop projects, photo editing examples,
retouching projects, previous image editing work

Knowledge:

Image-editing portfolio projects:

TEXT;


    try {
        if (
            class_exists('Photoshop') &&
            method_exists(
                'Photoshop',
                'getForAI'
            )
        ) {
            $projects =
                Photoshop::getForAI();


            foreach ($projects as $project) {

                $title =
                    $project->title ?? null;


                if (
                    !is_string($title) ||
                    trim($title) === ''
                ) {
                    continue;
                }


                $text .=
                    '- ' .
                    $this->cleanText($title) .
                    "\n";


                $summary =
                    $project->summary ?? null;


                if (
                    is_string($summary) &&
                    trim($summary) !== ''
                ) {
                    $text .=
                        '  Description: ' .
                        $this->cleanText($summary) .
                        "\n";
                }


                $text .= "\n";
            }


            if ($projects !== []) {
                return rtrim($text);
            }
        }

    } catch (Throwable $e) {
        // Use fallback knowledge below.
    }


    return $text .
        "No specific image-editing projects are currently " .
        "available in the database.";
}

    /**
     * Hosting and domain knowledge.
     */
    private function getHostingAndDomains(): string
    {
        return <<<TEXT
CATEGORY: HOSTING AND DOMAINS

Keywords:
hosting, domain, DNS, SSL, server, migration,
email configuration, deployment

Knowledge:

Mirnes can assist with hosting and domain-related setup.

This work may include:

- Domain registration guidance
- DNS configuration
- Web-hosting setup
- SSL configuration
- Website migration
- Website deployment
- Email configuration
- Basic server and hosting optimization

The objective is a secure, stable and reliable
website environment.
TEXT;
    }


    /**
     * Projects loaded from the database.
     */
    private function getProjects(): string
    {
        $text = <<<TEXT
CATEGORY: PORTFOLIO PROJECTS

Keywords:
portfolio, projects, examples, websites, previous work,
case study, project details

Knowledge:

Mirnes's portfolio includes website development,
design and web application projects.

Portfolio projects:

TEXT;


        try {
            if (
                class_exists('WebsiteProject') &&
                method_exists(
                    'WebsiteProject',
                    'getForAI'
                )
            ) {
                $projects =
                    WebsiteProject::getForAI();


                foreach ($projects as $project) {
                    $title =
                        $project->title ?? null;


                    if (
                        !is_string($title) ||
                        trim($title) === ''
                    ) {
                        continue;
                    }


                    $text .=
                        '- ' .
                        $this->cleanText($title) .
                        "\n";


                    if (
                        isset($project->summary) &&
                        is_string($project->summary) &&
                        trim($project->summary) !== ''
                    ) {
                        $text .=
                            '  Description: ' .
                            $this->cleanText(
                                $project->summary
                            ) .
                            "\n";
                    }


                    if (
                        isset($project->role) &&
                        is_string($project->role) &&
                        trim($project->role) !== ''
                    ) {
                        $text .=
                            '  Role: ' .
                            $this->cleanText(
                                $project->role
                            ) .
                            "\n";
                    }


                    if (
                        isset($project->skills) &&
                        is_string($project->skills) &&
                        trim($project->skills) !== ''
                    ) {
                        $text .=
                            '  Skills: ' .
                            $this->cleanText(
                                $project->skills
                            ) .
                            "\n";
                    }


                    if (
                        isset($project->features) &&
                        is_string($project->features) &&
                        trim($project->features) !== ''
                    ) {
                        $text .=
                            '  Features: ' .
                            $this->cleanText(
                                $project->features
                            ) .
                            "\n";
                    }


                    if (
                        isset($project->website_types) &&
                        is_string(
                            $project->website_types
                        ) &&
                        trim(
                            $project->website_types
                        ) !== ''
                    ) {
                        $text .=
                            '  Project type: ' .
                            $this->cleanText(
                                $project->website_types
                            ) .
                            "\n";
                    }


                    $text .= "\n";
                }


                if (
                    trim($text) !==
                    trim(
                        <<<TEXT
CATEGORY: PORTFOLIO PROJECTS

Keywords:
portfolio, projects, examples, websites, previous work,
case study, project details

Knowledge:

Mirnes's portfolio includes website development,
design and web application projects.

Portfolio projects:
TEXT
                    )
                ) {
                    return rtrim($text);
                }
            }
        } catch (Throwable $e) {
            // Use fallback knowledge below.
        }


        return $text . <<<TEXT
- Business websites
- Tourism websites
- Portfolio websites
- WordPress websites
- Custom PHP and MySQL applications
- Responsive website projects
- UI/UX redesign projects
- SEO optimization projects
TEXT;
    }


    /**
     * Skills loaded from the database.
     */
    private function getSkills(): string
    {
        $text = <<<TEXT
CATEGORY: SKILLS AND TECHNOLOGIES

Keywords:
skills, technologies, programming languages, tools,
software, development stack

Knowledge:

Mirnes uses the following skills and technologies:

TEXT;


        try {
            if (
                class_exists('Skills') &&
                method_exists('Skills', 'getForAI')
            ) {
                $skills = Skills::getForAI();


                foreach ($skills as $skill) {
                    $name =
                        is_object($skill)
                            ? ($skill->name ?? null)
                            : ($skill['name'] ?? null);

                    $category =
                        is_object($skill)
                            ? ($skill->category ?? null)
                            : ($skill['category'] ?? null);


                    if (
                        !is_string($name) ||
                        trim($name) === ''
                    ) {
                        continue;
                    }


                    $text .=
                        '- ' .
                        $this->cleanText($name);


                    if (
                        is_string($category) &&
                        trim($category) !== ''
                    ) {
                        $text .=
                            ' (' .
                            $this->cleanText($category) .
                            ')';
                    }


                    $text .= "\n";
                }


                if (
                    trim($text) !==
                    trim(
                        <<<TEXT
CATEGORY: SKILLS AND TECHNOLOGIES

Keywords:
skills, technologies, programming languages, tools,
software, development stack

Knowledge:

Mirnes uses the following skills and technologies:
TEXT
                    )
                ) {
                    return rtrim($text);
                }
            }
        } catch (Throwable $e) {
            // Use fallback knowledge below.
        }


        return $text . <<<TEXT
- PHP OOP
- MySQL
- JavaScript
- HTML5
- CSS3
- Bootstrap
- jQuery
- WordPress
- SEO
- UI/UX Design
- Photoshop
- Illustrator
- Git
- GitHub
TEXT;
    }


    /**
     * Certificates and education.
     */
    private function getCertificates(): string
    {
        return <<<TEXT
CATEGORY: EDUCATION AND CERTIFICATES

Keywords:
education, certificate, certification, course, training,
ITAcademy, professional development

Knowledge:

Mirnes completed ITAcademy training in PHP Web Development
and continued his education in Web Design.

He has completed professional courses and certifications
in areas including:

- PHP Development
- Web Development
- Web Design
- Frontend Development
- UI/UX Design
- SEO
- Programming
- Technology

His professional development includes learning through
multiple online education platforms and training providers.
TEXT;
    }


    /**
     * Contact information.
     */
    private function getContact(): string
    {
        return <<<TEXT
CATEGORY: CONTACT

Keywords:
contact, email, WhatsApp, Viber, message, project inquiry,
hire Mirnes

Knowledge:

Visitors can contact Mirnes through:

- Website contact form
- WhatsApp
- Viber
- Email

For a project inquiry, visitors should briefly describe:

- Project type
- Main project goals
- Required functionality
- Preferred timeline
- Available budget range, if known

Mirnes AI may help visitors prepare a short project message,
but it must not invent contact details that are not present
in the website knowledge.
TEXT;
    }


    /**
     * Search website knowledge.
     *
     * Returns complete matching sections instead of only
     * individual lines, preserving useful context.
     */
    public function search(string $query): string
    {
        $query = trim($query);


        if ($query === '') {
            return '';
        }


        $keywords = preg_split(
            '/\s+/u',
            mb_strtolower(
                $query,
                'UTF-8'
            ),
            -1,
            PREG_SPLIT_NO_EMPTY
        );


        if (
            !is_array($keywords) ||
            $keywords === []
        ) {
            return '';
        }


        $sections = preg_split(
            '/\n{2,}(?=CATEGORY:)/u',
            $this->getKnowledge()
        );


        if (!is_array($sections)) {
            return '';
        }


        $results = [];


        foreach ($sections as $section) {
            $searchableSection =
                mb_strtolower(
                    $section,
                    'UTF-8'
                );


            foreach ($keywords as $keyword) {
                if (
                    mb_strpos(
                        $searchableSection,
                        $keyword
                    ) !== false
                ) {
                    $results[] = trim($section);

                    break;
                }
            }
        }


        return implode(
            "\n\n",
            array_values(
                array_unique($results)
            )
        );
    }


    /**
     * Clear the in-memory knowledge cache.
     */
    public function clearCache(): void
    {
        $this->knowledge = null;
    }


    /**
     * Clean database text before adding it to AI knowledge.
     */
    private function cleanText(string $text): string
    {
        $text = strip_tags($text);


        $text = html_entity_decode(
            $text,
            ENT_QUOTES | ENT_HTML5,
            'UTF-8'
        );


        $text = preg_replace(
            '/\s+/u',
            ' ',
            $text
        );


        return trim(
            (string) $text
        );
    }
}