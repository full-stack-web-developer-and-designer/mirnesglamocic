# 🎨 Website Stylesheets Overview

This project uses a **modular CSS architecture** to keep styles organized, maintainable, and scalable.  
Each stylesheet has a clear responsibility and is scoped to specific pages or features.

All styles are written **mobile-first**, make extensive use of **CSS variables**, and support **responsive layouts** and **print styles** where needed.

```text
🎨 style.css (Global Design System)
        │
        ├── 🏠 css.php (Homepage)
        ├── 🏆 certificates.css (Certificates)
        └── ⚠️ error.css (403 / 404)
```
---

## 📁 CSS Files Structure

### 1️⃣ `style.css` — Global Styles (All Pages)

**Scope:**  
Used on **all pages** across the website.

**Purpose:**  
Defines the global design system and shared UI components.

**Includes:**
- CSS variables (`:root`) for:
  - Colors
  - Typography
  - UI states (hover, focus, active)
- Global resets and box-sizing
- Typography (headings, text, links)
- Layout helpers (`.wrapper`)
- Header, navigation, and footer styles
- Buttons and icons
- Scrollbar customization
- Accessibility enhancements (keyboard focus)
- Responsive breakpoints
- Print styles (shared defaults)

**Why it exists:**  
This file acts as the **foundation** of the entire design system.

---

### 2️⃣ `css.php` — Index Page Styles (Dynamic CSS)

**Scope:**  
Used only on the **index (home) page**.

**Purpose:**  
Provides page-specific styling that is generated dynamically via PHP.

**Includes:**
- Layout rules specific to the index page
- Section-level styling
- Typography overrides
- Responsive adjustments unique to the homepage
- Dynamic output (served with `Content-Type: text/css`)

**Why PHP instead of plain CSS:**  
Allows dynamic behavior such as:
- Random background image selection
- Environment-based styling
- Cache-busting
- Conditional styles if needed in the future

---

### 3️⃣ `certificates.css` — Certificates Pages

**Scope:**  
Used on **Certificates-related pages** only.

**Purpose:**  
Handles all visual styling for certificate listings and layouts.

**Includes:**
- Certificate card layouts
- Typography for certificate content
- Hover and interaction effects
- Grid / flex-based layouts
- Responsive behavior for different screen sizes

**Why it’s separate:**  
Keeps certificate-specific styles isolated and prevents unnecessary CSS loading on other pages.

---

### 4️⃣ `error.css` — Error Pages (403 / 404)

**Scope:**  
Used exclusively on **error pages** (403 and 404).

**Purpose:**  
Provides a clean, user-friendly design for error states.

**Includes:**
- Page layout and centering
- Error messages
- Buttons and navigation hints
- Responsive typography
- Minimal and focused styling

**Why it’s separate:**  
Error pages should be lightweight and independent from the main UI.

---

## 🎯 Design Principles

- **Mobile-first** approach
- **CSS variables** for consistency and easy theming
- **Modular stylesheets** by page responsibility
- **Accessible UI** (focus states, contrast, keyboard navigation)
- **Maintainable and scalable** structure
- **Print-friendly styles** where applicable

---

### 🧑‍💻 Author

**Mirnes Glamočić** - Full-stack web developer & designer

Portfolio: [mirnesglamocic.com](https://mirnesglamocic.com "Visit my portfolio website")

**Email:** contact@mirnesglamocic.com  
**LinkedIn:** https://www.linkedin.com/in/mirnesglamocic  
**GitHub:** https://github.com/full-stack-web-developer-and-designer

---

### ✅ Notes

- Global variables are defined in `style.css` and reused across other stylesheets.
- Page-specific files should avoid redefining global styles unless necessary.
- New pages should get their own stylesheet only if they have significant custom styling.

---

✨ Clean structure = easier maintenance and future growth.
