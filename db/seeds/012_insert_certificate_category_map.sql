-- =========================================
-- Inserts for table: certificate_category_map
-- Description: Image  certificates for various skills
-- =========================================

-- First, clear the certificate_category_map table
TRUNCATE TABLE certificate_category_map;

-- ===== HTML =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 1
FROM certificates
WHERE skill LIKE '%HTML%' OR skill LIKE '%HTMLandCSS%';

-- ===== CSS =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 2
FROM certificates
WHERE skill LIKE '%CSS%' OR skill LIKE '%SASS%' OR skill LIKE '%Tailwind%';

-- ===== JavaScript =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 3
FROM certificates
WHERE skill LIKE '%JavaScript%' OR skill LIKE '%jQuery%' OR skill LIKE '%Node%' OR skill LIKE '%TypeScript%';

-- ===== FrontendIntro =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 4
FROM certificates
WHERE skill LIKE '%FrontendIntro%' OR skill LIKE '%Frontend%';

-- ===== WebDevelopment =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 5
FROM certificates
WHERE skill LIKE '%WebDevelopment%';

-- ===== Tailwind =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 6
FROM certificates
WHERE skill LIKE '%Tailwind%';

-- ===== SASS =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 7
FROM certificates
WHERE skill LIKE '%SASS%';

-- ===== Bootstrap =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 8
FROM certificates
WHERE skill LIKE '%Bootstrap%';

-- ===== UX =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 9
FROM certificates
WHERE skill LIKE '%UX%' OR skill LIKE '%Interaction Design%';

-- ===== WebDesign =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 10
FROM certificates
WHERE skill LIKE '%WebDesign%';

-- ===== WordPress =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 11
FROM certificates
WHERE skill LIKE '%WordPress%';

-- ===== Database =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 12
FROM certificates
WHERE skill LIKE '%SQL%' OR skill LIKE '%MySQL%' OR skill LIKE '%PostgreSQL%' OR skill LIKE '%MongoDB%' OR skill LIKE '%NoSQL%';

-- ===== Git/VCS =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 13
FROM certificates
WHERE skill LIKE '%Git%' OR skill LIKE '%VCS%' OR skill LIKE '%GitHub%';

-- ===== Photoshop/Lightroom =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 14
FROM certificates
WHERE skill LIKE '%Photoshop%' OR skill LIKE '%Lightroom%';

-- ===== Docker/Linux =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 15
FROM certificates
WHERE skill LIKE '%Docker%' OR skill LIKE '%Linux%' OR skill LIKE '%CentOS%' OR skill LIKE '%LinuxDistro%' OR skill LIKE '%LinuxEngineer%' OR skill LIKE '%LinuxFoundation%';

-- ===== PHP =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 16
FROM certificates
WHERE skill LIKE '%PHP%';

-- ===== Python =====
INSERT INTO certificate_category_map (certificate_id, category_id)
SELECT certificate_id, 17
FROM certificates
WHERE skill LIKE '%Python%';
