# Coding Standards & Preferences

> This is a universal reference for AI agents (Claude, etc.). Apply these conventions to **every project** unless the project explicitly overrides a rule. When starting or editing any project, read this file first.

---

## 1. Technology Stack

| Layer | Choice |
|---|---|
| Backend | PHP — server-side rendering, no frameworks |
| Frontend JS | Vanilla JavaScript (ES5) — no frameworks, no build tools |
| Frontend CSS | Custom CSS with CSS variables — no Tailwind, no Bootstrap on main pages |
| Templating | PHP includes (header, footer, sidebar, page templates) |
| Dependencies | CDN only — nothing bundled, no npm/webpack/vite |
| Server config | Apache `.htaccess` for clean URLs |

---

## 2. Project Structure

Every project follows this layout. Adapt folder names to the project, but keep the pattern:

```
/project-root
├── index.php               # Homepage
├── .htaccess               # Clean URL rewrite rules
│
├── assets/
│   ├── css/style.css       # ONE main stylesheet for all pages
│   ├── js/main.js          # ONE main JS file for all pages
│   └── images/             # All images, named descriptively with hyphens
│
├── includes/               # Shared PHP templates
│   ├── header.php          # <head>, <nav>, top bar
│   ├── footer.php          # Footer HTML + ALL script/CDN loading
│   └── sidebar.php         # Optional: right-rail widgets/CTAs
│
├── page-name/              # One directory per page or section
│   └── index.php
│
└── api/ or ghl/ or lib/    # Backend logic, API integrations, helpers
    ├── config.php          # Credentials/constants (never commit real values)
    └── functions.php       # Reusable functions
```

**Rules:**
- One page = one directory with an `index.php` inside
- Shared styles go in `assets/css/style.css` — never create per-page CSS files
- Shared scripts go in `assets/js/main.js` — never create per-page JS files
- Isolated pages (landing pages, surveys) may have their own `/lp-asset/` folder with separate CSS

---

## 3. Naming Conventions

### Files & Directories
- All directory and file names: **kebab-case** (`dental-implants/`, `submit-handler.php`)
- Images: descriptive, hyphenated (`hero-background.jpg`, `service-icon-implants.png`)
- No spaces, no underscores in file/folder names

### CSS Classes & IDs
- All classes: **kebab-case** (`hero-content`, `service-card`, `btn-primary`)
- Use component prefixes to define scope:
  - `btn-` → buttons
  - `nav-` → navigation elements
  - `hero-` → hero section
  - `section-` → page sections
  - `card-` → card components
  - `footer-` → footer elements
  - `sidebar-` or `sw-` → sidebar widgets
- State/modifier classes: `.active`, `.hidden`, `.expanded`, `.scrolled`, `.mobile-open`
- Utility classes: `.container`, `.section`, `.text-center`
- IDs: use sparingly; prefer classes for styling

### PHP
- Variables: **snake_case** (`$page_title`, `$base_url`, `$form_data`)
- Functions: **camelCase** (`sendLead()`, `getAccessToken()`, `formatPhone()`)
- Constants: **UPPER_CASE** (`API_KEY`, `SITE_URL`, `USE_OAUTH`)

### JavaScript
- Variables and functions: **camelCase** (`mobileMenu`, `handleScroll`, `goToSlide`)
- Breakpoint/config constants: **UPPER_CASE** (`MOBILE_BP`, `SLIDE_DURATION`)

---

## 4. PHP Conventions

### Page Pattern
Each page sets its variables, then includes the shared header and footer:

```php
<?php
$page_title       = 'Page Title | Site Name';
$page_description = 'Meta description, ~155 characters.';
$page_class       = 'page-unique-name';  // unique body class per page
include __DIR__ . '/../includes/header.php';
?>

<!-- page HTML here -->

<?php include __DIR__ . '/../includes/footer.php'; ?>
```

### Reusable Page Templates
When many pages share the same layout, use a template file:

```php
<?php
// Set all variables the template needs
$page_title   = '...';
$page_h1      = '...';
$page_image   = '../assets/images/hero.jpg';
$page_content = ob_start() . '...HTML...' . ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/includes/page-template.php';
?>
```

### Path Resolution
Always use `__DIR__` or `$_SERVER['DOCUMENT_ROOT']` — never bare relative `../` paths:

```php
// Correct
include __DIR__ . '/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php';

// Wrong
include '../includes/header.php';
```

### Output Escaping
Always escape dynamic/user-supplied output:

