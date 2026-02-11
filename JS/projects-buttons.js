/**
 * projects-buttons.js
 *
 * Handles project section tab functionality, including main tabs and nested tabs.
 * - Shows/hides project sections based on user interaction.
 * - Maintains accessible tab states using aria attributes.
 * - Supports nested project tabs for more granular content display.
 *
 * Author: Mirnes Glamočić
 * Website: https://mirnesglamocic.com
 * Created: 2023
 * Updated: 2026-02-08
 *
 * Usage:
 * Include this JS file on pages containing the project sections:
 * <script src="/JS/projects-buttons.js"></script>
 */

document.addEventListener("DOMContentLoaded", () => {
  console.log("JS Loaded"); // Simple debug to confirm the script loaded
});

// Select main tabs (top-level project buttons, excluding nested ones)
const mainTabs = document.querySelectorAll(".menu > .project:not(.nested)");

// Select all main target sections that correspond to main tabs
const mainTargets = document.querySelectorAll(".target");

// Select nested tabs (inside nested menus)
const nestedTabs = document.querySelectorAll(".nested-menu .project.nested");

/**
 * Hide all elements in a NodeList
 * @param {NodeList} elements
 */
function hideAll(elements) {
  elements.forEach((el) => (el.style.display = "none"));
}

/**
 * Show a single element
 * @param {HTMLElement} el
 */
function show(el) {
  if (el) el.style.display = "block";
}

/**
 * Set active tab for accessibility
 * @param {NodeList} tabs
 * @param {HTMLElement} activeTab
 */
function setActiveTab(tabs, activeTab) {
  tabs.forEach((tab) => {
    const isActive = tab === activeTab;
    tab.setAttribute("aria-selected", isActive ? "true" : "false");
    tab.tabIndex = isActive ? 0 : -1; // Focusable only if active
  });
}

// Initially hide all main targets
hideAll(mainTargets);

// Show the first main target by default
const firstMainTarget = mainTargets[0];
if (firstMainTarget) {
  show(firstMainTarget);

  // Hide all nested targets inside this main target, then show the first one
  const nestedTargets = firstMainTarget.querySelectorAll(".nested-target");
  hideAll(nestedTargets);
  show(nestedTargets[0]);
}

// Add click event listeners to main tabs
mainTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const targetId = tab.dataset.target;
    if (!targetId) return;

    const targetEl = document.getElementById(targetId);
    if (!targetEl) return;

    // Hide all main targets and show the clicked one
    hideAll(mainTargets);
    show(targetEl);

    // Update accessibility state
    setActiveTab(mainTabs, tab);

    // Handle nested targets inside the new main target
    const nestedTargets = targetEl.querySelectorAll(".nested-target");
    if (nestedTargets.length) {
      hideAll(nestedTargets);
      show(nestedTargets[0]);
    }
  });
});

// Add click event listeners to nested tabs
nestedTabs.forEach((nestedTab) => {
  nestedTab.addEventListener("click", () => {
    const targetId = nestedTab.dataset.target;
    if (!targetId) return;

    // Find the main target containing this nested tab
    const mainTarget = nestedTab.closest(".target");
    if (!mainTarget) return;

    const nestedTarget = document.getElementById(targetId);
    if (!nestedTarget) return;

    // Hide all nested targets and show the clicked one
    const nestedTargets = mainTarget.querySelectorAll(".nested-target");
    hideAll(nestedTargets);
    show(nestedTarget);

    // Update nested tab accessibility state
    const siblingTabs = nestedTab
      .closest(".nested-menu")
      ?.querySelectorAll(".project.nested");
    if (siblingTabs) setActiveTab(siblingTabs, nestedTab);
  });
});

// Optional debug: log clicks on main tabs
document.querySelectorAll(".menu > button.project").forEach((btn) => {
  btn.addEventListener("click", () => {
    console.log("Clicked:", btn.textContent);
  });
});
