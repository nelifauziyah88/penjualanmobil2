document.addEventListener("DOMContentLoaded", () => {
    const revealElements = document.querySelectorAll(".reveal, .reveal-left");
    const revealOnScroll = () => {
        const windowHeight = window.innerHeight;
        revealElements.forEach((el) => {
            const elementTop = el.getBoundingClientRect().top;
            if (elementTop < windowHeight - 100) {
                el.classList.add("active");
            }
        });
    };
    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();
});
