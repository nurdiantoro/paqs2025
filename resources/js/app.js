import lottie from 'lottie-web';

const lottieAnimations = [
    { id: 'icon-blueprint', path: '/animated-icons/blueprint.json' },
    { id: 'icon-golf', path: '/animated-icons/golf.json' },
    { id: 'icon-calendar', path: '/animated-icons/calendar.json' },
    { id: 'icon-dinner', path: '/animated-icons/dinner.json' },
    { id: 'icon-exhibition', path: '/animated-icons/exhibition.json' },
];

// Initialize Lottie animations
lottieAnimations.forEach(animation => {
    const container = document.getElementById(animation.id);

    // Load animation
    const anim = lottie.loadAnimation({
        container,
        renderer: 'svg',
        loop: true,
        autoplay: false, // Disable autoplay
        path: animation.path, // Path to JSON file
    });

    // Add hover listeners to the parent
    const parent = container.closest('.group');

    parent.addEventListener('mouseenter', () => {
        anim.play(); // Start animation on hover
    });

    parent.addEventListener('mouseleave', () => {
        anim.stop(); // Stop animation when hover ends
    });
});
