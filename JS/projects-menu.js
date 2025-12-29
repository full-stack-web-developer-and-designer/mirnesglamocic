document.addEventListener('DOMContentLoaded', () => {

    const mainTabs = document.querySelectorAll('.menu > .project:not(.nested)');
    const mainTargets = document.querySelectorAll('.target');

    const nestedTabs = document.querySelectorAll('.nested-menu .project.nested');

    // -----------------------------
    // Show initial state
    // -----------------------------
    mainTargets.forEach((target, idx) => {
        if (idx === 0) {
            target.style.display = 'block'; // show Websites on load
            target.querySelectorAll('.nested-target').forEach(n => {
                n.style.display = (n.id === 'websites') ? 'block' : 'none';
            });
        } else {
            target.style.display = 'none';
        }
    });

    // -----------------------------
    // MAIN TAB CLICK
    // -----------------------------
  mainTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.dataset.target;
            if (!targetId) return;
            // hide all main targets
            mainTargets.forEach(t => t.style.display = 'none');

            // show selected main target
            const target = document.getElementById(targetId);
            if (target) {
                target.style.display = 'block';
                // reset nested targets: show #websites only for websites tab
                target.querySelectorAll('.nested-target').forEach(n => {
                    n.style.display = (n.id === 'websites') ? 'block' : 'none';
                });
            }
        });
    });

    // -----------------------------
    // NESTED TAB CLICK
    // -----------------------------
    nestedTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const parent = tab.closest('.target');
            if (!parent) return;

            const targetId = tab.dataset.target;
            if (!targetId) return;
            // hide all nested targets inside parent
            parent.querySelectorAll('.nested-target').forEach(n => n.style.display = 'none');

            // show selected nested target
            const nestedTarget = document.getElementById(targetId);
            if (nestedTarget) nestedTarget.style.display = 'block';
        });
    });
});
