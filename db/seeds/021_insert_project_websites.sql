-- ----------------------------
-- Clear existing website projects
-- ----------------------------
TRUNCATE TABLE `project_websites`;

-- ----------------------------
-- Insert seed data for website projects
-- Each row represents a website project with:
-- - project_id: matches projects table
-- - role: developer role for this project
-- - skills: main skills used
-- - features: key features or highlights in HTML list
-- - link: live URL
-- - github: GitHub repository slug
-- - img_*: responsive images for different breakpoints
-- ----------------------------
INSERT INTO `project_websites` (
    project_id, role, skills, features, link, github, img_1100, img_1100_2x, img_768, img_768_2x, img_375, img_375_2x, img) VALUES 
(1, 'Full-stack Developer', 
'HTML, CSS, PHP, SEO, Git & GitHub', 
'Dynamic content generated with PHP on each page load, Randomized background colors, fonts, and text styles, Simple logic to maintain readable color combinations, Lightweight, SEO-friendly one-page structure', 
'php-one-page-site.mirnesglamocic.com', 
'php-one-page-site', 
'php-one-page-site_1100.webp', 'php-one-page-site_1100@2x.webp', 
'php-one-page-site_768.webp', 'php-one-page-site_768@2x.webp', 
'php-one-page-site_375.webp', 'php-one-page-site_375@2x.webp', 
'php-one-page-site.jpg'
),
(2, 'Full-stack Developer', 
'HTML, CSS, PHP, SEO, Git & GitHub',
'Object-Oriented PHP structure, Payment option simulation, Logical use of PHP functions and user input handling',
'thebestautos.mirnesglamocic.com', 
'thebestautos',
'the-best-autos_1100.webp', 'the-best-autos_1100@2x.webp',
'the-best-autos_768.webp', 'the-best-autos_768@2x.webp',
'the-best-autos_375.webp', 'the-best-autos_375@2x.webp',
'the-best-autos.jpg'),
(3, 'Full-stack Developer', 
'HTML, CSS, PHP, MySQL, Git & GitHub',
'Dynamic questions stored in database, Uses SQL queries with PHP, Frontend display with CSS styling',
'sql-quizzer.mirnesglamocic.com', 
'sql-quizzer',
'SQLquizzer_1100.webp', 'SQLquizzer_1100@2x.webp',
'SQLquizzer_768.webp', 'SQLquizzer_768@2x.webp',
'SQLquizzer_375.webp', 'SQLquizzer_375@2x.webp',
'SQLquizzer.jpg'),
(4, 'Backend Developer', 
'HTML, CSS, JavaScript, PHP, MySQL, Git & GitHub',
  'User can submit feedback via form, Uses PHP + MySQL, Client-side validation',
  'https://feedback.mirnesglamocic.com',
  'feedback-app',
  'php-feedback_1100.webp', 'php-feedback_1100@2x.webp',
  'php-feedback_768.webp', 'php-feedback_768@2x.webp',
  'php-feedback_375.webp', 'php-feedback_375@2x.webp',
  'php-feedback.jpg'
),
(
  5,
  'Full-stack Developer',
  'HTML, CSS, jQuery, AJAX, PHP, MySQL, Git & GitHub',
  'Real-time messages, AJAX posting, No login required',
  'https://shoutbox.mirnesglamocic.com',
  'shoutbox-app',
  'shoutbox_1100.webp', 'shoutbox_1100@2x.webp',
  'shoutbox_768.webp', 'shoutbox_768@2x.webp',
  'shoutbox_375.webp', 'shoutbox_375@2x.webp',
  'shoutbox.jpg'
),
(
  6,
  'WordPress Developer',
  'WordPress, Elementor, HTML, CSS, JavaScript',
  'Responsive design, Custom UI, SEO friendly',
  'https://terradium.mirnesglamocic.com',
  'terradium',
  'terradium_1100.webp', 'terradium_1100@2x.webp',
  'terradium_768.webp', 'terradium_768@2x.webp',
  'terradium_375.webp', 'terradium_375@2x.webp',
  'terradium.jpg'
),
(
  7,
  'WordPress Developer',
  'WordPress, Elementor, Polylang, SEO',
  'Multilingual, Optimized performance',
  'https://oliveoilmatic.com', 
  'oliveoilmatic',
  'matic_600.webp', 'matic_600@2x.webp',
  'matic_550.webp', 'matic_550@2x.webp', 
  'matic_500.webp', 'matic_500@2x.webp',
  'matic.jpg'
),
(
  8,
  'Full-stack Developer',
  'HTML, CSS, JS, PHP, MySQL, SEO',
  'Booking system, Interactive map',
  'https://visit-neum.com',
  'visit-neum',
  'visit-neum_600.webp', 'visit-neum_600@2x.webp',
  'visit-neum_550.webp', 'visit-neum_550@2x.webp',
  'visit-neum_500.webp', 'visit-neum_500@2x.webp',
  'visit-neum.jpg'
),
(
  9,
  'Frontend JavaScript Developer',
  'HTML, CSS, JavaScript, Git & GitHub',
  'Game logic, Two-player mode',
  'https://full-stack-web-developer-and-designer.github.io/tictactoe',
  'tictactoe',
  'tic-tac-toe_1100.webp',
  'tic-tac-toe_1100@2x.webp',
  'tic-tac-toe_768.webp',
  'tic-tac-toe_768@2x.webp',
  'tic-tac-toe_375.webp',
  'tic-tac-toe_375@2x.webp',
  'tic-tac-toe.jpg'
),
(
  10,
  'Frontend Developer',
  'HTML, CSS, jQuery',
  'Thumbnail navigation, Responsive',
  'full-stack-web-developer-and-designer.github.io/jquery-thumbslider/',
  'jquery-thumbslider',
  'jquery-thumbslider_1100.webp',
  'jquery-thumbslider_1100@2x.webp',
  'jquery-thumbslider_768.webp',
  'jquery-thumbslider_768@2x.webp',
  'jquery-thumbslider_375.webp',
  'jquery-thumbslider_375@2x.webp',
  'jquery-thumbslider.jpg'
),
(
  11,
  'Frontend Developer',
  'HTML, CSS, JavaScript, jQuery',
  'Smooth transitions, Reusable',
  'full-stack-web-developer-and-designer.github.io/content-slider',
  'content-slider',
  'content-slider_1100.webp',
  'content-slider_1100@2x.webp',
  'content-slider_768.webp',
  'content-slider_768@2x.webp',
  'content-slider_375.webp',
  'content-slider_375@2x.webp',
  'content-slider.jpg'
),
(
  12,
  'Frontend JavaScript Developer',
  'HTML, CSS, JavaScript',
  'Dynamic questions, Score tracking',
  'full-stack-web-developer-and-designer.github.io/javascript-quiz',
  'javascript-quiz',
  'javascript-quiz_1100.webp',
  'javascript-quiz_1100@2x.webp',
  'javascript-quiz_768.webp',
  'javascript-quiz_768@2x.webp',
  'javascript-quiz_375.webp',
  'javascript-quiz_375@2x.webp',
  'javascript-quiz.jpg'
),
(
  13,
  'Frontend Developer',
  'HTML, CSS, JavaScript',
  'Accordion UI, Lightweight',
  'full-stack-web-developer-and-designer.github.io/faq-slider',
  'faq-slider',
  'faq-slider_1100.webp',
  'faq-slider_1100@2x.webp',
  'faq-slider_768.webp',
  'faq-slider_768@2x.webp',
  'faq-slider_375.webp',
  'faq-slider_375@2x.webp',
  'faq-slider.jpg'
),
(
  14,
  'Frontend Developer',
  'HTML, CSS, Responsive design',
  'Clean layout, Professional',
  'full-stack-web-developer-and-designer.github.io/resume',
  'resume',
  'resume_1100.webp',
  'resume_1100@2x.webp',
  'resume_768.webp',
  'resume_768@2x.webp',
  'resume_375.webp',
  'resume_375@2x.webp',
  'resume.jpg'
),
(
  15,
  'Frontend Developer',
  'HTML, CSS, JavaScript, API',
  'YouTube API, Live search',
  'full-stack-web-developer-and-designer.github.io/yt-search-videos',
  'yt-search-videos',
  'yt-search-videos_1100.webp',
  'yt-search-videos_1100@2x.webp',
  'yt-search-videos_768.webp',
  'yt-search-videos_768@2x.webp',
  'yt-search-videos_375.webp',
  'yt-search-videos_375@2x.webp',
  'yt-search-videos.jpg'
),
(16, 'Full-stack web developer & designer', 
'HTML5, CSS3, JavaScript(Vanilla), jQuery, AJAX, JSON, PHP (OOP), MySQL, Responsive web design, SEO best practices, Git & GitHub, UI/UX design principles, Adobe Bridge, Adobe Photoshop, Adobe Illustrator',
'Fully custom design and codebase, Responsive layout for desktop, tablet, and mobile, Project showcase with live demos and descriptions, Clean, modern UI focused on readability and clarity, Optimized structure for performance and SEO, Designed and branded using Photoshop & Illustrator',
'mirnesglamocic.com', 'mirnesglamocic',
'mirnesglamocic_1100.webp', 'mirnesglamocic_1100@2x.webp',
'mirnesglamocic_768.webp', 'mirnesglamocic_768@2x.webp',
'mirnesglamocic_375.webp', 'mirnesglamocic_375@2x.webp',
'mirnesglamocic.jpg');