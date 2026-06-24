<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Goldstar Global Marketing Company'; ?></title>
    <meta name="description" content="<?php echo isset($metaDesc) ? htmlspecialchars($metaDesc) : 'Goldstar Global Marketing Company — Premium full-service agency orchestrating end-to-end strategic marketing campaigns and high-fidelity event productions for national governments and global enterprises.'; ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                        mono: ['JetBrains Mono', 'ui-monospace', 'monospace'],
                    },
                    colors: {
                        brand: {
                            orange: '#f47c20',
                            gold:   '#f59e0b',
                            dark:   '#121214',
                            darker: '#0a0a0b',
                            light:  '#fbfbfd',
                            gray:   '#f4f4f7',
                        }
                    },
                    animation: {
                        'spin-slow': 'spin 8s linear infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'float':     'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%':       { transform: 'translateY(-12px)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- GSAP + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Global Styles -->
    <style>
        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #121214; }
        ::-webkit-scrollbar-thumb { background: #333336; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #f47c20; }

        /* ── SELECTION ── */
        ::selection { background: #f47c20; color: #fff; }

        /* ── MESH BG ── */
        .mesh-bg {
            background-color: #121214;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(244,124,32,0.15) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(245,158,11,0.10) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(0,0,0,0.8) 0%, #0a0a0b 100%);
        }

        /* ── PREMIUM GLOW ── */
        .premium-glow { box-shadow: 0 0 40px -10px rgba(244,124,32,0.3); }

        /* ── GRID OVERLAY ── */
        .grid-overlay {
            background-image:
                linear-gradient(to right, rgba(255,255,255,0.015) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.015) 1px, transparent 1px);
            background-size: 3.5rem 3.5rem;
        }

        /* ── GSAP REVEAL HELPERS ── */
        .gsap-hidden { opacity: 0; }

        /* ── SECTION DIVIDER ── */
        .section-divider { transform-origin: left; }

        /* ── MASK REVEAL ── */
        .img-mask-wrap { overflow: hidden; }
        .img-mask-wrap img { transform-origin: center; }

        /* ── COUNTER GRADIENT TEXT ── */
        .counter-text {
            background: linear-gradient(135deg, #fff 30%, #f47c20 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── MOBILE MENU ── */
        #mobile-overlay {
            clip-path: circle(0% at 90% 10%);
            transition: none;
        }

        /* ── HERO TOGGLE ── */
        .toggle-pill {
            position: relative;
            width: 6.5rem; height: 2.75rem;
            background: #2a2a2e;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 100px;
            cursor: pointer;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.4);
        }
        .toggle-thumb {
            position: absolute;
            top: 4px; left: 4px;
            width: 2.2rem; height: calc(100% - 8px);
            background: linear-gradient(135deg, #f47c20, #f59e0b);
            border-radius: 100px;
            transition: left 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex; align-items: center; justify-content: center;
        }
        .toggle-pill.events .toggle-thumb { left: calc(100% - 2.2rem - 4px); }

        /* ── WAVEFORM BAR ── */
        .wave-bar { border-radius: 100px; transition: height 0.5s ease, background-color 0.5s ease; }

        /* ── CARD HOVER FLARE ── */
        .card-flare {
            position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 40%; height: 1px;
            background: linear-gradient(to right, transparent, rgba(244,124,32,0.4), transparent);
            opacity: 0; transition: opacity 0.6s;
        }
        .capability-card:hover .card-flare { opacity: 1; }

        /* ── CAPABILITY CARD DETAIL PANEL ── */
        .detail-panel { max-height: 0; opacity: 0; overflow: hidden; transition: max-height 0.5s ease, opacity 0.5s ease, padding 0.3s ease; }
        .detail-panel.open { max-height: 400px; opacity: 1; padding-top: 1rem; margin-top: 0.5rem; border-top: 1px solid rgba(255,255,255,0.05); }

        /* ── PING ANIMATION ── */
        @keyframes ping { 75%, 100% { transform: scale(2); opacity: 0; } }
        .animate-ping { animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite; }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
        .animate-pulse { animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
        @keyframes bounce { 0%, 100% { transform: translateY(-25%); animation-timing-function: cubic-bezier(0.8,0,1,1); } 50% { transform: translateY(0); animation-timing-function: cubic-bezier(0,0,0.2,1); } }
        .animate-bounce { animation: bounce 1s infinite; }

        /* ── TESTIMONIAL SLIDER ── */
        #testimonial-card { transition: opacity 0.3s, transform 0.3s; }

        /* form focus */
        .form-input:focus { border-color: #f47c20; outline: none; }

        /* back to top */
        #back-to-top { transition: all 0.3s; }
        #back-to-top:hover { background-color: #f47c20; color: #fff; transform: translateY(-4px); }
    </style>
</head>
<body class="bg-brand-light text-brand-dark font-sans overflow-x-hidden">

<!-- ── PRELOADER ── -->
<div id="preloader" class="fixed inset-0 z-[9999] bg-brand-darker flex items-center justify-center">
    <div class="text-center">
        <img src="assets/Goldstar Load logo.png" alt="Goldstar" id="preloader-logo" class="h-32 mx-auto mb-4 opacity-0">
        <div class="w-32 h-0.5 bg-white/10 mx-auto rounded-full overflow-hidden">
            <div id="preloader-bar" class="h-full bg-brand-orange rounded-full" style="width:0%"></div>
        </div>
    </div>
</div>

<!-- ── NAVBAR ── -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 py-6">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between">

        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2.5 group cursor-pointer" id="nav-logo">
            <img src="assets/Goldstar Logo.png" alt="Goldstar Global" class="h-14 w-auto object-contain transition-all duration-500 group-hover:scale-105">
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-1.5 bg-white/5 border border-white/10 px-2 py-1.5 rounded-full backdrop-blur-md" id="nav-links">
            <a href="index.php" class="nav-link px-4 py-1.5 text-xs text-white/60 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5 font-sans">Home</a>
            <a href="about.php" class="nav-link px-4 py-1.5 text-xs text-white/60 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5 font-sans">About</a>
            <a href="services.php" class="nav-link px-4 py-1.5 text-xs text-white/60 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5 font-sans">Services</a>
            <a href="marketing.php" class="nav-link px-4 py-1.5 text-xs text-white/60 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5 font-sans">Marketing</a>
            <a href="events.php" class="nav-link px-4 py-1.5 text-xs text-white/60 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5 font-sans">Events</a>
        </div>

        <!-- CTA -->
        <a href="contact.php" class="hidden md:flex items-center gap-1.5 bg-brand-orange hover:bg-brand-orange/90 text-white text-xs font-semibold px-5 py-2.5 rounded-full tracking-wider transition-all duration-300 shadow-[0_4px_20px_rgba(244,124,32,0.3)] hover:shadow-[0_4px_25px_rgba(244,124,32,0.5)] hover:-translate-y-0.5 font-sans" id="nav-cta">
            Let's Connect
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>

        <!-- Mobile Hamburger -->
        <button id="hamburger" class="md:hidden text-white p-2 focus:outline-none" aria-label="Menu">
            <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
</nav>

<!-- ── MOBILE OVERLAY ── -->
<div id="mobile-overlay" class="fixed inset-0 bg-brand-darker z-40 md:hidden flex flex-col justify-center px-8 pointer-events-none">
    <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-brand-orange/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-brand-gold/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div id="mobile-links" class="flex flex-col gap-6 text-left relative z-10">
        <p class="text-xs font-mono tracking-[0.2em] text-brand-orange uppercase mb-2">Navigation Menu</p>
        <?php
        $navItems = [
            ['Home',      'index.php',    '01'],
            ['About',     'about.php',    '02'],
            ['Services',  'services.php', '03'],
            ['Marketing', 'marketing.php','04'],
            ['Events',    'events.php',   '05'],
            ['Contact',   'contact.php',  '06'],
        ];
        foreach ($navItems as $item):
        ?>
        <a href="<?= $item[1] ?>" class="text-3xl font-display font-bold text-white hover:text-brand-orange transition-all duration-300 flex items-center justify-between group border-b border-white/5 pb-3">
            <span><?= $item[0] ?></span>
            <span class="text-xs font-mono text-white/30 group-hover:text-brand-orange transition-colors"><?= $item[2] ?></span>
        </a>
        <?php endforeach; ?>
        <div class="mt-8 pt-8 border-t border-white/10">
            <p class="text-xs text-white/30 font-mono">GOLDSTAR GLOBAL MARKETING © <?= date('Y') ?></p>
        </div>
    </div>
</div>

<script>
// ── PRELOADER ──
(function() {
    const preloader = document.getElementById('preloader');
    const logo      = document.getElementById('preloader-logo');
    const bar       = document.getElementById('preloader-bar');
    
    // Spinning roll in effect
    gsap.fromTo(logo, 
        { opacity: 0, x: -100, rotation: -720, scale: 0.5 }, 
        { opacity: 1, x: 0, rotation: 0, scale: 1, duration: 1.5, ease: 'back.out(1.7)', delay: 0.2 }
    );
    
    // Increased duration for the load bar
    gsap.to(bar, { width: '100%', duration: 2.5, ease: 'power2.inOut', delay: 0.3,
        onComplete: () => {
            gsap.to(preloader, { opacity: 0, duration: 0.8, delay: 0.2,
                onComplete: () => { preloader.style.display = 'none'; }
            });
        }
    });
})();

// ── NAVBAR SCROLL ──
(function() {
    const nav = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            nav.classList.add('py-3', 'bg-brand-darker/80', 'backdrop-blur-xl', 'border-b', 'border-white/5', 'shadow-lg');
            nav.classList.remove('py-6');
        } else {
            nav.classList.remove('py-3', 'bg-brand-darker/80', 'backdrop-blur-xl', 'border-b', 'border-white/5', 'shadow-lg');
            nav.classList.add('py-6');
        }
    });

    // Active link highlight
    const currentPath = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('text-white', 'bg-white/5');
            link.classList.remove('text-white/60');
        }
    });
})();

