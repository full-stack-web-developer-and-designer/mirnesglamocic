<?php
declare(strict_types=1);
    
    /**
     * Resume.php
     *
     * Dynamic resume page rendering personal CV data from the database.
     * Displays sidebar information (contact, skills, languages),
     * and main content (profile, experience, projects, education, certifications).
     *
     * This page follows a modular architecture using Entity-based models
     * to fetch structured resume data by page ID.
     *
     * Features:
     * - Dynamic head rendering (SEO optimized)
     * - Structured sidebar with grouped skills & languages
     * - Experience with bullet points
     * - Clickable project links
     * - Education with institution logos
     * - Certifications with SVG icons
     * - Downloadable resume PDF
     *
     * Author: Mirnes Glamočić
     * Website: https://mirnesglamocic.com
     * Created: 2026
     * Version: 1.0
     *
     * Architecture:
     * - Head::get($page_id)
     * - Pages::get($page_id)
     * - ResumeContact::getByPage()
     * - ResumeSkill::getByPage()
     * - ResumeExperience::getByPage()
     * - ResumeProjects::getByPage()
     * - ResumeEducation::getByPage()
     * - ResumeCertifications::getByPage()
     *
     * This file serves as the dynamic CV endpoint for page_id = 17.
     */

    require_once __DIR__ . '/core/init.php';
    require_once __DIR__ . '/inc/helpers.php';

    $page_id = 17;
    $head = Head::get($page_id);
    $page = Pages::get($page_id);
