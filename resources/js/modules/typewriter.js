import Typewriter from "typewriter-effect/dist/core";

(() => {
    const app = document.getElementById("theme");

    if (!app) return; // Exit if no element with ID 'theme'

    const typewriter = new Typewriter(app, {
        loop: false,
    });

    typewriter
        .typeString(
            "HARNESSING AI AND DIGITAL TECHNOLOGY FOR SMART CONSTRUCTION TOWARDS NET ZERO, DECARBONIZING AND INNOVATIVE BUILDING MATERIALS"
        )
        .pauseFor(30000)
        .start();
})();
