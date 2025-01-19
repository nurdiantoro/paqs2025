import lottie from "lottie-web";

(() => {
    const lottieAnimations = [
        { id: "icon-blueprint", path: "/animated-icons/blueprint.json" },
        { id: "icon-golf", path: "/animated-icons/golf.json" },
        { id: "icon-calendar", path: "/animated-icons/calendar.json" },
        { id: "icon-dinner", path: "/animated-icons/dinner.json" },
        { id: "icon-exhibition", path: "/animated-icons/exhibition.json" },
    ];

    lottieAnimations.forEach((animation) => {
        const container = document.getElementById(animation.id);
        if (!container) return;

        const anim = lottie.loadAnimation({
            container,
            renderer: "svg",
            loop: true,
            autoplay: false, // Disable autoplay
            path: animation.path, // Path to JSON file
        });

        // Add hover listeners to parent
        const parent = container.closest(".group");
        if (!parent) return;

        parent.addEventListener("mouseenter", () => anim.play());
        parent.addEventListener("mouseleave", () => anim.stop());
    });
})();
