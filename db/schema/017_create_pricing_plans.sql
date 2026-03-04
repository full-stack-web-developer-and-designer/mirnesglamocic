-- ==========================================
-- Table: pricing_plans
-- Description: Stores pricing plan main data
-- ==========================================

-- First, drop the `pricing_plans` table if it exists
DROP TABLE IF EXISTS `pricing_plans`;

CREATE TABLE `pricing_plans` (
  `plan_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL COMMENT 'Plan name',
  `price` DECIMAL(10,2) DEFAULT NULL COMMENT 'Numeric price (NULL if custom)',
  `price_text` VARCHAR(50) DEFAULT NULL COMMENT 'Custom price text like "From €1200"',
  `delivery_days` INT(3) UNSIGNED DEFAULT NULL COMMENT 'Estimated delivery time in days',
  `is_featured` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '1 = highlighted plan',
  `button_text` VARCHAR(50) NOT NULL COMMENT 'CTA button text',
  `page_id` INT(10) UNSIGNED DEFAULT NULL COMMENT 'Related page ID',
  PRIMARY KEY (`plan_id`),
  KEY `idx_pricing_page` (`page_id`),
  CONSTRAINT `fk_pricing_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci
COMMENT='Pricing plans table';