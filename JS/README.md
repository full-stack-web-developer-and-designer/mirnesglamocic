# JavaScript Architecture

This folder contains all JavaScript files used in my portfolio website, structured to support **UI behavior, interactive components, and client-side logic**.

The architecture is **pragmatic**, prioritizing readability, maintainability, and direct control over functionality. Each file handles a specific responsibility while keeping concerns separate.

---

## JS Folder Structure

```text
JS
├── main.js
├── projects-buttons.js
├── projects-load-more.js
├── cert-slider.js
├── form-focus.js
└── validate_me.js
```

---

## Table of Contents

1. [Core Functionality](#core-functionality)
2. [Form & Validation](#form--validation)
3. [Projects & Buttons](#projects--buttons)
4. [Sliders](#sliders)
5. [Utilities](#utilities)

---

## Core Functionality

`main.js`

**Responsibilities:**
- Handles general site interactions
- Initializes scripts on DOMContentLoaded
- Maintains global JS state if needed

**Usage (simplified example):**
```html
<script src="/JS/main.js"></script>
```

## Form & Validation

`form-focus.js`

**Responsibilities:**
- Improves form UI/UX by adding active/focus states.
- Handles CSS class toggling on input focus/blur.
- Supports accessibility with proper focus indicators.

**Usage (simplified example):**
```javascript
document.querySelectorAll('input, textarea').forEach(input => {
  input.addEventListener('focus', () => input.parentElement.classList.add('active'));
});
```
---

`validate_me.js`

**Responsibilities:**
- Handles client-side form validation.
- Provides rules for name, email, and message fields.
- Integrates AJAX submission to avoid full page reload.
- Displays server response (success/error) dynamically in the form.
- Uses jQuery Validation Plugin for structured rules and messages.

**Usage (simplified example):**
```javascript
$('#contact_me').validate({
  rules: { name: { required: true, validName: true } },
  submitHandler: function(form) {
    $.ajax({ url: 'form_process.php', type: 'POST', data: $(form).serialize() });
  }
});
```

## Projects & Buttons

`projects-buttons.js`

Controls **project section navigation** using buttons and nested buttons.

**Responsibilities:**
- Switches between project categories.
- Shows/hides project sections dynamically.
- Maintains accessibility using ARIA attributes for active/inactive tabs.
- Supports nested project tabs.

**Design Notes:**
- Avoids URL changes or reloads
- Keeps markup clean by handling logic in JS

---

**Usage (simplified example):**
```javascript
document.querySelectorAll('.project-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    // Show corresponding project section
  });
});
```

---

`projects-load-more.js`

**Responsibilities:**
- Implements "Load More" functionality for project sections.
- Fetches additional project items dynamically without a page reload.
- Ensures smooth animations and accessibility while loading new content.

**Usage (simplified example):**
```javascript
loadMoreButton.addEventListener('click', fetchNextProjects);
```

## Sliders

`cert-slider.js`

**Responsibilities:**
- Controls certificate sliders and carousels.
- Handles navigation, autoplay, and responsive behavior.
- Supports multiple sliders on the same page.

**Usage (simplified example):**
```javascript
initializeSlider('#certificates-slider');
```

## Utilities

- All scripts are written in vanilla JS or jQuery where needed.
- Each file is modular and handles a specific responsibility.
- Scripts are included selectively in pages where needed.
- The design prioritizes readability, maintainability, and accessibility.

---
### Dependencies

- jQuery (used selectively where it simplifies DOM and AJAX handling)
- jQuery Validation Plugin (validate_me.js only)

---

### 🧑‍💻 Author

**Mirnes Glamočić** - Full-stack web developer & designer

Portfolio: [mirnesglamocic.com](https://mirnesglamocic.com "Visit my portfolio website")

**Email:** contact@mirnesglamocic.com  
**LinkedIn:** https://www.linkedin.com/in/mirnesglamocic  
**GitHub:** https://github.com/full-stack-web-developer-and-designer

---

### ✅ Notes

- All interactive elements follow WCAG 2.1 AA standards.
- ARIA attributes, semantic HTML, and lazy-loading are consistently used.
- Scripts are structured to avoid unnecessary dependencies or abstractions.
