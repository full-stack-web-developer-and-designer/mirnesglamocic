# JavaScript Architecture

This folder contains all JavaScript files used in my portfolio website, structured to support **UI behavior, interactive components, and client-side logic**.

The architecture is **pragmatic**, prioritizing readability, maintainability, and direct control over functionality. Each file handles a specific responsibility while keeping concerns separate.

---

## JS Folder Structure

```text
JS
├── chat.js
├── main.js
├── projects-buttons.js
├── projects-load-more.js
├── cert-slider.js
├── form-focus.js
└── validate_me.js
```

---

## Table of Contents

1. [AI Chat](#ai-chat)
2. [Core Functionality](#core-functionality)
3. [Form & Validation](#form--validation)
4. [Projects & Buttons](#projects--buttons)
5. [Sliders](#sliders)
6. [Utilities](#utilities)

---

## AI Chat

`chat.js`

**Responsibilities:**

- Controls the AI chat widget user interface.
- Handles opening and closing the chat window.
- Sends visitor messages asynchronously to `/api/chat.php`.
- Displays AI responses without reloading the page.
- Manages loading indicators and basic error handling.
- Maintains the current conversation state during the active browsing session.
- Updates the chat history dynamically.

**Key Features:**

- AJAX communication with `/api/chat.php`
- JSON request and response handling
- Automatic scrolling to the latest message
- Keyboard support (Enter to send)
- Accessibility-friendly interaction

**Usage (simplified example):**

```javascript
sendMessage(userMessage)
    .then(displayAssistantReply)
    .catch(showErrorMessage);
```

---

## Core Functionality

`main.js`

**Responsibilities:**

- Initializes the website's core JavaScript functionality.
- Registers global event listeners.
- Coordinates common UI interactions shared across multiple pages.
- Initializes components after the DOM is fully loaded.
- Provides a central entry point for site-wide JavaScript behavior.
- Initializes page-specific modules when required.

**Usage (simplified example):**
```html
<script src="/JS/main.js"></script>
```

---

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

---

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

---

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

---

## Utilities

- All scripts are written in vanilla JavaScript or jQuery where appropriate.
- Each file has a single, well-defined responsibility.
- Scripts are loaded only on pages where they are required.
- Client-side logic is separated from PHP application logic.
- AJAX is used to improve responsiveness without unnecessary page reloads.
- The architecture emphasizes readability, maintainability, accessibility, and progressive enhancement.

---

### Dependencies

- Vanilla JavaScript
- jQuery (used selectively where it simplifies DOM manipulation and AJAX handling)
- jQuery Validation Plugin (`validate_me.js`)
- Fetch API / AJAX (`chat.js`)

---

### 🧑‍💻 Author

**Mirnes Glamočić** - Full-stack web developer & designer

- **Website:** [mirnesglamocic.com](https://mirnesglamocic.com)
- **Email:** [contact@mirnesglamocic.com](mailto:contact@mirnesglamocic.com)
- **LinkedIn:** [linkedin.com/in/mirnesglamocic](https://www.linkedin.com/in/mirnesglamocic)
- **GitHub:** [full-stack-web-developer-and-designer](https://github.com/full-stack-web-developer-and-designer)

---

### ✅ Notes

- All interactive elements follow WCAG 2.1 AA standards.
- ARIA attributes, semantic HTML, and lazy-loading are consistently used.
- Scripts are structured to avoid unnecessary dependencies or abstractions.
- AI chat functionality communicates asynchronously with the backend API using JSON.
- JavaScript modules are organized by feature to promote separation of concerns and easier maintenance.
