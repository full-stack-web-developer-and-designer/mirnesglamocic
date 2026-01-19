-- --------------------------------------------------------
-- Seed Data for 'projects' Table
-- Description: Pre-populated projects for the website including
-- websites, Photoshop projects, illustrations, and logos.
-- The table stores general info: category, title, summary, page, etc.
-- --------------------------------------------------------

-- First, clear the 'projects' table (CAUTION: removes all previous data)
TRUNCATE TABLE `projects`;

-- ----------------------------
-- Website Projects
-- Category: Websites
-- ----------------------------
INSERT INTO `projects` (category_id, title, summary, page_id) VALUES
(1, 'PHP - One page site', 'Single-page PHP site that randomly changes text, style, colors, and layout on each visit.', 14),
(1, 'The Best Autos', 'PHP site displaying cars with credit/payment calculation using object-oriented programming.', 14),
(1, 'SQL Quizzer', 'Interactive SQL quiz with PHP/MySQL, supporting question creation, answer validation, scoring, and session tracking.', 14),
(1, 'Feedback System', 'Feedback submission app with PHP/MySQL, field validation, and user-friendly message logging.', 14),
(1, 'Shoutbox application', 'Real-time message board using PHP, MySQL, jQuery, and AJAX with form validation and automatic formatting.', 14),
(1, 'WordPress Site for Terradium', 'Five-page responsive WordPress site with slideshows, galleries, videos, maps, and custom design using Elementor.', 14),
(1, 'Multilingual WordPress Site for an Olive Oil Company', 'Responsive WordPress site in four languages with Elementor, Polylang, SEO, contact forms, and optimized performance.', 14),
(1, 'Tourism Website', 'A dynamic tourism and accommodation website with booking features, location maps, image galleries, and SEO-optimized content.', 14),
(1, 'Tic-Tac-Toe Game', 'A classic two-player Tic-Tac-Toe game built with vanilla JavaScript, focusing on game logic, state management, and interactive user experience.', 14),
(1, 'jQuery Thumbslider', 'A lightweight, responsive thumbnail-based image slider built with HTML, CSS, and jQuery.', 14),
(1, 'Content Slider', 'A reusable content slider component with smooth transitions and navigation controls.', 14),
(1, 'JavaScript Quiz App', 'A fun, interactive JavaScript quiz application with dynamic DOM manipulation and event handling.', 14),
(1, 'FAQ Slider', 'A dynamic, interactive accordion-style component for FAQs.', 14),
(1, 'Portfolio and Resume', 'A clean, professional personal resume webpage built with HTML and CSS.', 14),
(1, 'YouTube Video Search App', 'A lightweight, responsive web app to search YouTube videos by keyword.', 14),
(1, 'Personal Portfolio Website – mirnesglamocic.com', 'A fully custom-built personal portfolio website designed to showcase web development projects.', 14);

-- ----------------------------
-- Photoshop Projects
-- Category: Photoshop
-- ----------------------------
INSERT INTO projects (category_id, title, summary, page_id) VALUES
(2, 'Photoshop Project 1', 'Removed object from a Coffee cup using Patch Tool', 14),
(2, 'Photoshop Project 2', 'Image of a coffee cup', 14),
(2, 'Photoshop Project 3', 'Removed birds using Patch Tool', 14),
(2, 'Photoshop Project 4', 'Picture with a flock of birds', 14),
(2, 'Photoshop Project 5', 'Removed coffee mug from table using Content Aware Fill', 14),
(2, 'Photoshop Project 6', 'Image of a coffee mug', 14),
(2, 'Photoshop Project 7', 'Removed one sheep from the meadow using Content Aware Fill', 14),
(2, 'Photoshop Project 8', 'A picture with a sheeps on the meadow', 14),
(2, 'Photoshop Project 9', 'Removed trash can using Clone Stamp Tool', 14),
(2, 'Photoshop Project 10', 'A picture with a trash can', 14);

