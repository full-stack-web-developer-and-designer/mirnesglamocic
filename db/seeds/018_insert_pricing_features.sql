-- =========================================
-- Data: pricing_features
-- Inserts feature lists for each pricing plan.
-- =========================================

-- First, clear the pricing_features table
TRUNCATE TABLE `pricing_features`;

-- Starter Website (plan_id = 1)
INSERT INTO pricing_features (plan_id, feature_text, sort_order)
VALUES
(1, 'Up to 5 pages', 1),
(1, 'Responsive design', 2),
(1, 'Basic SEO', 3),
(1, 'Contact form', 4),
(1, '7 days delivery', 5);

-- Business Website (plan_id = 2)
INSERT INTO pricing_features (plan_id, feature_text, sort_order)
VALUES
(2, 'Up to 10 pages', 1),
(2, 'Custom UI/UX design', 2),
(2, 'Advanced SEO', 3),
(2, 'Speed optimization', 4),
(2, '14 days delivery', 5);

-- Custom / Advanced (plan_id = 3)
INSERT INTO pricing_features (plan_id, feature_text, sort_order)
VALUES
(3, 'Web applications', 1),
(3, 'E-commerce solutions', 2),
(3, 'Custom development', 3),
(3, 'Ongoing support', 4),
(3, 'Scalable architecture', 5);

-- Website Care (plan_id = 4)
INSERT INTO pricing_features (plan_id, feature_text, sort_order)
VALUES
(4, 'Monthly Maintenance', 1),
(4, 'Security monitoring', 2),
(4, 'Speed Optimization', 3),
(4, 'Small content changes', 4),
(4, 'Priority support', 5);