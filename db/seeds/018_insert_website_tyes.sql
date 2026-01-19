-- ----------------------------
-- Clear existing website types
-- ----------------------------
TRUNCATE TABLE `website_types`;

-- ----------------------------
-- Insert seed data for website types
-- Each row represents a type of website project:
-- - name: Human-readable type
-- - slug: URL-friendly identifier
-- ----------------------------
INSERT INTO `website_types` (name, slug) VALUES
('Mini App', 'mini'),
('Fullstack App', 'fullstack'),
('WordPress Site', 'wordpress'),
('Featured Project', 'featured');
