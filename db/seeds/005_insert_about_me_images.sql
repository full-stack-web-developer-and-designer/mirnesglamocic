-- =========================================
-- Inserts for table: about_me_images
-- Description: Multiple image versions for About Me section
-- =========================================

-- First, clear the about_me_images table
TRUNCATE TABLE `about_me_images`;

-- Mobile images (150px)
INSERT INTO `about_me_images` (`image_id`, `about_id`, `size_label`, `file_path`, `alt`, `sort_order`) VALUES
(1, 1, '150w', 'webdev-150.webp', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 1),
(2, 1, '150w', 'webdev-150@2x.webp', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 2),
(3, 1, '150w', 'webdev-150.jpg', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 3),
(4, 1, '150w', 'webdev-150@2x.jpg', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 4);

-- Tablet & Desktop images (200px)
INSERT INTO `about_me_images` (`image_id`, `about_id`, `size_label`, `file_path`, `alt`, `sort_order`) VALUES
(5, 1, '200w', 'webdev-200.webp', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 5),
(6, 1, '200w', 'webdev-200@2x.webp', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 6),
(7, 1, '200w', 'webdev-200.jpg', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 7),
(8, 1, '200w', 'webdev-200@2x.jpg', 'Expert Web Developer and Web Designer from Jajce, Bosnia and Herzegovina', 8);