// ── MOBILE MENU ──
(function() {
    const btn     = document.getElementById('hamburger');
    const overlay = document.getElementById('mobile-overlay');
    const iconO   = document.getElementById('icon-open');
    const iconC   = document.getElementById('icon-close');
    let open      = false;

    btn.addEventListener('click', () => {
        open = !open;
        if (open) {
            overlay.style.pointerEvents = 'auto';
            document.body.style.overflow = 'hidden';
            iconO.classList.add('hidden');
            iconC.classList.remove('hidden');
            gsap.to(overlay, {
                clipPath: 'circle(150% at 90% 10%)', opacity: 1, duration: 0.8, ease: 'power3.out'
            });
            gsap.fromTo('#mobile-links > *',
                { y: 30, opacity: 0 },
                { y: 0, opacity: 1, stagger: 0.08, duration: 0.5, ease: 'back.out(1.7)', delay: 0.3 }
            );
        } else {
            document.body.style.overflow = '';
            iconO.classList.remove('hidden');
            iconC.classList.add('hidden');
            gsap.to(overlay, {
                clipPath: 'circle(0% at 90% 10%)', opacity: 0, duration: 0.6, ease: 'power3.in',
                onComplete: () => { overlay.style.pointerEvents = 'none'; }
            });
        }
    });
})();
</script>
