-- =========================================
-- Data: services
-- Inserts initial website services with icons, titles, and descriptions.
-- =========================================

-- First, clear the services table
TRUNCATE TABLE `services`;

INSERT INTO `services`
(`icon_id`, `aria`, `title`, `description`, `page_id`)
VALUES
(
  'webdesign',
  'Web design service',
  'WEB DESIGN',
  'I create visually appealing, user-friendly websites. From layout and graphics to fonts and colors, I craft designs that bring your vision to life.',
  1
),
(
  'webdevelopment',
  'Web development service',
  'WEB DEVELOPMENT',
  'I build fast, responsive websites using modern programming languages. Every site works flawlessly on all devices and browsers, providing a seamless user experience.',
  1
),
(
  'server',
  'Hosting and domain service',
  'HOSTING & DOMAIN',
  'Your website will be secure and reliable with SSL protection and DDoS defense. I help you choose the perfect domain and hosting plan for your business.',
  1
),
(
  'seo',
  'SEO optimization service',
  'SEO OPTIMIZATION',
  'Boost your website’s visibility on Google and Bing. I optimize your site so your target audience finds you easily, improving traffic and conversions.',
  1
);
