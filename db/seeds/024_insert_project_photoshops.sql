-- ----------------------------
-- Seed data for Photoshop projects
-- Each row corresponds to a Photoshop project and includes:
-- - project_id: matches the project in the `projects` table
-- - big_img: main high-resolution image
-- - img_576, img_530, img_500, img_450, img_408, img_350, img_282: responsive image variants
-- - img: default image
-- ----------------------------

-- ----------------------------
-- Clear existing website types
-- ----------------------------
TRUNCATE TABLE `project_photoshop`;

INSERT INTO project_photoshop (
    project_id,
    big_img,
    img_576,
    img_530,
    img_500,
    img_450,
    img_408,
    img_350,
    img_282,
    img
) VALUES
(17, 'coffee-cup_e.webp', 'coffee-cup_e-576.webp', 'coffee-cup_e-530.webp', 'coffee-cup_e-500.webp', 'coffee-cup_e-450.webp', 'coffee-cup_e-408.webp', 'coffee-cup_e-350.webp', 'coffee-cup_e-282.webp', 'coffee-cup_e.jpg'),
(18, 'coffee-cup.webp', 'coffee-cup-576.webp', 'coffee-cup-530.webp', 'coffee-cup-500.webp', 'coffee-cup-450.webp', 'coffee-cup-408.webp', 'coffee-cup-350.webp', 'coffee-cup-282.webp', 'coffee-cup.jpg'),
(19, 'birds_e.webp', 'birds_e-576.webp', 'birds_e-530.webp', 'birds_e-500.webp', 'birds_e-450.webp', 'birds_e-408.webp', 'birds_e-350.webp', 'birds_e-282.webp', 'birds_e.jpg'),
(20, 'birds.webp', 'birds-576.webp', 'birds-530.webp', 'birds-500.webp', 'birds-450.webp', 'birds-408.webp', 'birds-350.webp', 'birds-282.webp', 'birds.jpg'),
(21, 'coffee_e.webp', 'coffee_e-576.webp', 'coffee_e-530.webp', 'coffee_e-500.webp', 'coffee_e-450.webp', 'coffee_e-408.webp', 'coffee_e-350.webp', 'coffee_e-282.webp', 'coffee_e.jpg'),
(22, 'coffee.webp', 'coffee-576.webp', 'coffee-530.webp', 'coffee-500.webp', 'coffee-450.webp', 'coffee-408.webp', 'coffee-350.webp', 'coffee-282.webp', 'coffee.jpg'),
(23, 'sheep_e.webp', 'sheep_e-576.webp', 'sheep_e-530.webp', 'sheep_e-500.webp', 'sheep_e-450.webp', 'sheep_e-408.webp', 'sheep_e-350.webp', 'sheep_e-282.webp', 'sheep_e.jpg'),
(24, 'sheep.webp', 'sheep-576.webp', 'sheep-530.webp', 'sheep-500.webp', 'sheep-450.webp', 'sheep-408.webp', 'sheep-350.webp', 'sheep-282.webp', 'sheep.jpg'),
(25, 'tamara-bellis_e.webp', 'tamara-bellis_e-576.webp', 'tamara-bellis_e-530.webp', 'tamara-bellis_e-500.webp', 'tamara-bellis_e-450.webp', 'tamara-bellis_e-408.webp', 'tamara-bellis_e-350.webp', 'tamara-bellis_e-282.webp', 'tamara-bellis_e.jpg'),
(26, 'tamara-bellis.webp', 'tamara-bellis-576.webp', 'tamara-bellis-530.webp', 'tamara-bellis-500.webp', 'tamara-bellis-450.webp', 'tamara-bellis-408.webp', 'tamara-bellis-350.webp', 'tamara-bellis-282.webp', 'tamara-bellis.jpg');
