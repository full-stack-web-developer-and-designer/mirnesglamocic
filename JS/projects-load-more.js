document.addEventListener("DOMContentLoaded", () => {
    const PROJECTS_PER_LOAD = 4;

    document.querySelectorAll(".nested-target").forEach(section => {
        const projects = section.querySelectorAll(".case-study");
        const button = section.querySelector(".load-more");

        if (!button || projects.length <= PROJECTS_PER_LOAD) {
            if (button) button.style.display = "none";
            return;
        }

        const btnText = button.querySelector(".btn-text");

        btnText.textContent = `Load ${PROJECTS_PER_LOAD} more`;

        // Hide extra projects
        projects.forEach((project, index) => {
            if (index >= PROJECTS_PER_LOAD) {
                project.classList.add("is-hidden");
            }
        });

        let visibleCount = PROJECTS_PER_LOAD;

        button.addEventListener("click", () => {
            // 👉 show spinner
            button.classList.add("is-loading");

            // tiny delay = nicer UX (feels intentional)
            setTimeout(() => {
                const remaining = projects.length - visibleCount;
                const loadCount = Math.min(PROJECTS_PER_LOAD, remaining);
                const next = visibleCount + loadCount;

                projects.forEach((project, index) => {
                    if (index < next && project.classList.contains("is-hidden")) {
                        project.classList.remove("is-hidden");
                        project.classList.add("fade-in");
                    }
                });

                visibleCount = next;

                // hide spinner
                button.classList.remove("is-loading");

                if (visibleCount >= projects.length) {
                    button.style.display = "none";
                } else {
                    btnText.textContent = `Load ${Math.min(PROJECTS_PER_LOAD, projects.length - visibleCount)} more`;
                }
            }, 300);
        });
    });
});
