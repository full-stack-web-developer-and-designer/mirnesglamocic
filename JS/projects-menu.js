document.addEventListener('DOMContentLoaded', () => {
    console.log('JS Loaded');

 
});

    // -----------------------------
    // ELEMENTS
    // -----------------------------
    const mainTabs = document.querySelectorAll('.menu > .project:not(.nested)');
    const mainTargets = document.querySelectorAll('.target');

    const nestedTabs = document.querySelectorAll('.nested-menu .project.nested');

    // -----------------------------
    // HELPERS
    // -----------------------------
    function hideAll(elements) {
        elements.forEach(el => el.style.display = 'none');
    }

    function show(el) {
        if (el) el.style.display = 'block';
    }

    function setActiveTab(tabs, activeTab) {
        tabs.forEach(tab => {
            const isActive = tab === activeTab;
            tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
            tab.tabIndex = isActive ? 0 : -1;
        });
    }

    // -----------------------------
    // INITIAL STATE
    // -----------------------------
    // Show first MAIN target
    hideAll(mainTargets);
    const firstMainTarget = mainTargets[0];
    show(firstMainTarget);

    // Show first NESTED target inside first main target
    if (firstMainTarget) {
        const nestedTargets = firstMainTarget.querySelectorAll('.nested-target');
        hideAll(nestedTargets);
        show(nestedTargets[0]);
    }

    // -----------------------------
    // MAIN TAB CLICK
    // -----------------------------
    mainTabs.forEach(tab => {
        tab.addEventListener('click', () => {

            const targetId = tab.dataset.target;
            if (!targetId) return;

            const target = document.getElementById(targetId);
            if (!target) return;

            // Hide all main targets
            hideAll(mainTargets);

            // Show selected main target
            show(target);

            // Update tab state
            setActiveTab(mainTabs, tab);

            // Reset nested targets inside this main target
            const nestedTargets = target.querySelectorAll('.nested-target');
            if (nestedTargets.length) {
                hideAll(nestedTargets);
                show(nestedTargets[0]);
            }
        });
    });

    // -----------------------------
    // NESTED TAB CLICK
    // -----------------------------
    nestedTabs.forEach(tab => {
        tab.addEventListener('click', () => {

            const targetId = tab.dataset.target;
            if (!targetId) return;

            const parent = tab.closest('.target');
            if (!parent) return;

            const nestedTarget = document.getElementById(targetId);
            if (!nestedTarget) return;

            // Hide all nested targets in this parent
            const nestedTargets = parent.querySelectorAll('.nested-target');
            hideAll(nestedTargets);

            // Show selected nested target
            show(nestedTarget);

            // Update nested tab state
            const siblingTabs = tab.closest('.nested-menu')?.querySelectorAll('.project.nested');
            if (siblingTabs) {
                setActiveTab(siblingTabs, tab);
            }
        });
    });

   document.querySelectorAll('.menu > button.project').forEach(btn => {
        btn.addEventListener('click', () => {
            console.log('Clicked:', btn.textContent);
        });
    });
