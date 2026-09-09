import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Global WhatsApp Click Tracker
window.openWhatsApp = function (targetUrl, productId = null) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    if (csrfToken) {
        const payload = {
            product_id: productId,
            source_page: window.location.pathname,
        };

        fetch('/whatsapp-click/' + (productId ? productId : ''), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: JSON.stringify(payload),
        }).catch(err => {
            console.error('Failed to log WhatsApp click:', err);
        });
    }

    // Open WhatsApp link immediately in new tab
    window.open(targetUrl, '_blank', 'noopener,noreferrer');
};

// Smooth scroll for in-page hash links without jittering the global window scroll
document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', function (e) {
        const anchor = e.target.closest('a[href^="#"]');
        if (anchor) {
            const href = anchor.getAttribute('href');
            if (href && href.length > 1 && !href.startsWith('#!')) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                    if (history.pushState) {
                        history.pushState(null, '', href);
                    }
                }
            }
        }
    });
});

Alpine.start();
