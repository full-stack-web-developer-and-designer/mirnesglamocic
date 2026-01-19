-- ----------------------------
-- Seed data for project_images
-- Each row links a project (by project_id) to a corresponding image.
-- Project IDs 27–38: Illustrations
-- Project IDs 39–50: Logos
-- ----------------------------

INSERT INTO project_images (project_id, image)
VALUES
-- Illustrations
(27, 'factory.jpg'),
(28, 'house.jpg'),
(29, 'coil.jpg'),
(30, 'sheriff.jpg'),
(31, 'honeycomb.jpg'),
(32, 'ellipses.jpg'),
(33, 'electron.jpg'),
(34, 'flower_petals.jpg'),
(35, 'orange.jpg'),
(36, 'ribbon.jpg'),
(37, '3D-Star.jpg'),
(38, 'cubes.jpg'),

-- Logos
(39, 'bullseye-logo.jpg'),
(40, 'interwoven-rings.jpg'),
(41, 'complementary-rings.jpg'),
(42, 'pixelworker-star.jpg'),
(43, 'frontiers.jpg'),
(44, 'olympic-ring.jpg'),
(45, 'british-national-rail.jpg'),
(46, 'recycle.jpg'),
(47, 'bbc.jpg'),
(48, 'google-drive.jpg'),
(49, 'google-chrome.jpg'),
(50, 'samsung.jpg');
