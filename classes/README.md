# PHP Classes Architecture

This folder contains the PHP backend architecture for my portfolio website, including the AI assistant, projects, skills, certificates, services, database models, and reusable rendering components.

The classes are responsible for database access, content retrieval, HTML rendering, AI communication, conversation management, validation, logging, and other backend functionality across the website.

Database-backed model classes extend a shared base class (`Entity`) that provides a PDO database connection and common query helpers.  
Rendering logic is kept inside classes to keep templates clean and minimal.

The architecture is pragmatic rather than framework-driven, prioritizing readability, maintainability, and direct control over rendering for a single-developer portfolio project while avoiding unnecessary abstraction layers.

---

## Table of Contents

1. [Core Infrastructure](#core-infrastructure)
   - [Config](#config)
   - [DB](#db)
   - [Entity](#entity)
2. [AI Assistant Architecture](#ai-assistant-architecture)
   - [AI](#ai)
   - [AIAssistant](#aiassistant)
   - [AIClient](#aiclient)
   - [AIConfig](#aiconfig)
   - [AIConversation](#aiconversation)
   - [AIKnowledge](#aiknowledge)
   - [AILead](#ailead)
   - [AILogger](#ailogger)
   - [AIMessage](#aimessage)
   - [AIPrompt](#aiprompt)
   - [AIRateLimiter](#airatelimiter)
   - [AIResponse](#airesponse)
   - [AIValidator](#aivalidator)
   - [AIException](#aiexception)
3. [Content & Pages](#content--pages)
   - [Pages](#pages)
   - [Navigation](#navigation)
4. [UI Components](#ui-components)
   - [ITA](#ita)
   - [CertDesc](#certdesc)
   - [Skills](#skills)
   - [Services](#services)
   - [Support](#support)
5. [Certificates & Sliders](#certificates--sliders)
   - [Slider](#slider)
   - [SliderConfig](#sliderconfig)
6. [Projects & Media](#projects--media)
   - [WebsiteProject](#websiteproject)
   - [WebsiteRenderer](#websiterenderer)
   - [Photoshop](#photoshop)
   - [Illustrations](#illustrations)
   - [Logos](#logos) 
7. [Utilities](#utilities)
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

---

## AI Assistant Architecture

The AI assistant is implemented through a modular group of classes responsible for request validation, conversation persistence, prompt construction, OpenAI communication, rate limiting, logging, lead capture, and response handling.

The public chat endpoint is located at `/api/chat.php`, while the frontend interface is rendered through `/inc/ai.php` and controlled by `/JS/chat.js`.

### AI

Main AI service and orchestration class.

**Responsibilities:**

* Coordinates the complete AI request lifecycle.
* Validates visitor input.
* Creates or retrieves conversations.
* Stores visitor and assistant messages.
* Loads conversation history.
* Builds the OpenAI request payload.
* Sends requests through `AIClient`.
* Returns a normalized `AIResponse`.
* Supports lead creation and conversation history retrieval.

**Usage:**

```php
$ai = new AI();

$response = $ai->ask([
    'message' => $message,
    'conversation_id' => $conversationId,
    'name' => $name,
    'email' => $email,
    'ip' => $ip,
]);
```

### AIAssistant

Provides higher-level AI assistant behavior and application-specific interaction logic.

**Responsibilities:**

* Connects the AI service with the website assistant.
* Defines assistant-specific behavior.
* Coordinates website context and visitor interaction.
* Keeps assistant functionality separate from lower-level API communication.

### AIClient

Handles communication with the OpenAI API.

**Responsibilities:**

* Sends HTTP requests to the OpenAI Responses API.
* Applies API credentials and request configuration.
* Encodes request payloads as JSON.
* Processes API responses.
* Handles network, HTTP, and malformed-response errors.
* Returns structured response data to the AI service.

### AIConfig

Centralizes AI configuration.

**Responsibilities:**

* Provides the OpenAI API key.
* Defines the selected model.
* Stores endpoint and timeout configuration.
* Provides token and rate-limit settings.
* Prevents configuration values from being duplicated across classes.

### AIConversation

Represents an AI conversation stored in the database.

**Responsibilities:**

* Creates new visitor conversations.
* Retrieves existing conversations.
* Stores visitor identity and session information.
* Associates messages and leads with a conversation.
* Supports persistent conversation state.

### AIKnowledge

Provides website-specific knowledge to the AI assistant.

**Responsibilities:**

* Retrieves relevant portfolio information.
* Supplies project, service, skill, and contact context.
* Helps ground AI responses in website content.
* Separates knowledge retrieval from prompt formatting.

### AILead

Stores potential client or employer information.

**Responsibilities:**

* Captures visitor names and email addresses.
* Associates leads with AI conversations.
* Stores relevant enquiry details.
* Supports follow-up and lead management.

### AILogger

Handles AI-related application logging.

**Responsibilities:**

* Records API and application errors.
* Stores diagnostic information.
* Helps identify failed requests and unexpected responses.
* Keeps visitor-facing error messages separate from technical logs.

### AIMessage

Represents individual conversation messages.

**Responsibilities:**

* Stores visitor and assistant messages.
* Associates messages with conversations.
* Retrieves ordered conversation history.
* Stores AI model and token-usage metadata.
* Supports context-aware conversations.

### AIPrompt

Builds prompts and API request payloads.

**Responsibilities:**

* Defines the assistant's system instructions.
* Combines website knowledge with conversation history.
* Adds the current visitor message.
* Produces the payload expected by the OpenAI Responses API.
* Keeps prompt construction separate from transport logic.

### AIRateLimiter

Protects the AI endpoint from excessive requests.

**Responsibilities:**

* Tracks requests by visitor or IP address.
* Enforces request limits within a defined period.
* Reduces abuse and unnecessary API usage.
* Returns a controlled error when the limit is exceeded.

### AIResponse

Represents a normalized AI response.

**Responsibilities:**

* Stores the assistant message.
* Stores the model name.
* Stores input, output, and total token counts.
* Stores the raw API response when required.
* Associates the response with a conversation ID.
* Provides consistent getters for the application layer.

### AIValidator

Validates AI request data.

**Responsibilities:**

* Validates visitor messages.
* Validates conversation identifiers.
* Validates optional names and email addresses.
* Enforces length and format restrictions.
* Rejects malformed requests before API communication.

### AIException

Custom exception class for AI-related failures.

**Responsibilities:**

* Represents controlled AI application errors.
* Separates AI failures from generic PHP exceptions.
* Allows the API endpoint to return consistent error responses.
* Supports centralized logging and error handling.

---

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

- **Website:** [mirnesglamocic.com](https://mirnesglamocic.com)
- **Email:** [contact@mirnesglamocic.com](mailto:contact@mirnesglamocic.com)
- **LinkedIn:** [linkedin.com/in/mirnesglamocic](https://www.linkedin.com/in/mirnesglamocic)
- **GitHub:** [full-stack-web-developer-and-designer](https://github.com/full-stack-web-developer-and-designer)

---

### ✅ Notes

- All render methods escape HTML for security (htmlspecialchars).
- Images use lazy-loading and responsive `<picture>` sources.
- ARIA attributes and `<title>` tags are added for accessibility.
- The entire site follows WCAG 2.1 AA standards to ensure accessibility, including proper ARIA labels, semantic HTML, and alt texts for images.
- Some classes (like Slider) may query the same data multiple times depending on category filtering.
- The architecture favors clarity and maintainability over strict separation patterns.