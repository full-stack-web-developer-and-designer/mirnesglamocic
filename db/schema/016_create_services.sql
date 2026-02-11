-- =========================================
-- Table: services
-- Description: Stores website services data
-- =========================================

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `service_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon_id` VARCHAR(100) NOT NULL COMMENT 'SVG symbol ID',
  `aria` VARCHAR(255) NOT NULL COMMENT 'ARIA label for accessibility',
  `title` VARCHAR(45) NOT NULL COMMENT 'Service title (no HTML)',
  `description` VARCHAR(320) NOT NULL COMMENT 'Service description text',
  `page_id` INT(10) UNSIGNED DEFAULT NULL COMMENT 'Related page ID',
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `uk_services_icon` (`icon_id`),
  KEY `idx_services_page` (`page_id`),
  CONSTRAINT `fk_services_page`
    FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci
  COMMENT='Table with information about services';