```php
echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
```

### Conditionals
Ternary for simple fallbacks:

```php
$label = isset($label) ? $label : 'Default';
```

### Code Style
- 2-space indentation
- No `strict_types` declaration
- No type hints
- Short HTML strings can be inline; use `ob_start()`/`ob_get_clean()` for multi-line HTML
- Never commit credentials — put them in `config.php` and exclude from version control

### Comment Style
```php
// Single-line note

/* ─────────────────────────────────────────
   SECTION NAME
───────────────────────────────────────── */
```

---

## 5. CSS Conventions

### Architecture
- **Single stylesheet** (`assets/css/style.css`) for all main pages
- No SASS, LESS, or PostCSS
- No Tailwind, no Bootstrap on main site pages
- Isolated pages (surveys, landing pages) may have a separate stylesheet
- All dependencies loaded via CDN — never bundle third-party CSS

### CSS Custom Properties
Define all colors, fonts, and layout values as variables in `:root`. Never hard-code colors elsewhere.

```css
:root {
  /* Colors — define per project */
  --primary:      #...;
  --primary-dark: #...;
  --accent:       #...;
  --dark:         #1a1a1a;
  --text:         #333333;
  --text-muted:   #777777;
  --white:        #ffffff;
  --bg:           #ffffff;
  --border:       #e0e0e0;

  /* Typography */
  --font-body:    'Inter', sans-serif;
  --font-display: 'Playfair Display', serif;

  /* Layout */
  --container:    1200px;
  --gutter:       40px;
}
```

### Layout Utilities
```css
.container { max-width: var(--container); margin: 0 auto; padding: 0 var(--gutter); }
.section    { padding: 80px 0; }
```

### Responsive — Desktop First
Write base styles for desktop. Override with `max-width` media queries:

| Breakpoint | Target |
|---|---|
| `1440px` | Wide desktop |
| `1024px` | Laptop / large tablet |
| `768px` | Tablet / mobile switch point |
| `480px` | Small mobile |

```css
/* Desktop base styles */
.hero { height: 100vh; }

@media (max-width: 768px) {
  .hero { height: auto; padding: 80px 0; }
}
```

### Section Comments
```css
/* ═══════════════════════════════════════
   COMPONENT OR SECTION NAME
═══════════════════════════════════════ */
```

### Buttons
Always use a base class + modifier pattern:

```html
<a class="btn btn-primary" href="...">Label</a>
<a class="btn btn-outline" href="...">Label</a>
<a class="btn btn-primary btn-lg" href="...">Label</a>
```

Define `.btn`, then color/style modifiers (`btn-primary`, `btn-white`, `btn-outline`, `btn-dark`) and size modifiers (`btn-lg`, `btn-block`).

### Inline Styles
Only for genuinely one-off overrides that will never repeat:
```html
<div style="max-width:600px; margin:0 auto;">
```
If the same style appears more than once, make it a class.

---

## 6. HTML Conventions

### General Rules
- 2-space indentation
- Self-closing void elements: `<img src="" alt="">`, `<input>`, `<br>`, `<hr>`
- All class names in **kebab-case**
- Alt text on every `<img>`
- Section separator comments: `<!-- ── SECTION NAME ── -->`

### Semantic Structure
Use semantic elements — never use `<div>` where a semantic tag fits:

```
<header>   → top of page (logo + nav)
<nav>      → navigation links
<main>     → primary page content
<section>  → thematic content group
<article>  → self-contained content
<aside>    → sidebar / supplementary content
<footer>   → bottom of page
```

### Heading Hierarchy
One `<h1>` per page. Then `<h2>`, `<h3>` in order — never skip levels.

### Standard Page Skeleton
```html
<!-- ── HERO ── -->
<section class="hero">
  <div class="hero-bg">
    <img src="..." alt="...">
  </div>
  <div class="hero-inner">
    <div class="hero-content">
      <h1>Primary Heading</h1>
      <p class="hero-sub">Supporting copy.</p>
      <a href="..." class="btn btn-primary btn-lg">Call to Action</a>
    </div>
  </div>
</section>

<!-- ── CONTENT SECTION ── -->
<section class="section">
  <div class="container">
    ...
  </div>
</section>
```

### Two-Column Layout
```html
<div class="two-col">
  <div class="two-col-text"><!-- text --></div>
  <div class="two-col-img"><img src="..." alt="..."></div>
</div>
<div class="two-col two-col-reverse"><!-- reversed --></div>
```

