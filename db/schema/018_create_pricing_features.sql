-- ==========================================
-- Table: pricing_features
-- Description: Stores features associated with pricing plans
-- ==========================================

-- First, drop the `pricing_features` table if it exists
DROP TABLE IF EXISTS `pricing_features`;

CREATE TABLE `pricing_features` (
  `feature_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `plan_id` INT(10) UNSIGNED NOT NULL COMMENT 'Related pricing plan',
  `feature_text` VARCHAR(255) NOT NULL COMMENT 'Feature description',
  `sort_order` INT(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Display order',
  PRIMARY KEY (`feature_id`),
  KEY `idx_feature_plan` (`plan_id`),
  CONSTRAINT `fk_feature_plan`
    FOREIGN KEY (`plan_id`)
    REFERENCES `pricing_plans` (`plan_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci
COMMENT='Pricing plan features';