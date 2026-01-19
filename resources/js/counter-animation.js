// Counter Animation
function initCounterAnimation() {
    const counters = document.querySelectorAll('[data-counter]');
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                animateCounter(entry.target);
                entry.target.classList.add('counted');
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
}

function animateCounter(element) {
    const end = parseInt(element.getAttribute('data-end'));
    const suffix = element.getAttribute('data-suffix') || '';
    const duration = parseInt(element.getAttribute('data-duration')) || 2000;
    const start = 0;
    const increment = end / (duration / 16);
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= end) {
            current = end;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current).toLocaleString() + suffix;
    }, 16);
}

// Initialize on DOM load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCounterAnimation);
} else {
    initCounterAnimation();
}
