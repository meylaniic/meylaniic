// Mobile navbar toggle
const menuBtn = document.getElementById('menu-btn');
const menu = document.getElementById('nav-menu');

menuBtn?.addEventListener('click', () => {
    const open = menu.classList.toggle('hidden') === false;
    menuBtn.setAttribute('aria-expanded', String(open));
});

menu?.querySelectorAll('a').forEach((link) =>
    link.addEventListener('click', () => menu.classList.add('hidden'))
);

// Scroll reveal
const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.12 }
);

document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

// Lightbox
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');

document.querySelectorAll('[data-lightbox]').forEach((el) => {
    el.addEventListener('click', () => {
        lightboxImg.src = el.dataset.lightbox;
        lightboxImg.alt = el.dataset.caption ?? '';
        lightboxCaption.textContent = el.dataset.caption ?? '';
        lightbox.classList.remove('hidden-box');
        lightbox.classList.remove('invisible');
        document.body.style.overflow = 'hidden';
    });
});

const closeLightbox = () => {
    lightbox.classList.add('hidden-box');
    document.body.style.overflow = '';
};

lightbox?.addEventListener('click', (e) => {
    if (e.target === lightbox || e.target.id === 'lightbox-close') closeLightbox();
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
});

// Back to top
const backToTop = document.getElementById('back-to-top');

window.addEventListener(
    'scroll',
    () => {
        backToTop?.classList.toggle('is-hidden', window.scrollY < 600);
    },
    { passive: true }
);

backToTop?.addEventListener('click', () =>
    window.scrollTo({ top: 0, behavior: 'smooth' })
);
