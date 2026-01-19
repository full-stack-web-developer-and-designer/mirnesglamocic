-- =========================================
-- Inserts for table `skills`
-- Inserts initial portfolio skills with icons, categories, and ordering.
-- =========================================

-- First, clear the skills table
TRUNCATE TABLE `skills`;

INSERT INTO `skills` (`skill_id`, `name`, `icon_id`, `category`, `sort_order`, `page_id`, `category_order`) VALUES
(1, 'HTML', 'html', 'web development', 1, 1, 1),
(2, 'CSS', 'css', 'web development', 2, 1, 1),
(3, 'Bootstrap', 'bootstrap', 'web development', 3, 1, 1),
(4, 'JavaScript', 'javascript', 'web development', 4, 1, 1),
(5, 'jQuery', 'jquery', 'web development', 5, 1, 1),
(6, 'PHP', 'php', 'web development', 6, 1, 1),
(7, 'MySQL', 'mysql', 'web development', 7, 1, 1),
(8, 'WordPress', 'wordpress', 'web development', 8, 1, 1),
(9, 'VSCode', 'vscode', 'development tools', 1, 1, 2),
(10, 'SublimeText', 'sublimetext', 'development tools', 2, 1, 2),
(11, 'Vim', 'vim', 'development tools', 3, 1, 2),
(12, 'Dreamweaver', 'dreamweaver', 'development tools', 4, 1, 2),
(13, 'Git', 'git', 'development tools', 5, 1, 2),
(14, 'GitHub', 'github', 'development tools', 6, 1, 2),
(15, 'WAMP', 'wamp', 'development tools', 7, 1, 2),
(16, 'XAMPP', 'xampp', 'development tools', 8, 1, 2),
(17, 'Photoshop', 'photoshop', 'design', 1, 1, 3),
(18, 'Illustrator', 'illustrator', 'design', 2, 1, 3),
(19, 'Bridge', 'bridge', 'design', 3, 1, 3),
(20, 'SEO', 'seo', 'seo', 1, 1, 4),
(21, 'Windows', 'windows', 'operating systems', 1, 1, 5),
(22, 'Ubuntu', 'ubuntu', 'operating systems', 2, 1, 5),
(23, 'Debian', 'debian', 'operating systems', 3, 1, 5),
(24, 'Fedora', 'fedora', 'operating systems', 4, 1, 5);
