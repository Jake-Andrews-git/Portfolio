/**
 * Smooth scrolling + active nav handling.
 */
(function () {
    const navLinks = document.querySelectorAll('.navbar .nav-link');

    function getSections() {
        return Array.from(navLinks)
            .map((link) => document.querySelector(link.getAttribute('href')))
            .filter(Boolean);
    }

    const sections = getSections();

    function handleScroll() {
        const scrollPosition = window.scrollY + 120;

        sections.forEach((section, index) => {
            const fromTop = section.offsetTop;
            const height = section.offsetHeight;
            const isActive = scrollPosition >= fromTop && scrollPosition < fromTop + height;

            navLinks[index].classList.toggle('active', isActive);
        });
    }

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                event.preventDefault();
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    window.addEventListener('scroll', handleScroll, { passive: true });
    window.addEventListener('load', handleScroll);
    handleScroll();
})();

