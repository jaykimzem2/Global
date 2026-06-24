/**
 * Goldstar Global | Master Motion Script
 */

document.addEventListener('DOMContentLoaded', () => {
    
    gsap.registerPlugin(ScrollTrigger);

    // 1. PRELOADER
    const preloaderTL = gsap.timeline({
        onComplete: () => {
            document.body.style.overflow = 'auto';
            initScrollAnimations();
        }
    });

    document.body.style.overflow = 'hidden';

    preloaderTL
        .to('#preloaderLogo', { opacity: 1, filter: 'blur(0px)', duration: 1.5, ease: 'power3.out' })
        .to('#preloaderLogo', { y: -20, opacity: 0, duration: 0.8, ease: 'power3.in', delay: 0.5 })
        .to('#preloader', { yPercent: -100, duration: 1.2, ease: 'expo.inOut' });


    function initScrollAnimations() {
        
        // Navbar scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // GS Reveal
        document.querySelectorAll('.gs-reveal').forEach(el => {
            gsap.to(el, {
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                },
                opacity: 1,
                y: 0,
                duration: 1.4,
                ease: 'power3.out'
            });
        });

        // GS Mask
        document.querySelectorAll('.gs-mask').forEach(mask => {
            gsap.to(mask, {
                scrollTrigger: {
                    trigger: mask,
                    start: 'top 80%',
                },
                clipPath: 'inset(0 0% 0 0)',
                duration: 1.8,
                ease: 'expo.inOut'
            });
        });

        // Hover Parallax on Arched images
        document.querySelectorAll('.hero-arched img').forEach(img => {
            gsap.to(img, {
                scrollTrigger: {
                    trigger: img,
                    scrub: 1,
                },
                y: 40,
                ease: 'none'
            });
        });
    }
});
