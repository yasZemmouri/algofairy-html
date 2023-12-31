# UI Library Documentation

## Introduction
This UI library serves as a centralized repository for reusable components aimed at streamlining the development of consistent and cohesive user interfaces across our projects.

## Goals and Objectives
- **Reusability:** Promote the use of standardized UI components across projects for enhanced efficiency.
- **Efficiency:** Accelerate development by offering pre-built and tested UI elements.

## Library Functionality
### Component Scope
- Encompasses various components like buttons, cards, forms, etc.
- Each component is tailored for easy integration and customization.

## How it Works
### Component Structure
- Components are organized in folders, each containing SCSS and PHP templates.
- SCSS files adhere to a structured naming convention for easy identification and modification.
- View components via the showcase.php file: [http://localhost/algofairy-html/src/assets/ui-library/showcase.php](http://localhost/algofairy-html/src/assets/ui-library/showcase.php)

## Implementation Guidelines
### Integration Instructions
1. **Explore Components:** Use showcase.php to visualize components categorized by folder names.
2. **Include PHP Components:** Copy the PHP file from the desired folder to `src/includes` and include it in the respective page.
3. **Add SCSS Files:** Copy the SCSS file into `src/assets/scss` and import it into `main.scss`.
4. **Customization:** Modify variables or mixins for component styling if needed.
5. **Updating Library Components:** When adding a new component, use the command `sass _style.scss style.css` to generate the new CSS. The leading underscore (_) ignores the file by the live Sass compiler, preventing its copying to `dist/assets/css`.

### Code Examples
#### Button Component Integration
```scss
// Import button component SCSS
@import 'path/to/button/_button'; // Update with the correct path

// Your custom styles or overrides
...

// HTML implementation
<button class="button">Click Me</button> // Implement your button markup here
