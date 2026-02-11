-- ----------------------------
-- Clear existing website types
-- ----------------------------
TRUNCATE TABLE `website_types`;

-- ----------------------------
-- Insert default website types
-- ----------------------------
INSERT INTO `website_types` (`website_type_id`, `name`, `slug`) VALUES
(1, 'Mini App', 'mini'),          -- Small, single-purpose web apps
(2, 'Fullstack App', 'fullstack'),-- Full-featured apps with frontend + backend
(3, 'WordPress Site', 'wordpress'),-- WordPress-based websites
(4, 'Featured Project', 'featured');-- Highlighted or showcase projects
