-- =========================================================
-- Seed data for table: support
-- Description: Default support / donation links
-- =========================================================

-- First, clear the support table
TRUNCATE TABLE `support`;

INSERT INTO `support` (`page_id`, `href`, `aria`, `icon_id`) VALUES
(1, 'https://buymeacoffee.com/mirnesglamocic', 'Support me on Buy Me a Coffee', 'buymeacoffee'),
(1, 'https://ko-fi.com/mirnesglamocic', 'Support me on Ko-fi', 'kofi'),
(1, 'https://github.com/sponsors/full-stack-web-developer-and-designer', 'Support me on GitHub Sponsors', 'github-sponsors');