-- ----------------------------
-- Illustration Projects
-- Category: Illustration
-- ----------------------------
INSERT INTO projects (category_id, title, summary, page_id) VALUES
(4, 'Illustration of the factory', 'Illustration of the company created with the Line Segment Tool, Scissors, Arc, Rectangular Grid, Polar Grid and Spiral Tool.', 14),
(4, 'Illustration of simple house', 'Illustration of a simple house created using the Rectangle and Shaper tools.', 14),
(4, 'Illustration of coil', 'Illustration of a coil created with the Ellipse Tool and compound paths using the Join command.', 14),
(4, 'Illustration of sheriff''s badge', 'Illustration of sheriff''s badge with a star along with a bunch of circles and a big ellipse using the Shape Builder and an inset reflection.', 14),
(4, 'Illustration of honeycomb', 'Illustration of honeycomb created with Polygon Tool using a combination of Effects from Appearance panel.', 14),
(4, 'Illustration of multiple ellipses', 'Illustration of multiple ellipses created with the Ellipse and Rectangle tools using Effects from the Appearance panel.', 14),
(4, 'Illustration of the atomic symbol', 'Illustration of an atomic symbol created with the Ellipse tool using Effects from the Appearance panel.', 14),
(4, 'Illustration of flower petals', 'Illustration of flower petals created using the Ellipse tool, Transform Effects, Pucker & Bloat, and Zig Zag tools.', 14),
(4, 'Illustration of orange wedge', 'Illustration of a single orange slice created with the Ellipse, Rectangle, Scale, and Rotate tools.', 14),
(4, 'Illustration of möbius strip', 'Illustration of an overlapping ribbon created by a combination of hexagons, a blend of objects, the Rotate Tool, and the Live Paint Bucket.', 14),
(4, 'Illustration of 3D Star', 'Illustration of a five-pointed 3D twisted woven metal star created using the Ellipse, Rectangle, Line, Rotate, and Scale tools.', 14),
(4, 'Illustration of dynamic cubes', 'Illustration of dynamic cubes created using the Line Tool, Transform, and Outer Glow Effects.', 14);

-- ----------------------------
-- Logo Projects
-- Category: Logo
-- ----------------------------
INSERT INTO projects (category_id, title, summary, page_id) VALUES
(3, 'Bullseye logo', 'Expertly rendered Bullseye logo created from a single @ sign using the Polargrid and Scale tools.', 14),
(3, 'The interwoven rings logo', 'The interwoven rings logo created from the bullseye logo using the Rotate tool, and the paths join command.', 14),
(3, 'Complemtary ring logo', 'Complemtary ring logo, created from a interwoven ring logo stitched together using the Ellipse, Rotate, and Scissors tools, along with the paths join command', 14),
(3, 'Star logo of United Pixelworkers', 'Star logo by United Pixelworkers created using the Ellipse, Rotate, Scale, and Shear tools with warped gradient shadows.', 14),
(3, 'Frontiers Unlimited logo of tour company', 'Frontiers Unlimited Logo for tour company created using the Rectangle, Ellipse, Pen and Type tools along with the Pathfinder options.', 14),
(3, 'The Olympic Ring logo', 'The Olympic Ring logo created using a grid and the Ellipse Tool along with the Pathfinder options.', 14),
(3, 'The British National Rail logo', 'The British National Rail logo created using the Line Segment Tool and Rectangle Tool along with the Pathfinder and Stroke options.', 14),
(3, 'The Recycle logo', 'The Recycle Logo created using the Polygon, Rectangle, Scissors, Rotate and Shape Builder tools along with the Stroke options in the Appearance panel.', 14),
(3, 'BBC logo', 'BBC logo created using the Rectangle and Type tools along with the Align options.', 14),
(3, 'The Google Drive logo', 'The Google Drive Logo created using the Pollygon, Rotate, Pen, Shape Builder and Direct Selection tools along with the Pathfinder options.', 14),
(3, 'The Google Chrome logo', 'The Google Chrome logo created using the Ellipse, Line Segment, Rotate, Selection and Shape Builders tools.', 14),
(3, 'Samsung logo', 'Samsung logo created using the Ellipse and Type tools, along with the Pathfinder options.', 14);
