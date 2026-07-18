-- Drop the table if it exists to allow fresh creation
DROP TABLE IF EXISTS `ai_conversations`;

CREATE TABLE `ai_conversations` (

    `id` BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `session_id` CHAR(64) NOT NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `name` VARCHAR(100) DEFAULT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `user_agent` VARCHAR(500) DEFAULT NULL,
    `status` ENUM(
        'active',
        'closed',
        'archived'
    )
    NOT NULL DEFAULT 'active',
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,


    INDEX(session_id),
    INDEX(status),
    INDEX(created_at),
    INDEX(email)

)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;