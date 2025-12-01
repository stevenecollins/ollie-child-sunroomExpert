# Project Overview

This repository is a **WordPress block theme child** built to run on **Local (Flywheel)**.

Parent theme: **Ollie**
Child theme: **Ollie Child** (`ollie-child`)

The goal of this child theme is:

- To customize the design and structure of the parent Ollie block theme
- To serve as a reusable template for future WordPress block theme projects
- To be easy to move from Local to a live WordPress host

---

## Tech Stack

- WordPress block theme
- PHP for theme setup and basic functions (`functions.php`)
- Block theme templates and parts (`.html`)
- Block patterns and styles (`patterns/`, `styles/`)
- `theme.json` for global styles and settings
- Optional assets:
  - CSS in `assets/css/`
  - JavaScript in `assets/js/`
  - Theme images in `assets/images/`

---

## Folder Structure

Project root (`ollie-child/`):

- `functions.php` — child theme setup (enqueue styles, etc.)
- `style.css` — theme header + basic child CSS
- `theme.json` — block theme configuration and global styles
- `templates/` — full-page templates (e.g. `single.html`, `page.html`, `archive.html`)
- `parts/` — reusable template parts (e.g. `header.html`, `footer.html`)
- `patterns/` — block patterns (reusable block-based layouts)
- `styles/` — style variations extending `theme.json`
- `assets/css/` — additional stylesheets
- `assets/js/` — scripts for this theme
- `assets/images/` — theme images and icons
- `.editorconfig` — formatting rules (4 spaces for PHP, 2 spaces for JSON/CSS/JS)
- `.gitignore` — ignore node_modules, vendor, logs, etc.
- `claude.md` — this file (project guide for Claude)

---

## Coding & Style Conventions

- **PHP**

  - Follow WordPress coding standards where reasonable.
  - Use 4 spaces for indentation.
  - Prefer WordPress functions and APIs over custom helpers when possible.
  - Use clear, descriptive function names (e.g. `ollie_child_register_blocks()`).

- **Block Templates & Parts (`.html`)**

  - Use valid block markup that WordPress understands.
  - Keep templates focused on structure; move design into `theme.json` and patterns where possible.
  - Use template parts (in `parts/`) to avoid repetition of headers, footers, etc.

- **Global Styles (`theme.json`)**

  - Use `theme.json` for:
    - Colors, typography, spacing, borders, radii, etc.
    - Enabling/disabling editor features (appearance tools, spacing controls, etc.).
  - Avoid hard-coding styles directly in template HTML if they can live in `theme.json`.

- **Patterns**
  - Use `patterns/` for reusable block layouts (hero sections, feature grids, CTAs, etc.).
  - Give patterns clear names and descriptions that make sense inside the WordPress editor.

---

## How Claude Should Help

When I ask for help in this project, you should:

1. **Respect the existing structure**

   - Place new templates in `templates/`.
   - Place new parts in `parts/`.
   - Place new block patterns in `patterns/`.
   - Place additional CSS/JS in `assets/css/` and `assets/js/`.

2. **Use block theme best practices**

   - Prefer `theme.json` for global style changes.
   - Use template parts instead of repeating header/footer markup.
   - Keep PHP in `functions.php` focused on theme setup and WordPress hooks.

3. **Explain changes briefly**

   - When suggesting new code, explain:
     - Where the file should live
     - How WordPress will use it
     - Any hooks, filters, or template hierarchy rules involved

4. **Prioritize clarity and maintainability**
   - Use readable names and clear comments where helpful.
   - Assume this theme may be reused as a starting point for future projects.

---

## Environment Notes

- This theme runs in **Local (Flywheel)** during development.
- It should be easy to move to production by:
  - Exporting the site from Local
  - Deploying the theme folder (`ollie-child/`) to a live WordPress install.

If you need to infer details, favor typical WordPress block theme patterns and modern best practices.