?>
<!DOCTYPE html>
<html itemscope itemtype="https://schema.org/WebPage" lang="en">
    
    <?php echo $head->renderHead(); ?>

    <body>

        <div class="container">
    
            <div class="sidebar">
                
                <?php echo $page->renderPage(); ?>
                
                <p><strong>Full-Stack Web Developer & Designer</strong></p>
                <div class="resume-cta">
                    <a href="/#contact" class="cta-btn">Hire Me</a>
                    <a href="/projects" class="cta-btn secondary">View Projects</a>
                </div>
                <?php
                    // Fetch contact information for the specific page
                    $contacts = ResumeContact::getByPage($page_id); // Fetch contact information dynamically

                    if ($contacts) {

                        echo '<div class="contact">';
                        
                            // Loop through the contact information and display it
                            foreach ($contacts as $contact) {
                                echo '<p>';
                                
                                // Display the contact icon
                                echo '<i class="' . e($contact->icon) . '"></i> ';
                                
                                // Render the correct HTML for each contact type
                                if ($contact->type === 'email') {
                                    echo '<a href="mailto:' . e($contact->value) . '">' . e($contact->value) . '</a>';
                                } elseif ($contact->type === 'phone') {
                                    echo '<a href="tel:' . preg_replace('/\s+/', '', $contact->value) . '">' . e($contact->value) . '</a>';
                                } elseif ($contact->type === 'address') {
                                    echo e($contact->value);  // Just output the address as plain text
                                } else {  // For social media or website links
                                    // We will display only the text after the domain name (the description part of the URL)
                                    $parsed_url = parse_url($contact->value);
                                    $hostname = isset($parsed_url['host']) ? $parsed_url['host'] : $contact->value;
                                    $description = isset($parsed_url['path']) ? trim($parsed_url['path'], '/') : $hostname;
                                    
                                    // If the description is empty (in case of an invalid link), just use the host
                                    echo '<a href="' . e($contact->value) . '" target="_blank">' . e($description) . '</a>';
                                }
                                
                                echo '</p>';
                            }
                        
                        echo '</div>';  // End the contact div
                    }
                ?>

                <p class="availability">
                    <?php
                        $sidebar = ResumeMain::getByPage($page_id);
                        if ($sidebar) {
                            echo '<strong>' . e($sidebar->availability_text) . '</strong>';
                        }
                    ?>
                </p>

                <?php
                    // Dynamic skills
                    $skills = ResumeSkill::getByPage($page_id);

                    if ($skills) {

                        // Sort by category + sort_order (important!)
                        usort($skills, function($a, $b) {
                            return [$a->category, $a->sort_order]
                                <=> [$b->category, $b->sort_order];
                        });

                        echo '<div class="skills">';
                        echo '<h2>Skills</h2>';
                        echo '<ul>';

                        $grouped = [];

                        // Group skills by category
                        foreach ($skills as $s) {
                            $grouped[$s->category][] = $s->name;
                        }

                        // Output grouped skills
                        foreach ($grouped as $category => $items) {
                            echo '<li>';
                            echo '<strong>' . e($category) . ':</strong> ';
                            echo e(implode(', ', $items));
                            echo '</li>';
                        }

                        echo '</ul>';
                        echo '</div>';
                    }

                    // Fetch languages
                    $langs = ResumeLanguage::getByPage($page_id);
                    if ($langs) {
                        echo '<div class="languages"><h2>Languages</h2><ul>';

                        // Group languages by their proficiency
                        $groupedLanguages = [];
                        foreach ($langs as $l) {
                            $groupedLanguages[$l->proficiency][] = $l->language;
                        }

                        // Output each group as a single list item
                        foreach ($groupedLanguages as $proficiency => $languages) {
                            $languageList = implode(' / ', $languages); // Join languages with a slash
                            echo '<li><strong>' . e($languageList) . ':</strong> ' . e($proficiency) . '</li>';
                        }

                        echo '</ul></div>';
                    }
                ?>
            </div>

            <div class="main">
                     
                <?php
                    $main = ResumeMain::getByPage($page_id);

                    if ($main) {
                        echo '<h2>Profile</h2>';
                        echo '<p>' . e($main->profile_text) . '</p>';
                        echo '<div class="resume-profile-cta">';
                        echo '<a href="/#contact" class="cta-btn">Let’s Work Together</a>';
                        echo '</div>';
                    }

                    // Fetch and display experiences
                    $experiences = ResumeExperience::getByPage($page_id);

                    if ($experiences) {
                    echo '<h2>Experience</h2>';
                        foreach ($experiences as $exp) {
                            echo '<div class="experience">';
                            $location = isset($exp->location) ? e($exp->location) : 'Remote';
                            echo '<h3>' . e($exp->job_title) . ' | ' . $location . ' (' . e($exp->start_year) . ' – ' . e($exp->end_year ?? 'Present') . ')</h3>';
                        
                            $points = ResumeExperiencePoint::getByExperience($exp->experience_id);
                            
                            echo '<ul>';
                            foreach ($points as $point) {
                                echo '<li>' . e($point->description) . '</li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        }
                    }

                    // Fetch and display projects
                    $projects = ResumeProjects::getByPage($page_id);

                    if ($projects) {
                        echo '<h2>Projects</h2>';
                        echo '<div class="projects">';
                        echo '<ul>';
                        foreach ($projects as $project) {
                            echo '<li>';
                            // Make the project title clickable (links to live site)
                            if (!empty($project->link)) {
                                echo '<a href="' . e($project->link) . '" target="_blank"><strong>' . e($project->title) . '</strong></a>';
                            } else {
                                echo '<strong>' . e($project->title) . '</strong>';
                            }

                            // Show full description (including tools like Photoshop, Illustrator, SEO)
                            if (!empty($project->description)) {
                                echo ': ' . e($project->description);
                            }
                            echo '</li>';
                        }
                        echo '</ul>';
                        echo '</div>';

                    }

                    // Fetch and display education
                    $education = ResumeEducation::getByPage($page_id);
                    if ($education) {
                        echo '<h2>Education</h2>';
                        echo '<div class="educations">';
                        foreach ($education as $edu) {
                            echo '<div class="education-item">';
                            echo '<img width="48" src="' . e($edu->logo_url) . '" loading="lazy" height="48" alt="' . e($edu->institution_name) . ' logo">';
                            echo '<div class="education-text">';
                            echo '<strong>' . e($edu->institution_name) . '</strong> | ' . e($edu->location) . '<br>';
                            echo '<strong>' . e($edu->degree) . '</strong><br>';
                            echo '<em>' . e($edu->duration) . '</em>';
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
            
                    // Fetch and display certifications
                    $certifications = ResumeCertifications::getByPage($page_id);
                    if ($certifications) {
                        echo '<h2>Certifications</h2>';
                        echo '<div class="certifications">';
                        echo '<ul>';
                        foreach ($certifications as $cert) {
                            echo '<li style="display: flex; align-items: center;">';
                            echo '<svg class="icon ' . e($cert->icon_class) . '"><use href="#' . e($cert->icon_id) . '"></use></svg>';
                            echo '<span>' . e($cert->title) . '</span>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
                ?>
            
            </div>

        </div>

        <div class="resume-final-cta">
            <h3>Interested in working together?</h3>
            <a href="/#contact" class="cta-btn">Contact Me Today</a>
            <a href="/resume.pdf" class="download-btn" download="MirnesGlamocic-Resume.pdf"    target="_blank" rel="noopener noreferrer" aria-label="Download my resume PDF">
                <svg class="svg-icon" aria-hidden="true">
                    <use href="#icon-download"></use>
                </svg>&nbsp;&nbsp;Download my resume PDF
            </a>
        </div>

        <div style="display:none">
            <?php include('./assets/icons-resume.html'); ?>
        </div>

    </body>
</html>