### Accessibility
- ARIA labels on icon-only interactive elements: `aria-label="Open menu"`
- `role` attributes where semantic HTML isn't sufficient
- Sufficient color contrast (WCAG AA minimum)
- Keyboard-navigable interactive components

---

## 7. JavaScript Conventions

### Rules
- **Vanilla JS only** — no jQuery in new code, no React, no Vue
- **ES5 syntax**: use `var`, not `let`/`const`; use `function() {}`, not arrow functions; no template literals
- **No semicolons** at end of statements
- **Single quotes** for strings
- No build step — JS runs directly in the browser

### File Organization
All JS lives in `assets/js/main.js`. Organize features as IIFEs inside a single `DOMContentLoaded` listener:

```javascript
document.addEventListener('DOMContentLoaded', function() {

  /* ── Mobile Menu ── */
  (function() {
    var toggle = document.querySelector('.nav-toggle')
    if (!toggle) return
    toggle.addEventListener('click', function() {
      document.body.classList.toggle('mobile-open')
    })
  })()

  /* ── Sticky Header ── */
  (function() {
    var header = document.querySelector('.site-header')
    if (!header) return
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 50)
    }, { passive: true })
  })()

})
```

### Patterns
- **Always guard** with `if (!el) return` before doing anything with a selected element
- **Passive scroll listeners** for performance: `{ passive: true }`
- **classList** for state changes — never toggle inline styles for show/hide
- **`var MOBILE_BP = 768`** for breakpoint checks

### DOM Selection
```javascript
var el     = document.getElementById('id')
var el     = document.querySelector('.selector')
var items  = document.querySelectorAll('.selector')
```

### Class Manipulation
```javascript
el.classList.add('active')
el.classList.remove('active')
el.classList.toggle('expanded')
el.classList.toggle('is-visible', condition)  // boolean toggle
```

---

## 8. Shared Includes System

Every project has at minimum these PHP includes:

| File | Purpose | Variables expected |
|---|---|---|
| `includes/header.php` | `<head>`, `<nav>`, topbar | `$page_title`, `$page_description`, `$page_class` |
| `includes/footer.php` | Footer HTML + all CDN/script tags | none |
| `includes/sidebar.php` | Right-rail widgets/CTAs | none (optional) |

Load all external scripts and CDN dependencies **in footer.php only** — never in individual page files.

---

## 9. External Dependencies

Load from CDN. Never install via npm or bundle into the project.

| Purpose | Library |
|---|---|
| Icons | Font Awesome (CDN) |
| Fonts | Google Fonts |
| Legacy jQuery (if needed) | jQuery CDN — load in footer only, write no new jQuery |
| Notifications | Toastr |
| Analytics | Google Tag Manager |
| Ad tracking | Facebook Pixel |
| Accessibility | UserWay |

---

## 10. SEO & Accessibility Checklist

Apply to every page before considering it done:

- [ ] Unique `$page_title` (50–60 chars) and `$page_description` (~155 chars)
- [ ] One `<h1>` per page containing the primary keyword
- [ ] Correct heading hierarchy (h1 → h2 → h3, no skipping)
- [ ] Alt text on every `<img>`
- [ ] ARIA labels on icon-only interactive elements
- [ ] Unique `$page_class` on `<body>`
- [ ] Canonical `<link>` tag if duplicate URLs are possible
- [ ] Image filenames are descriptive and hyphenated (no `IMG_1234.jpg`)
- [ ] No broken links
- [ ] Page loads without JS errors in the console

---

## 11. What NOT to Do

These are hard rules — do not override without explicit user instruction:

- **No CSS frameworks** on main pages (no Bootstrap, no Tailwind, no Bulma)
- **No ES6+** in JavaScript (`let`, `const`, arrow functions, template literals, destructuring, etc.)
- **No jQuery** in new code — use vanilla JS
- **No hard-coded colors** in CSS — use `var(--variable-name)`
- **No bare relative paths** in PHP includes — use `__DIR__` or `$_SERVER['DOCUMENT_ROOT']`
- **No per-page CSS/JS files** — extend the shared `style.css` and `main.js`
- **No build tools** (no webpack, vite, rollup, npm scripts)
- **No committed credentials** — credentials go in `config.php`, excluded from git
- **No large inline `style="..."`** blocks — add a class to `style.css` instead
- **No speculative abstractions** — only build what is actually needed, not what might be needed later
