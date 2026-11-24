(function () {
    'use strict';

    // Mobile menu
    const mobileModal = document.getElementById('mobile-modal');
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');

    if (menuToggle && mobileModal) {
        menuToggle.addEventListener('click', function () {
            mobileModal.classList.add('open');
        });
    }

    if (menuClose && mobileModal) {
        menuClose.addEventListener('click', function () {
            mobileModal.classList.remove('open');
        });
    }

    if (mobileModal) {
        mobileModal.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileModal.classList.remove('open');
            });
        });
    }

    // Generic expandable cards
    document.querySelectorAll('.modal-card, .term-card, .step-card').forEach(function (card) {
        card.addEventListener('click', function (e) {
            // Don't toggle if clicking a link inside
            if (e.target.closest('a')) return;

            const wasExpanded = this.classList.contains('expanded');
            const groupSelector = this.dataset.group
                ? '[data-group="' + this.dataset.group + '"]'
                : '.' + this.classList[0];

            document.querySelectorAll(groupSelector).forEach(function (c) {
                c.classList.remove('expanded');
            });

            if (!wasExpanded) {
                this.classList.add('expanded');
            }
        });
    });
})();
