# PHP Includes (`inc` Folder)

This folder contains all **PHP include files** used throughout the portfolio website.  
These files provide reusable components, utilities, and structures to maintain a **modular, accessible, and maintainable architecture**.

Each file has a clear responsibility and can be included in pages where its functionality is needed.

---

## Folder Structure

```text
inc
├── ai.php
├── footer.php
├── form.php
├── header.php
└── helpers.php
```

---

## Table of Contents

1. [AI Chat](#ai-chat)
2. [Header](#header)
3. [Footer](#footer)
4. [Contact Form](#contact-form)
5. [Helpers](#helpers)
6. [Usage Notes](#usage-notes)

---

## AI Chat

`ai.php`

**Responsibilities:**

- Renders the reusable AI chat interface.
- Displays the floating AI assistant button and chat window.
- Provides the frontend markup required for AI conversations.
- Integrates with the chat API endpoint (`/api/chat.php`).
- Uses JavaScript to send and receive messages asynchronously.
- Designed to be reusable across multiple pages.
- Accessibility-friendly with semantic HTML and ARIA attributes.

**Usage (simplified example):**

```php
<?php require_once BASE_PATH . '/inc/ai.php'; ?>
```
---

## Header

`header.php`

**Responsibilities:**
- Generates the website header (top and bottom sections).
- Displays contact info, resume download link, and social icons.
- Contains a responsive navigation menu.
- Loads SVG icons for the header and navigation.
- Accessibility-friendly (ARIA labels, titles, semantic HTML).
- Supports print-friendly email display

**Usage (simplified example):**
```php
<?php require_once BASE_PATH . '/inc/header.php'; ?>
```

---

## Footer

`footer.php`

**Responsibilities:**
- Generates the website footer.
- Displays dynamic copyright:
  - Automatically updates the year range.
- Shows social links (LinkedIn, GitHub, CodePen) with proper ARIA labels.
- Includes a scroll-to-top button.
- Prints a barcode showing the current page URL for printouts.
- Loads JavaScript libraries with local fallback for offline support:
  - jQuery, Lightbox2, Lightslider, jQuery Validate, Picturefill, WebP Hero, Progressive.js.
- Loads custom JavaScript via `helpers.php`.

**Usage (simplified example):**
```php
<?php require_once BASE_PATH . '/inc/footer.php'; ?>
```

---

## Contact Form

`form.php`

**Responsibilities:**
- Generates a reusable contact form.
- Fields: Name, Email, Message.
- Includes client-side validation placeholders.
- AJAX-ready (works with `validate_me.js`) for form submission without page reload.
- Uses SVG icons inside input fields.
- Accessibility-friendly with ARIA live region for server responses.
- Textarea enforces maximum length.

**Usage (simplified example):**
```php
<?php require_once BASE_PATH . '/inc/form.php'; ?>
```

---

## Helpers

`helpers.php`

**Responsibilities:**
- Provides utility functions to simplify frontend and PHP operations:
1. `load_js(array $files, string $folder = '/JS/', string $minFolder = '/JS/')`
   - Loads JavaScript files with versioning.
   - Automatically uses `.min.js` in production. 
2. `asset(string $path)`
   - Returns versioned asset URL (CSS or JS) based on last modification time.
3. `e(string $str)`
   - Sanitizes output for safe HTML display.
4. `renderMultilineTitle(string $title)`
   - Splits a title into two lines by the last space for styling.
5. `renderParagraphs(string $text)`
   - Converts plain text into HTML paragraphs, using double line breaks as separators.

**Usage (simplified example):**
```php
<?php
require_once __DIR__ . '/inc/helpers.php';
// Load custom JS
$js_files = ['main.js'];
load_js($js_files);
?>
```
## Usage Notes

- Include files only where needed for performance and maintainability.
- `ai.php` can be included on any page where the AI assistant should be available.
- `header.php` and `footer.php` are typically included at the top and bottom of all pages.
- `form.php` can be embedded on any page that requires a contact form.
- `helpers.php` should be included before using its functions in other PHP files.

---

### 🧑‍💻 Author

**Mirnes Glamočić** - Full-stack web developer & designer

- **Website:** [mirnesglamocic.com](https://mirnesglamocic.com)
- **Email:** [contact@mirnesglamocic.com](mailto:contact@mirnesglamocic.com)
- **LinkedIn:** [linkedin.com/in/mirnesglamocic](https://www.linkedin.com/in/mirnesglamocic)
- **GitHub:** [full-stack-web-developer-and-designer](https://github.com/full-stack-web-developer-and-designer)

---

### ✅ Notes

- All components prioritize **accessibility (WCAG 2.1 AA)** and **semantic HTML**.
- JavaScript dependencies are loaded with **local fallback** to ensure offline reliability.
- Modular design ensures **reusability, maintainability**, and **separation of concerns**.