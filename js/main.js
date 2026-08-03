/* Omeka Digital — shared site behaviour */

// Tailwind CDN config — must run after the Tailwind CDN script tag.
tailwind.config = {
  theme: {
    extend: {
      colors: {
        navy: '#0B1230',
        'navy-soft': '#131B45',
        primary: '#0057FF',
        'primary-dark': '#0041C4',
        accent: '#FF6600',
        'accent-dark': '#E05500',
        ink: '#10132B',
        slate: '#5B6072',
        surface: '#F7F8FC',
        'surface-alt': '#EEF2FF',
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        display: ['Space Grotesk', 'Inter', 'sans-serif'],
        mono: ['JetBrains Mono', 'Menlo', 'monospace'],
      },
    },
  },
};

document.addEventListener('DOMContentLoaded', () => {
  /* Mobile menu toggle */
  const menuBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIconOpen = document.getElementById('icon-open');
  const menuIconClose = document.getElementById('icon-close');

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('open');
      menuBtn.setAttribute('aria-expanded', String(isOpen));
      if (menuIconOpen && menuIconClose) {
        menuIconOpen.classList.toggle('hidden', isOpen);
        menuIconClose.classList.toggle('hidden', !isOpen);
      }
    });

    // Close mobile menu after tapping a link
    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        menuBtn.setAttribute('aria-expanded', 'false');
        if (menuIconOpen && menuIconClose) {
          menuIconOpen.classList.remove('hidden');
          menuIconClose.classList.add('hidden');
        }
      });
    });
  }

  /* Highlight current page in nav */
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-link').forEach((link) => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('is-active');
    }
  });

  /* Scroll reveal */
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );
    revealEls.forEach((el) => observer.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('is-visible'));
  }
});
