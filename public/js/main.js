/**
 * Smooth scrolling + active nav handling.
 */
(function () {
    const navLinks = document.querySelectorAll('.navbar .nav-link');
    const themeToggle = document.querySelector('[data-theme-toggle]');
    const themeToggleLabel = document.querySelector('[data-theme-toggle-label]');
    const storedTheme = getStoredTheme();
    const preferredTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

    function getStoredTheme() {
        try {
            return localStorage.getItem('portfolio-theme');
        } catch (error) {
            return null;
        }
    }

    function storeTheme(theme) {
        try {
            localStorage.setItem('portfolio-theme', theme);
        } catch (error) {
            return;
        }
    }

    function applyTheme(theme) {
        const nextTheme = theme === 'dark' ? 'dark' : 'light';

        document.documentElement.dataset.theme = nextTheme;

        if (themeToggle) {
            const isDark = nextTheme === 'dark';
            themeToggle.setAttribute('aria-pressed', String(isDark));
            themeToggle.setAttribute('aria-label', isDark ? 'Switch to light theme' : 'Switch to dark theme');
        }

        if (themeToggleLabel) {
            themeToggleLabel.textContent = nextTheme === 'dark' ? 'Light' : 'Dark';
        }
    }

    applyTheme(storedTheme || preferredTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.dataset.theme === 'dark' ? 'dark' : 'light';
            const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

            storeTheme(nextTheme);
            applyTheme(nextTheme);
        });
    }

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

