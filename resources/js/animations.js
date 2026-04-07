import { gsap } from 'gsap';

// ─── Mobile Nav ───────────────────────────────────────────────────────────────

document.addEventListener('DOMContentLoaded', () => {

    const toggle    = document.getElementById('mobile-menu-toggle');
    const menu      = document.getElementById('mobile-menu');
    const iconOpen  = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');
    const mediaQuery = window.matchMedia('(min-width: 768px)');

    if (toggle && menu) {
        let isOpen = false;

        // Reset menu to closed state (clears GSAP inline styles so md:hidden takes over)
        const resetMenu = () => {
            isOpen = false;
            gsap.killTweensOf(menu);
            gsap.set(menu, { clearProps: 'all' });
            menu.style.display = '';          // let CSS / Tailwind decide
            toggle.setAttribute('aria-expanded', 'false');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        };

        // Handle breakpoint crossings
        mediaQuery.addEventListener('change', (e) => {
            if (e.matches) {
                // Desktop: clear GSAP inline styles so md:hidden CSS takes over
                resetMenu();
            } else {
                // Back to mobile: explicitly hide so the menu stays closed until toggled
                isOpen = false;
                gsap.killTweensOf(menu);
                gsap.set(menu, { display: 'none', opacity: 0, y: -12, height: 0, overflow: 'hidden' });
                toggle.setAttribute('aria-expanded', 'false');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });

        toggle.addEventListener('click', () => {
            isOpen = !isOpen;

            toggle.setAttribute('aria-expanded', String(isOpen));
            iconOpen.classList.toggle('hidden', isOpen);
            iconClose.classList.toggle('hidden', !isOpen);

            if (isOpen) {
                gsap.set(menu, { display: 'block' });
                gsap.fromTo(
                    menu,
                    { opacity: 0, y: -12, height: 0 },
                    {
                        opacity: 1,
                        y: 0,
                        height: 'auto',
                        duration: 0.35,
                        ease: 'power2.out',
                    }
                );

                gsap.fromTo(
                    '#mobile-menu a, #mobile-menu hr',
                    { opacity: 0, x: -16 },
                    {
                        opacity: 1,
                        x: 0,
                        duration: 0.25,
                        ease: 'power2.out',
                        stagger: 0.06,
                        delay: 0.1,
                    }
                );
            } else {
                gsap.to(menu, {
                    opacity: 0,
                    y: -12,
                    height: 0,
                    duration: 0.25,
                    ease: 'power2.in',
                    onComplete: () => { gsap.set(menu, { display: 'none' }); },
                });
            }
        });
    }

    // ─── Desktop Nav: page-load slide-in ──────────────────────────────────────
    const nav = document.querySelector('nav');
    if (nav && mediaQuery.matches) {
        gsap.fromTo(
            nav,
            { opacity: 0, y: -64 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: 'power2.out',
                onComplete: () => { gsap.set(nav, { clearProps: 'all' }); },
            }
        );
    }

}); // DOMContentLoaded
