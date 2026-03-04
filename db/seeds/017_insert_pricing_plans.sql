-- =========================================
-- Data: pricing_plans
-- Inserts initial website pricing plans
-- =========================================

-- Reset data (safe with FK)
DELETE FROM `pricing_plans`;
ALTER TABLE `pricing_plans` AUTO_INCREMENT = 1;

INSERT INTO `pricing_plans`
(`title`, `price`, `price_text`, `delivery_days`, `is_featured`, `button_text`, `page_id`)
VALUES
('Starter Website', 350.00, NULL, 7, 0, 'Get Started', 1),
('Business Website', 700.00, NULL, 14, 1, 'Start Your Project', 1),
('Custom / Advanced', NULL, 'From €1200', NULL, 0, 'Request Quote', 1),
('Website Care', NULL, '€90 / month', NULL, 0, 'Get Support', 1);