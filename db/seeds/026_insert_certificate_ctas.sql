-- =========================================
-- Insert all certificate CTAs into certificate_ctas table
-- =========================================
-- Clear existing certificate_ctas
-- =========================================
TRUNCATE TABLE `certificate_ctas`;
-- Frontend Certificates (page_id = 2)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    2,
    'Ready to Work With a Certified Frontend Developer?',
    'These certificates represent my dedication to mastering modern frontend technologies — including HTML, CSS, JavaScript, and responsive design principles.',
    'But beyond certifications, I focus on building real-world, user-friendly, and performance-optimized websites that help businesses grow.',
    'If you''re looking for a reliable developer who combines technical knowledge with practical experience, let''s connect.'
);

-- Backend Certificates (page_id = 3)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    3,
    'Need a Reliable Backend Developer?',
    'These backend certifications reflect my knowledge of server-side development, databases, APIs, and secure application architecture.',
    'I build scalable, secure, and performance-driven systems using PHP, MySQL, and modern backend development principles.',
    'If you\'re looking for someone to power your website or web application with strong backend logic and database integration, let\'s work together.'
);

-- Database Certificates (page_id = 4)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    4,
    'Looking for Strong Database Expertise?',
    'These database certifications demonstrate my understanding of data modeling, relational databases, query optimization, and structured data management.',
    'I design efficient database structures, write optimized SQL queries, and ensure secure and reliable data handling for web applications.',
    'If your project requires well-organized data, high performance, and scalable database solutions, I’m ready to help.'
);

-- WordPress Certificates (page_id = 5)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    5,
    'Need a Professional WordPress Website?',
    'These WordPress certifications reflect my knowledge of theme customization, plugin integration, website optimization, and content management systems.',
    'I build responsive, SEO-friendly, and user-focused WordPress websites tailored to business needs — whether it’s a company site, portfolio, landing page, or blog.',
    'If you''re looking for a reliable developer to create or improve your WordPress website, I’m ready to help.'
);

-- Web Services Certificates (page_id = 6)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    6,
    'Looking for Reliable Web Services and API Integration?',
    'These web services certifications demonstrate my expertise in building APIs, integrating third-party services, and connecting web applications efficiently and securely.',
    'I create scalable, maintainable, and performance-oriented backend services that allow your applications to communicate seamlessly and automate workflows.',
    'If your project requires robust web services, API integration, or server-to-server communication, I’m ready to help.'
);

-- Web Design Certificates (page_id = 7)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    7,
    'Want a Stunning and User-Friendly Website?',
    'These web design certifications highlight my skills in creating visually appealing, intuitive, and responsive website layouts.',
    'I focus on combining aesthetics with usability, ensuring your websites are engaging, accessible, and optimized for all devices.',
    'If you’re looking for a developer who can transform your ideas into beautiful, functional web designs, let’s work together.'
);

-- UX Certificates (page_id = 8)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    8,
    'Looking for Exceptional User Experience Design?',
    'These UX certifications showcase my ability to create intuitive, user-centered designs that improve engagement and usability.',
    'I focus on understanding users’ needs, designing clear interfaces, and crafting seamless experiences that delight visitors and drive results.',
    'If you want your website or application to be easy to use, efficient, and enjoyable for your users, let’s collaborate.'
);

-- SEO Certificates (page_id = 9)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    9,
    'Want Your Website to Rank Higher and Get More Traffic?',
    'These SEO certifications demonstrate my understanding of search engine optimization, keyword strategy, on-page and technical SEO, and performance monitoring.',
    'I help websites increase visibility, attract more visitors, and improve organic traffic through proven SEO techniques.',
    'If you want your website to perform better in search engines and reach more potential customers, let’s work together.'
);

-- Adobe Certificates (page_id = 10)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    10,
    'Want Professional Design and Creative Solutions?',
    'These Adobe certifications showcase my expertise in creative software, including Photoshop, Illustrator, and other design tools.',
    'I create visually compelling graphics, branding materials, and multimedia content that communicates your message effectively and professionally.',
    'If you want creative, polished, and business-ready designs that make your projects stand out, let’s collaborate.'
);

-- Git Certificates (page_id = 11)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    11,
    'Looking for Reliable Development and Version Control?',
    'These Git certifications demonstrate my expertise in version control, collaborative development, and maintaining clean, organized codebases.',
    'I ensure projects are properly managed, changes are tracked efficiently, and team workflows are smooth and error-free.',
    'If your project requires a developer who values professional Git practices and reliable collaboration, let’s work together.'
);

-- Docker Certificates (page_id = 12)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    12,
    'Need Efficient and Scalable Development Environments?',
    'These Docker certifications demonstrate my expertise in containerization, deploying applications reliably, and managing scalable development environments.',
    'I ensure your applications run consistently across systems, simplify deployment workflows, and improve overall project efficiency.',
    'If you want modern, reliable, and scalable solutions for your web or server applications, let’s collaborate.'
);

-- Linux Certificates (page_id = 13)
INSERT INTO `certificate_ctas` 
(`page_id`, `title`, `paragraph1`, `paragraph2`, `paragraph3`)
VALUES
(
    13,
    'Looking for Reliable Linux System Expertise?',
    'These Linux certifications highlight my skills in server administration, system management, and maintaining secure, stable environments.',
    'I configure, optimize, and maintain Linux servers to ensure high performance, security, and reliability for your web or application infrastructure.',
    'If your project requires dependable Linux systems or server administration, I’m ready to help.'
);
