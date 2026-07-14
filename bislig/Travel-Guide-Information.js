document.addEventListener('DOMContentLoaded', function () {

    // =========================
    // Animated Statistics
    // =========================
    const statNumbers = document.querySelectorAll('.stat-number');

    const animateNumber = (element, target, suffix = '') => {
        let current = 0;
        const increment = target / 50;

        const timer = setInterval(() => {
            current += increment;

            if (current >= target) {
                element.textContent = target + suffix;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + suffix;
            }
        }, 20);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                const element = entry.target;

                const target = parseInt(element.dataset.target);
                const suffix = element.dataset.suffix || '';

                if (!element.classList.contains('animated')) {
                    element.classList.add('animated');

                    animateNumber(element, target, suffix);
                }
            }
        });
    }, {
        threshold: 0.5
    });

    statNumbers.forEach(stat => {

        const originalText = stat.textContent.trim();

        // Extract number only
        const target = parseInt(originalText);

        // Detect "+" suffix
        const suffix = originalText.includes('+') ? '+' : '';

        stat.dataset.target = target;
        stat.dataset.suffix = suffix;

        // Start from zero
        stat.textContent = '0' + suffix;

        observer.observe(stat);
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener('click', function (e) {

            const href = this.getAttribute('href');

            // Ignore modal links
            if (href.includes('booking-modal')) {
                return;
            }

            const target = document.querySelector(href);

            if (target) {
                e.preventDefault();

                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    console.log('Travel Guide Interactive Features Loaded');
});