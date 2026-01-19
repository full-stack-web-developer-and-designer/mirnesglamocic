-- =========================================
-- Inserts for table: cert_desc
-- Description: Certificate description
-- =========================================

-- First, clear the cert_desc table
TRUNCATE TABLE `cert_desc`;

INSERT INTO `cert_desc`
(`cert_desc_id`, `icon_id`, `title`, `description`, `slug`, `page_id`)
VALUES
(
  1,
  'code',
  'Front-end Development',
  CONCAT(
    'Front-end development focuses on the visual aspects of a website – the part that users see and interact with.',
    '\n\n',
    'Front-end developers work in languages like HTML, CSS, JavaScript, and various frameworks and libraries such as Bootstrap, AngularJS, React.js, Vue.js, jQuery, and Sass.'
  ),
  'frontendcertificates',
  2
),
(
  2,
  'gear',
  'Back-end Development',
  CONCAT(
    'Back-end development means working on server-side software, which focuses on everything you can''t see on a website.',
    '\n\n',
    'Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers.'
  ),
  'backendcertificates',
  3
),
(
  3,
  'database',
  'Database Development',
  CONCAT(
    'Database development is designing, creating a database, and analyzing requirements and their intents as raw data.',
    '\n\n',
    'Database developers are responsible for the design, programming, construction, and implementation of new databases, as well as modifying existing databases to user needs.'
  ),
  'databasecertificates',
  4
),
(
  4,
  'wordpress',
  'Wordpress Development',
  CONCAT(
    'WordPress is an open-source content management system (CMS) used to build, modify, and maintain websites.',
    '\n\n',
    'WordPress is written in PHP and run on a MySQL or MariaDB database with supported HTTPS. In addition, WordPress features include plugins and themes, among others.'
  ),
  'wordpresscertificates',
  5
),
(
  5,
  'webservice',
  'Web Services',
  CONCAT(
    'A web service is a software system that supports interoperable machine-to-machine interaction over a network.',
    '\n\n',
    'Web services allow different organizations or applications from multiple sources to communicate without the need to share sensitive data or IT infrastructure.'
  ),
  'webservicescertificates',
  6
),
(
  6,
  'pen',
  'Web Design',
  CONCAT(
    'Web design is the creation of websites and pages to reflect a company''s brand and information and ensure a user-friendly experience.',
    '\n\n',
    'The world of web design is constantly evolving, including mobile apps and user interface design, to meet the growing needs of website owners and visitors alike.'
  ),
  'webdesigncertificates',
  7
),
(
  7,
  'ux',
  'UI/UX Design',
  CONCAT(
    'The point of UI/UX design is to create a product that will be both visually appealing and highly pleasant to interact with.',
    '\n\n',
    'User interface design refers to the look and feel of a digital product, and UX refers to the experience a user has when interacting with it. Both elements work closely together.'
  ),
  'uxcertificates',
  8
),
(
  8,
  'seo',
  'Internet Marketing',
  CONCAT(
    'Internet marketing and SEO are increasingly becoming mandatory for businesses of all types. SEO stands for search engine optimization.',
    '\n\n',
    'It aims to improve a website''s position in search results pages. The higher the website is listed, the more people will see it. SEO is considered an essential marketing activity.'
  ),
  'seocertificates',
  9
),
(
  9,
  'adobe',
  'Adobe Tools',
  CONCAT(
    'Adobe Creative Cloud is a collection of software for graphic design, video editing, web development, and photography.',
    '\n\n',
    'Photoshop and Illustrator are must-have software for creatives because they can serve a variety of design needs, specifically for photo editing and vector graphics designing.'
  ),
  'adobecertificates',
  10
),
(
  10,
  'github',
  'Version Control',
  CONCAT(
    'Version control systems are software tools that help software teams manage changes to source code over time.',
    '\n\n',
    'Today, Git is the de facto standard for what''s known as version control software. Git is designed to handle everything from small to very large projects with speed and efficiency.'
  ),
  'gitcertificates',
  11
),
(
  11,
  'docker',
  'Container Platforms',
  CONCAT(
    'Docker is a platform designed to help developers build, manage, share, run, and distribute modern applications.',
    '\n\n',
    'Docker emerged as a de facto standard platform to quickly compose, create, deploy, scale, and oversee containers across Docker hosts, and runs on Linux, macOS and Windows.'
  ),
  'dockercertificates',
  12
),
(
  12,
  'linux',
  'Operating Systems',
  CONCAT(
    'Operating System is defined as a collection of programs that coordinates the operations of computer hardware and software.',
    '\n\n',
    'For the most part, the IT industry largely focuses on the top five OSs, including Apple''s macOS, Microsoft Windows, Google''s Android OS, Linux Operating System, and Apple iOS.'
  ),
  'linuxcertificates',
  13
);
