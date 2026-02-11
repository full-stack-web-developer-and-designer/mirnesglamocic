# PHP Classes Architecture

This repository contains the PHP backend architecture for my portfolio website, including projects, skills, certificates, services, and other components.  

The classes are responsible for **database access, data fetching, and HTML rendering** across the website.

Most classes extend a shared base class (`Entity`) that provides a PDO database connection and common query helpers.  
Rendering logic is kept inside classes to keep templates clean and minimal.

The architecture is pragmatic rather than framework-driven, prioritizing readability, maintainability, and direct control over rendering for a single-developer portfolio project while avoiding unnecessary abstraction layers.

---

## Table of Contents

1. [Core Infrastructure](#core-infrastructure)
   - [Config](#config)
   - [DB](#db)
   - [Entity](#entity)
2. [Content & Pages](#content--pages)
   - [Pages](#pages)
   - [Navigation](#navigation)
3. [UI Components](#ui-components)
   - [ITA](#ita)
   - [CertDesc](#certdesc)
   - [Skills](#skills)
   - [Services](#services)
   - [Support](#support)
4. [Certificates & Sliders](#certificates--sliders)
   - [Slider](#slider)
   - [SliderConfig](#sliderconfig)
5. [Projects & Media](#projects--media)
   - [WebsiteProject](#websiteproject)
   - [WebsiteRenderer](#websiterenderer)
   - [Photoshop](#photoshop)
   - [Illustrations](#illustrations)
   - [Logos](#logos) 
6. [Utilities](#utilities)
   - [Input](#input)
   - [Helpers & Tools](#helpers--tools)

---

## Core Infrastructure

### Config

Provides access to global configuration values.

**Responsibilities:**
- Reads values from `$GLOBALS['config']`
- Supports nested paths via slash notation

**Usage:**
```php
$dbHost = Config::get('mysql/host');
```

### DB

PDO database singleton.

**Responsibilities:**
- Creates and reuses a single PDO instance
- Configures error handling and fetch modes

**Usage:**
```php
$pdo = DB::getInstance();
```

### Entity

Abstract base class for all database-backed models.

**Responsibilities:**
- Provides shared PDO connection
- Defines table name and primary key
- Supplies basic read helpers (`get`, `getAll`)
- Serves as a base for query and render logic

**Notes:**
- Automatically initializes DB connection
- Encourages consistent data access

## Content & Pages

### Pages

Represents website pages.

**Responsibilities:**
- Fetch and render page content
- Handles sections, titles, and summaries
- Supports ARIA labels for accessibility

**Usage**
```php
$page->renderPage()
```

### Navigation

Generates the main navigation menu.

**Responsibilities:**
- Fetches navigation items
- Supports page links and anchors
- Outputs accessible HTML (aria-label, title)

**Usage**
```php
Navigation::renderNavigation();
```
## UI Components

### ITA

Renders certificates by ITAcademy with responsive images.

**Responsibilities:**
- Certificate + image aggregation
- Responsive `<picture>` output
- Clean image URL handling

**Usage**
```php
$ita = new ITA();
$ita->renderCertificates();
```

### CertDesc

This class exists to provide textual context for certificate sections, separate from visual certificate sliders.


**Usage**
```php
$cert = new CertDesc();
$cert->renderDescription();
```
### Skills

Render skill icons grouped by categories

**Responsibilities:**
- Supports last-three-category summary
- Handles capitalization and accessibility

**Usage**
```php
$skills = new Skills();
$skills->renderSkills();
```

### Services

Render services offered

**Responsibilities:**
- Supports icons, titles with `<br>`, descriptions
- Accessibility via ARIA labels

**Usage**
```php
$services = new Services();
$services->renderServices();
```

### Support

Render support links (e.g., Patreon, Buy Me a Coffee)

**Responsibilities:**
- Handles icons, labels, ARIA, and safe target/rel attributes

**Usage**
```php
$supports = Support::getAll();
foreach ($supports as $support) {
   echo $support->render();
}
```

## Certificates & Sliders

Represent LinkedIn, Pluralsight, SoloLearn certificates

**Responsibilities**:
- Each certificate can appear in multiple categories
- Used by Slider for displaying achievements

### Slider

Render certificates in multiple sliders

**Responsibilities**:
- Handles multiple sliders per section
- Supports filtering by skills or conditions

**Usage**
```php
$slider->renderSection(
   'SoloLearn Front-end Certificates',
   'frontend_sololearn'
);
```

### SliderConfig

This class handles the configuration of the sliders used to display certificates. It maps different certificate categories (e.g., "Angular," "Frontend," "CSS") to their respective skills or conditions, making it easy to dynamically render certificates based on those categories. Each slider key in the `MAP` constant corresponds to a specific set of certificates that should be displayed, filtered either by **skills** or **conditions**.

For each slider, you can define:
- **skills**: A list of skill names that should be used to filter the certificates for that slider.
- **conditions**: A set of conditions with optional `class` attributes, which can be used to filter certificates further based on specific classes (e.g., filtering certificates with a `class` like "linkedin" or "preview").

This design ensures that the certificate display logic is flexible and can evolve independently of the underlying database structure, making it easier to modify how certificates are presented in the future.

**Responsibilities:**
- Centralizes the configuration for certificate sliders.
- Maps certificate categories to slider settings using `skills` and `conditions`.
- Supports adding new categories or slider settings as required.

**Example:**
```php
// Mapping for 'angular' slider
'angular' => [
    'skills' => ['Angular'], // Display certificates related to the 'Angular' skill
],
// Mapping for 'css' slider with conditions
'css' => [
    'conditions' => [
        ['skill' => 'CSS', 'class' => 'linkedin preview'],
        ['skill' => 'CSS WebDesign', 'class' => 'linkedin preview'],
    ], // Filter certificates based on the 'CSS' and 'CSS WebDesign' skills with the 'linkedin preview' class
],
```

## Projects & Media

### WebsiteProject

Fetches website projects from the database.

**Responsibilities:**
- Complex SQL queries with joins
- Supports filtering by website type
- Provides project metadata and images
- Returns raw data (no HTML)

```php
$projects = WebsiteProject::fetch();
```

### WebsiteRenderer

Renders website projects as complete case studies.

**Responsibilities:**
- Handles responsive images with <picture> tags
- Project overview (role, tech, features)
- Live site and GitHub links

**Usage**
```php
WebsiteRenderer::render(WebsiteProject::fetch());
```
**Note on Static vs Non-Static Methods:**  
- Static methods (e.g., `WebsiteProject::fetch()`) are general-purpose and can be called directly on the class without creating an instance.  
- Non-static methods (e.g., `$ita->renderCertificates()`) require an object instance because they operate on data specific to that object.

### Photoshop

Handles Photoshop-based projects.

**Usage**
```php
Photoshop::renderPhotoshop();
```

**Responsibilities:**
- Fetches responsive image sets
- Renders projects with `<picture>` and lazy-loading

### Illustrations

Fetches and renders illustration projects.

**Usage**
```php
Illustration::renderIllustration();
```

### Logos

Handles logo-based projects.

**Usage**
```php
Logo::renderLogo();
```
## Utilities

### Input
Helper for handling $_POST and $_GET
**Responsibilities:**
- Handles input validation and sanitization

**Usage**
```php
if (Input::exists()) {
    $value = Input::get('field');
}
```

### Helpers & Tools
**Responsibilities:**
- Various helper classes and functions
- Can include date formatting, escaping, common HTML helpers
---

### 🧑‍💻 Author

**Mirnes Glamočić** - Full-stack web developer & designer

Portfolio: [mirnesglamocic.com](https://mirnesglamocic.com "Visit my portfolio website")

**Email:** contact@mirnesglamocic.com  
**LinkedIn:** https://www.linkedin.com/in/mirnesglamocic  
**GitHub:** https://github.com/full-stack-web-developer-and-designer

---

### ✅ Notes

- All render methods escape HTML for security (htmlspecialchars).
- Images use lazy-loading and responsive `<picture>` sources.
- ARIA attributes and `<title>` tags are added for accessibility.
- The entire site follows WCAG 2.1 AA standards to ensure accessibility, including proper ARIA labels, semantic HTML, and alt texts for images.
- Some classes (like Slider) may query the same data multiple times depending on category filtering.
- The architecture favors clarity and maintainability over strict separation patterns.