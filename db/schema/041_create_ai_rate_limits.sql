-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `ai_rate_limits`;
CREATE TABLE `ai_rate_limits` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `ip_hash` CHAR(64) NOT NULL,
    `request_count` SMALLINT UNSIGNED NOT NULL DEFAULT 1,
    `window_started_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_ai_rate_limits_ip_hash` (`ip_hash`),
    KEY `idx_ai_rate_limits_updated_at` (`updated_at`)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;