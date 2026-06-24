<?php
$title    = "Goldstar Global Marketing | Premium Strategic Agency";
$metaDesc = "Goldstar Global Marketing Company — Amplified reach through strategic marketing, experiential event production, and brand development for governments and global enterprises.";
include 'components/header.php';
?>

<!-- ════════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════════ -->
<section id="hero" class="pt-24 pb-12 px-4 md:px-8 bg-brand-light">
    <div id="hero-container" class="max-w-7xl mx-auto mesh-bg rounded-[2.5rem] md:rounded-[3.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl border border-white/5 opacity-0">

        <!-- Decorative grid overlay -->
        <div class="absolute inset-0 grid-overlay pointer-events-none"></div>

        <!-- Ambient glow -->
        <div id="hero-glow" class="absolute top-0 right-0 w-96 h-96 rounded-full blur-[120px] bg-brand-orange/20 pointer-events-none transition-colors duration-1000"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center relative z-10">

            <!-- Left: Text -->
            <div class="lg:col-span-7 flex flex-col justify-center text-left">

                <!-- Live badge -->
                <div class="flex items-center gap-2 mb-6">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-orange opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-orange"></span>
                    </span>
                    <span class="text-xs font-mono text-white/40 tracking-[0.25em] uppercase flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-brand-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279L12 18.896l-7.416 4.517 1.48-8.279L.036 9.306l8.332-1.151z"/></svg>
                        Next-Gen Growth Agency
                    </span>
                </div>

                <!-- Headline -->
                <h1 id="hero-title" class="font-display font-bold text-4xl md:text-6xl text-white tracking-tight leading-[1.1] mb-6">
                    <span class="block title-word">Amplified Reach</span>
                    <div class="flex flex-wrap items-center gap-3 md:gap-4 title-word my-2">
                        <span>With Strategic</span>
                        <!-- Focus Mode Toggle -->
                        <div id="focus-toggle" class="toggle-pill select-none transition-all duration-300 hover:border-brand-orange" onclick="toggleFocusMode()">
                            <div id="toggle-thumb" class="toggle-thumb">
                                <svg class="w-4 h-4 text-white animate-pulse" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-5.33 4.55-8 8.48-8 11.8 0 4.98 3.8 8.2 8 8.2s8-3.22 8-8.2c0-3.32-2.67-7.25-8-11.8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-brand-orange via-brand-gold to-white title-word">
                        Goldstar Impact
                    </span>
                </h1>

                <!-- Description -->
                <p class="text-white/50 text-sm md:text-base leading-relaxed max-w-lg mb-8 font-sans">
                    Welcome to a landscape where your brand voice commands absolute attention. We blend high-intent
                    <span id="focus-text" class="text-white font-medium transition-opacity duration-300">digital marketing, PR, and strategic communication systems</span>
                    into synchronized pipelines of growth, conversion, and global trust.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-4 mb-10">
                    <a href="services.php" class="group flex items-center gap-2 bg-gradient-to-r from-brand-orange to-brand-gold text-white text-xs font-bold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:shadow-[0_4px_30px_rgba(244,124,32,0.5)] hover:-translate-y-0.5 font-sans">
                        Explore Services
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <div class="flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full">
                        <svg class="w-4 h-4 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-xs text-white/60 font-medium font-mono">100% Secure Agency</span>
                    </div>
                </div>

                <!-- Tags -->
                <div id="hero-tags" class="flex flex-wrap gap-2 pt-6 border-t border-white/10">
                    <span class="tag-pill text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full border bg-brand-orange/15 border-brand-orange/40 text-brand-orange shadow-[0_0_15px_rgba(244,124,32,0.15)]" data-mode="marketing">#StrategicMarketing</span>
                    <span class="tag-pill text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full border bg-white/5 border-white/10 text-white/40 hover:border-white/20 hover:text-white transition-all duration-300" data-mode="events">#EventProduction</span>
                    <span class="tag-pill text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full border bg-brand-orange/15 border-brand-orange/40 text-brand-orange">#BrandDevelopment</span>
                    <span class="tag-pill text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full border bg-brand-orange/15 border-brand-orange/40 text-brand-orange">#PublicRelations</span>
                </div>
            </div>

            <!-- Right: Mockup Visual -->
            <div class="lg:col-span-5 relative" id="hero-mockup">
                <div class="relative mx-auto max-w-[340px] md:max-w-[380px] aspect-[4/5] rounded-[2rem] overflow-hidden border border-white/10 bg-neutral-900/40 p-4 shadow-2xl backdrop-blur-3xl group">

                    <!-- Live Feed Badge -->
                    <div class="absolute top-4 right-4 bg-brand-dark/90 border border-white/10 p-3 rounded-2xl w-28 text-center shadow-lg z-20 pointer-events-none">
                        <span class="block text-[9px] font-mono text-brand-orange uppercase tracking-widest mb-1">Live Feed</span>
                        <span class="block text-lg font-bold text-white font-mono">ROI 15X</span>
                        <span class="text-[8px] text-white/30 font-mono">Real-time stats</span>
                    </div>

                    <!-- Hero Image -->
                    <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative img-mask-wrap">
                        <img id="hero-img"
                             src="https://images.unsplash.com/photo-1460666882944-7c3c60afc26a?auto=format&fit=crop&w=800&q=80"
                             alt="Goldstar Marketing Showcase"
                             class="w-full h-full object-cover grayscale-[30%] hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

                        <!-- Bottom Banner -->
                        <div class="absolute bottom-4 left-4 right-4 bg-brand-dark/95 border border-white/10 p-4 rounded-xl backdrop-blur-md z-10">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-[10px] font-mono text-brand-orange tracking-wider uppercase mb-1">Campaign Lead Velocity</p>
                                    <h4 class="text-white text-sm font-display font-semibold">Join Our Growing Partners</h4>
                                </div>
                                <div class="w-8 h-8 bg-brand-orange rounded-full flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-3 pt-3 border-t border-white/5">
                                <div class="flex -space-x-2">
                                    <div class="inline-block h-6 w-6 rounded-full ring-2 ring-brand-dark bg-brand-orange/20 flex items-center justify-center text-[8px] font-bold text-brand-orange">G</div>
                                    <div class="inline-block h-6 w-6 rounded-full ring-2 ring-brand-dark bg-brand-gold/20 flex items-center justify-center text-[8px] font-bold text-brand-gold">S</div>
                                    <div class="inline-block h-6 w-6 rounded-full ring-2 ring-brand-dark bg-white/10 flex items-center justify-center text-[8px] font-bold text-white">M</div>
                                </div>
                                <span class="text-[10px] font-mono text-white/40">
                                    Trusted by <span class="text-white font-semibold">250+</span> global corporations
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Divider -->
<div class="section-divider h-px bg-brand-dark max-w-7xl mx-auto opacity-0 origin-left"></div>

<!-- ════════════════════════════════════════════════
     ABOUT SECTION
════════════════════════════════════════════════ -->
<section id="about" class="py-20 md:py-32 bg-brand-light relative overflow-hidden">
    <div class="absolute top-1/2 left-0 w-72 h-72 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">

            <!-- Left: Copy -->
            <div id="about-left" class="lg:col-span-6 flex flex-col justify-center text-left opacity-0">
                <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block reveal-text">#StrategicPartner</span>
                <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-[1.15] mb-6 reveal-text">
                    Your Strategic Partner,<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Your Competitive Edge</span>
                </h2>
                <p class="text-neutral-600 text-sm md:text-base leading-relaxed mb-6 font-sans reveal-text">
                    In today's hyper-competitive global landscape, mediocrity is invisible. Goldstar Global Marketing Company exists to lift your brand above the noise, establishing durable authority and driving high-intent client action.
                </p>
                <p class="text-neutral-600 text-sm md:text-base leading-relaxed mb-8 font-sans reveal-text">
                    We architect synchronized marketing systems—combining structural brand development, state-of-the-art corporate event production, performance digital marketing, and persuasive public relations.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-8 cards-stagger">
                    <div class="stagger-item flex items-start gap-3 p-4 bg-white rounded-2xl border border-brand-gray shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-2.5 bg-brand-orange/10 rounded-xl text-brand-orange mt-1">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-display font-semibold text-sm text-brand-dark">Strategic Clarity</h4>
                            <p class="text-xs text-neutral-500 mt-1 font-sans">Tailored positioning roadmaps aligned strictly with market intelligence.</p>
                        </div>
                    </div>
                    <div class="stagger-item flex items-start gap-3 p-4 bg-white rounded-2xl border border-brand-gray shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-2.5 bg-brand-gold/10 rounded-xl text-brand-gold mt-1">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <div>
                            <h4 class="font-display font-semibold text-sm text-brand-dark">Absolute Precision</h4>
                            <p class="text-xs text-neutral-500 mt-1 font-sans">Real-time performance attribution and logistical event mastery.</p>
                        </div>
                    </div>
                </div>

                <a href="contact.php" class="self-start group flex items-center gap-2 bg-brand-dark hover:bg-brand-dark/90 text-white text-xs font-semibold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 font-sans reveal-text">
                    Collaborate With Us
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                </a>
            </div>

            <!-- Right: Dashboard Mockup -->
            <div id="about-right" class="lg:col-span-6 opacity-0">
                <div class="relative mx-auto max-w-[420px] bg-brand-gray p-6 rounded-[2.5rem] border border-neutral-200/60 shadow-xl overflow-hidden">

                    <!-- Phone Notch -->
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 w-32 h-6 bg-brand-dark rounded-full z-20 flex items-center justify-around px-4">
                        <div class="w-2.5 h-2.5 bg-neutral-800 rounded-full"></div>
                        <div class="w-12 h-1 bg-neutral-800 rounded-full"></div>
                    </div>

                    <div class="bg-white rounded-[1.8rem] p-6 pt-10 min-h-[460px] shadow-inner relative flex flex-col justify-between">
                        <div>
                            <!-- Header -->
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <span class="text-[10px] font-mono text-neutral-400 uppercase tracking-widest block">Client Portal</span>
                                    <h3 class="font-display font-bold text-lg text-brand-dark">Goldstar Dashboard</h3>
                                </div>
                                <span class="text-xs font-mono px-2.5 py-1 bg-green-50 text-green-600 rounded-full font-medium flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-ping"></span>
                                    Live Feed
                                </span>
                            </div>

                            <!-- Metric Tabs -->
                            <div class="grid grid-cols-3 gap-2 mb-6" id="metric-tabs">
                                <button class="metric-tab p-2 rounded-xl border text-center transition-all duration-300 bg-brand-dark border-brand-dark text-white shadow-md" data-metric="ctr" onclick="switchMetric('ctr')">
                                    <svg class="w-4 h-4 mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                    <span class="text-[10px] font-medium font-display block">Click Rate</span>
                                </button>
                                <button class="metric-tab p-2 rounded-xl border text-center transition-all duration-300 bg-brand-gray border-neutral-100 text-neutral-500 hover:bg-neutral-100" data-metric="leads" onclick="switchMetric('leads')">
                                    <svg class="w-4 h-4 mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span class="text-[10px] font-medium font-display block">Leads Vol</span>
                                </button>
                                <button class="metric-tab p-2 rounded-xl border text-center transition-all duration-300 bg-brand-gray border-neutral-100 text-neutral-500 hover:bg-neutral-100" data-metric="roi" onclick="switchMetric('roi')">
                                    <svg class="w-4 h-4 mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                    <span class="text-[10px] font-medium font-display block">ROI Scale</span>
                                </button>
                            </div>

                            <!-- Metric Panel -->
                            <div class="bg-brand-gray rounded-2xl p-5 border border-neutral-100/80 relative overflow-hidden">
                                <p class="text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Campaign Performance Metric</p>
                                <div class="flex items-baseline gap-2 mb-4">
                                    <span id="metric-value" class="text-3xl font-display font-bold text-brand-dark tracking-tight">4.8%</span>
                                    <span class="text-xs font-semibold text-green-600 font-mono">+18.4% MoM</span>
                                </div>
                                <!-- Waveform -->
                                <div class="h-16 flex items-end gap-1.5" id="waveform">
                                    <?php
                                    $heights = [30,45,35,60,40,55,70,50,65,80,60,75,90,85];
                                    foreach ($heights as $h):
                                    ?>
                                    <div class="wave-bar flex-1 rounded-full" style="height:<?= $h ?>%; background-color:#f47c20;"></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Play Panel -->
                        <div class="mt-6 pt-4 border-t border-neutral-100 flex items-center justify-between gap-4">
                            <div>
                                <p class="text-[10px] font-mono text-brand-orange font-bold uppercase">Case Presentation</p>
                                <p class="text-xs text-neutral-600 font-medium font-sans">Goldstar — Modern strategy with customized solutions.</p>
                            </div>
                            <button id="play-reel-btn" onclick="openVideoModal()" class="relative w-12 h-12 flex-shrink-0 bg-brand-orange hover:bg-brand-orange/90 text-white rounded-full flex items-center justify-center transition-all duration-300 shadow-[0_4px_15px_rgba(244,124,32,0.35)] hover:scale-110" aria-label="Play Reel">
                                <svg class="w-5 h-5 ml-0.5 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                <span class="absolute inset-0 bg-brand-orange/30 rounded-full animate-ping"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div id="video-modal" class="fixed inset-0 bg-brand-dark/95 z-50 hidden items-center justify-center p-4 backdrop-blur-md">
        <div class="relative w-full max-w-4xl bg-[#121214] border border-white/10 rounded-3xl overflow-hidden shadow-2xl">
            <button onclick="closeVideoModal()" class="absolute top-4 right-4 text-neutral-400 hover:text-white bg-white/5 hover:bg-white/10 p-2 rounded-full transition-all duration-300 z-10">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="p-8 md:p-12">
                <span class="text-xs font-mono text-brand-orange tracking-widest uppercase mb-2 block">#CinematicPresentation</span>
                <h3 class="font-display font-bold text-2xl md:text-3xl text-white mb-6">Goldstar Global Agency Showreel</h3>
                <div class="aspect-video bg-neutral-900 rounded-2xl relative overflow-hidden flex items-center justify-center border border-white/5">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" class="absolute inset-0 w-full h-full object-cover opacity-60" alt="Showcase">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    <div class="relative text-center z-10 p-6">
                        <div class="w-16 h-16 bg-brand-orange text-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                            <svg class="w-6 h-6 ml-1 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                        <p class="text-white font-semibold font-display">Experience Immersive Production</p>
                        <p class="text-xs text-white/60 mt-1 max-w-sm mx-auto font-sans">This presentation illustrates our national summit operations and digital campaign infrastructure.</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-between items-center gap-4 border-t border-white/10 pt-6 text-xs text-neutral-400 font-mono">
                    <span>Running Time: <span class="text-white">1:45</span> | Quality: <span class="text-white">4K HDR</span></span>
                    <button onclick="closeVideoModal()" class="bg-white/10 hover:bg-white/15 text-white px-5 py-2 rounded-full text-xs font-semibold tracking-wide transition-all duration-300">Close Reel</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Divider -->
<div class="section-divider h-px bg-brand-dark max-w-7xl mx-auto opacity-0 origin-left"></div>

<!-- ════════════════════════════════════════════════
     CAPABILITIES SECTION
════════════════════════════════════════════════ -->
<section id="capabilities" class="py-24 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-1/3 right-1/4 w-[500px] h-[500px] bg-brand-orange/5 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-10 left-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">

        <!-- Header -->
        <div id="cap-header" class="max-w-3xl mb-16 opacity-0">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#OurCapabilities</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none mb-6">Unveiling Our Capabilities</h2>
            <p class="text-white/40 text-sm md:text-base leading-relaxed max-w-2xl font-sans">
                We operate at the convergence of persuasion and experience. Every marketing initiative and experiential production is fully aligned with structural brand objectives to lock in client growth and market share.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 cards-stagger" id="cap-cards">
            <?php
            $services = [
                [
                    'id'    => 'strategic-marketing',
                    'tag'   => '#StrategicMarketing',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>',
                    'title' => 'Strategic Marketing & Brand Development',
                    'desc'  => 'We orchestrate end-to-end brand transformations. From initial positioning and market intelligence to visual identity design and hyper-targeted execution, we ensure your message cuts through the noise.',
                    'details' => [
                        'Market Intelligence & Competitor Landscaping',
                        'Comprehensive Brand Architecture & Visual System Design',
                        'Dynamic Digital Marketing & Multi-channel Campaigns',
                        'Integrated Public Relations & Media Engagement Strategy',
                        'Corporate Communication & Stakeholder Alignment',
                    ]
                ],
                [
                    'id'    => 'event-services',
                    'tag'   => '#EventProduction',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
                    'title' => 'Experiential Event Services & Production',
                    'desc'  => 'We turn gatherings into fully immersive stories. Whether orchestrating prestigious government events, high-impact product launches, global corporate conferences, or experiential brand activations, our production standard is absolute.',
                    'details' => [
                        'End-to-End Event Planning & Logistical Masterminding',
                        'High-Profile Government Events & Protocol Management',
                        'State-of-the-Art Stage Production & Audio-Visual Systems',
                        'Product Launches & Immersive Pop-Ups',
                        'High-Capacity Corporate Conferences & VIP Hosting',
                    ]
                ],
                [
                    'id'    => 'campaign-management',
                    'tag'   => '#CampaignExecution',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                    'title' => 'Campaign Management & Digital Analytics',
                    'desc'  => 'We run highly persuasive, data-driven marketing campaigns. By pairing creative advertising with cutting-edge analytics and PR engineering, we track, measure, and scale your brand\'s growth in real time.',
                    'details' => [
                        'Targeted Media Buying & Audience Segmentation',
                        'Social Engineering & Performance Digital Ads',
                        'Crisis PR & Proactive Corporate Communication',
                        'Comprehensive Campaign Analytics & Attribution Models',
                        'Lead Generation & High-Intent Conversion Optimizations',
                    ]
                ],
            ];
            foreach ($services as $srv):
            ?>
            <div class="stagger-item capability-card group bg-[#121214] border border-white/5 hover:border-brand-orange/30 p-8 rounded-[2rem] transition-all duration-500 hover:shadow-[0_20px_40px_rgba(244,124,32,0.1)] flex flex-col justify-between relative overflow-hidden cursor-pointer hover:-translate-y-1.5"
                 onclick="toggleCapability('<?= $srv['id'] ?>')">
                <div class="card-flare"></div>
                <div>
                    <div class="flex items-center justify-between mb-8">
                        <span class="text-[10px] font-mono px-3.5 py-1.5 bg-brand-orange/10 border border-brand-orange/20 rounded-full text-brand-orange font-semibold"><?= $srv['tag'] ?></span>
                        <div class="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center text-neutral-400 group-hover:text-brand-orange group-hover:bg-brand-orange/10 transition-all duration-500 group-hover:rotate-12">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><?= $srv['icon'] ?></svg>
                        </div>
                    </div>
                    <h3 class="font-display font-bold text-lg md:text-xl text-white tracking-tight group-hover:text-brand-orange transition-colors duration-300 mb-4"><?= $srv['title'] ?></h3>
                    <p class="text-white/40 text-xs md:text-sm leading-relaxed mb-4 font-sans"><?= $srv['desc'] ?></p>
                </div>
                <!-- Expandable Details -->
                <div id="detail-<?= $srv['id'] ?>" class="detail-panel">
                    <?php foreach ($srv['details'] as $detail): ?>
                    <div class="flex items-start gap-2 mb-2">
                        <span class="text-brand-orange font-bold mt-0.5 text-xs">✓</span>
                        <span class="text-white/60 text-xs font-medium font-sans"><?= $detail ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex items-center justify-between border-t border-white/5 pt-4 mt-auto">
                    <span class="text-[10px] font-mono text-white/30 group-hover:text-white/60 transition-colors detail-hint">Click to view deliverables</span>
                    <div class="w-7 h-7 rounded-full bg-white/5 flex items-center justify-center text-neutral-400 group-hover:text-white group-hover:bg-brand-orange transition-all duration-500">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA Banner -->
        <div class="reveal-text bg-white/5 border border-white/10 rounded-2xl p-6 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <div class="p-2.5 bg-brand-orange/20 rounded-xl text-brand-orange">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                    <p class="text-sm font-semibold font-display text-white">Need a customized integration framework?</p>
                    <p class="text-xs text-white/40 mt-0.5 font-sans">We provide bespoke advisory for national conglomerates and fast-scaling entities.</p>
                </div>
            </div>
            <a href="contact.php" class="w-full sm:w-auto text-center px-6 py-3 bg-brand-orange hover:bg-brand-orange/90 text-white font-semibold text-xs rounded-full tracking-wider transition-all shadow-md hover:shadow-lg font-sans">
                Schedule Advisory
            </a>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════
     PROJECTS / CASES SECTION
════════════════════════════════════════════════ -->
<section id="projects" class="py-24 bg-brand-light relative overflow-hidden">
    <div class="absolute top-0 right-0 w-80 h-80 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div id="proj-header" class="flex flex-col md:flex-row md:items-end justify-between mb-16 opacity-0">
            <div class="max-w-xl">
                <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#ExperientialWorlds</span>
                <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">Transformative Cases</h2>
                <p class="text-neutral-500 text-xs md:text-sm mt-4 leading-relaxed font-sans">
                    Explore how we design multi-sensory brand environments and high-ROI conversion pipelines that secure client market dominance.
                </p>
            </div>
            <div class="mt-6 md:mt-0">
                <div class="flex items-center gap-1.5 px-3 py-1.5 bg-brand-dark text-white rounded-full text-xs font-mono">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>Multi-Platform Scale</span>
                </div>
            </div>
        </div>

        <?php
        $projects = [
            [
                'category' => 'Corporate Events',
                'title'    => 'NextGen Tech Summit',
                'stat1'    => '1,200+ Delegates',
                'stat2'    => '45 Global Speakers',
                'img'      => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=85',
            ],
            [
                'category' => 'Product Launches',
                'title'    => 'Brand Reveal Arena',
                'stat1'    => '3.2M Livestream Views',
                'stat2'    => '150+ Media Partners',
                'img'      => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=800&q=85',
            ],
            [
                'category' => 'Experiential Marketing',
                'title'    => 'Chroma Immersive Pavilions',
                'stat1'    => '45k+ Foot Traffic',
                'stat2'    => '+110% Brand Recall',
                'img'      => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=85',
            ],
            [
                'category' => 'Government Summits',
                'title'    => 'African Trade Alliance Expo',
                'stat1'    => '15 Head of State Delegations',
                'stat2'    => 'Live Broadcast',
                'img'      => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=85',
            ],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 cards-stagger" id="proj-grid">
            <?php foreach ($projects as $proj): ?>
            <div class="stagger-item group relative bg-[#121214] rounded-[2.5rem] overflow-hidden aspect-[4/3] shadow-lg border border-neutral-100/10 cursor-pointer">
                <div class="w-full h-full relative overflow-hidden img-mask-wrap">
                    <img src="<?= $proj['img'] ?>" alt="<?= $proj['title'] ?>"
                         class="w-full h-full object-cover transition-all duration-1000 ease-out scale-100 group-hover:scale-110 group-hover:rotate-1 filter grayscale-[15%] group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300"></div>
                </div>
                <div class="absolute top-6 left-6">
                    <span class="text-[10px] font-mono px-3.5 py-1.5 bg-black/60 backdrop-blur-md text-brand-orange border border-white/10 rounded-full font-bold"><?= $proj['category'] ?></span>
                </div>
                <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between gap-4 z-10">
                    <div>
                        <p class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest mb-1.5 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <?= $proj['stat1'] ?>
                        </p>
                        <h3 class="font-display font-bold text-xl md:text-2xl text-white tracking-tight leading-none"><?= $proj['title'] ?></h3>
                        <p class="text-white/60 text-xs mt-2.5 opacity-80 group-hover:opacity-100 transition-opacity font-sans"><?= $proj['stat2'] ?></p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-orange hover:bg-brand-orange/90 text-white flex items-center justify-center transition-all duration-500 shadow-lg group-hover:scale-110 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </div>
                </div>
                <div class="absolute inset-0 border-[8px] border-transparent group-hover:border-white/5 transition-all duration-500 rounded-[2.5rem] pointer-events-none"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<!-- ════════════════════════════════════════════════
     STATS SECTION
════════════════════════════════════════════════ -->
<section id="stats" class="py-20 md:py-28 bg-brand-darker text-white border-y border-white/5 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_120%,rgba(244,124,32,0.06),transparent_60%)] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#TrustMetrics</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl tracking-tight leading-none text-white">Purpose to Measurable Growth</h2>
            <p class="text-white/40 text-xs md:text-sm mt-4 font-sans">
                We hold ourselves strictly accountable to business metrics. Every event, digital pipeline, and PR communication exists to secure client dominance.
            </p>
        </div>

        <?php
        $stats = [
            ['value' => 12,  'suffix' => 'M+', 'label' => 'Campaign Leads Generated'],
            ['value' => 180, 'suffix' => '+',  'label' => 'High-Profile Events Produced'],
            ['value' => 98,  'suffix' => '%',  'label' => 'Client Retention & Trust'],
            ['value' => 15,  'suffix' => 'X',  'label' => 'Average Campaign ROI Scale'],
        ];
        ?>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 cards-stagger" id="stats-grid">
            <?php foreach ($stats as $idx => $stat): ?>
            <div class="stagger-item flex flex-col items-center justify-center p-6 bg-white/5 border border-white/5 rounded-3xl backdrop-blur-sm transition-all duration-300 hover:border-brand-orange/20 hover:bg-white/10">
                <div class="flex items-baseline justify-center">
                    <span class="stat-counter text-4xl md:text-6xl font-display font-bold counter-text tracking-tighter"
                          data-target="<?= $stat['value'] ?>" data-suffix="<?= $stat['suffix'] ?>">0</span>
                    <span class="text-2xl md:text-3xl font-display font-bold text-brand-orange ml-0.5 stat-suffix hidden"><?= $stat['suffix'] ?></span>
                </div>
                <div class="w-8 h-0.5 bg-brand-orange/30 my-4 rounded-full"></div>
                <p class="text-white/40 text-xs md:text-sm font-medium tracking-wide text-center font-sans"><?= $stat['label'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS SECTION
════════════════════════════════════════════════ -->
<section id="testimonials" class="py-24 bg-brand-light relative overflow-hidden">
    <div class="absolute top-1/2 left-10 w-72 h-72 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
        <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block reveal-text">#ClientVoice</span>

        <div class="relative mt-8">
            <div class="w-16 h-16 bg-brand-orange/10 border border-brand-orange/20 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-10 shadow-lg animate-pulse reveal-text">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1zm12 0c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
            </div>

            <!-- Testimonial Card -->
            <div id="testimonial-card" class="text-center reveal-text">
                <blockquote id="testimonial-quote" class="font-display font-medium text-lg md:text-2xl text-brand-dark leading-relaxed max-w-3xl mx-auto mb-10"></blockquote>
                <div class="flex flex-col items-center gap-4">
                    <img id="testimonial-avatar" src="" alt="" class="w-14 h-14 rounded-full object-cover border-2 border-brand-orange shadow-md">
                    <div>
                        <h4 id="testimonial-author" class="font-display font-bold text-base text-brand-dark"></h4>
                        <p id="testimonial-role" class="text-xs text-neutral-500 font-mono mt-0.5"></p>
                    </div>
                </div>
            </div>

            <!-- Nav Controls -->
            <div class="flex items-center justify-center gap-6 mt-12">
                <button onclick="prevTestimonial()" class="w-10 h-10 border border-neutral-200 hover:border-brand-orange text-neutral-400 hover:text-brand-orange rounded-full flex items-center justify-center transition-all duration-300 hover:scale-105" aria-label="Previous">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <div id="testimonial-dots" class="flex items-center gap-1.5"></div>
                <button onclick="nextTestimonial()" class="w-10 h-10 border border-neutral-200 hover:border-brand-orange text-neutral-400 hover:text-brand-orange rounded-full flex items-center justify-center transition-all duration-300 hover:scale-105" aria-label="Next">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA / CONTACT SECTION
════════════════════════════════════════════════ -->
<section id="contact" class="py-16 px-4 md:px-8 bg-brand-light">
    <div id="cta-container" class="max-w-6xl mx-auto bg-gradient-to-br from-brand-dark via-[#1a1a1c] to-brand-darker rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl border border-white/5 opacity-0">
        <div class="absolute inset-0 grid-overlay pointer-events-none"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-brand-orange/15 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-brand-gold/10 rounded-full blur-[80px] pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">

            <!-- Left -->
            <div class="lg:col-span-7">
                <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#StrategicDominance</span>
                <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-tight mb-6">
                    Let's Elevate Your<br>Brand Strategy Today
                </h2>
                <p class="text-white/40 text-sm md:text-base leading-relaxed mb-8 max-w-xl font-sans">
                    Partner with Goldstar Global Marketing Company and unlock reliable marketing systems built to scale. Secure your private consultation, national event inquiry, or custom brand audit.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-5 h-5 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-xs text-white/60 font-mono font-medium">Bespoke Enterprise Consultations</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <svg class="w-5 h-5 text-brand-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span class="text-xs text-white/60 font-mono font-medium">Strict Non-Disclosure Guarantee</span>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="lg:col-span-5">
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 md:p-8 backdrop-blur-md shadow-xl relative">
                    <div id="cta-form-wrap">
                        <div class="mb-5">
                            <h3 class="font-display font-semibold text-lg text-white">Let's Connect</h3>
                            <p class="text-xs text-white/40 font-sans">Request your complimentary portfolio review.</p>
                        </div>
                        <form id="cta-form" onsubmit="submitCTAForm(event)" class="space-y-4" action="contact.php" method="GET">
                            <div>
                                <label for="cta-email" class="block text-[10px] font-mono text-white/40 uppercase tracking-widest mb-1.5">Business Email Address</label>
                                <input id="cta-email" type="email" name="email" required placeholder="e.g. partner@firm.com"
                                       class="form-input w-full bg-brand-dark border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/20 transition-colors font-sans">
                            </div>
                            <div>
                                <label for="cta-message" class="block text-[10px] font-mono text-white/40 uppercase tracking-widest mb-1.5">Consultation Focus (Optional)</label>
                                <textarea id="cta-message" name="message" rows="2" placeholder="e.g., Campaign PR or Launch Event production"
                                          class="form-input w-full bg-brand-dark border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-white/20 transition-colors resize-none font-sans"></textarea>
                            </div>
                            <button type="submit" class="w-full group flex items-center justify-center gap-2 bg-gradient-to-r from-brand-orange to-brand-gold text-white text-xs font-bold tracking-wider py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-[0_4px_20px_rgba(244,124,32,0.4)] font-sans">
                                <span>Request Callback</span>
                                <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            </button>
                        </form>
                    </div>
                    <div id="cta-success" class="text-center py-8 hidden">
                        <div class="w-14 h-14 bg-brand-orange/20 border border-brand-orange/40 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-display font-bold text-xl text-white mb-2">Request Received</h3>
                        <p class="text-xs text-white/60 leading-relaxed max-w-xs mx-auto font-sans">
                            An executive brand coordinator will reach out within 2 business hours.
                        </p>
                        <button onclick="document.getElementById('cta-success').classList.add('hidden');document.getElementById('cta-form-wrap').classList.remove('hidden');"
                                class="mt-6 text-[10px] font-mono text-white/30 hover:text-white transition-colors">Send another request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<!-- ════════════════════════════════════════════════
     PAGE-SPECIFIC SCRIPTS
════════════════════════════════════════════════ -->
<script>
// ── HERO ENTRANCE ──
(function() {
    const tl = gsap.timeline({ defaults: { ease: 'power3.out' }, delay: 1.4 });
    tl.fromTo('#hero-container', { opacity: 0, scale: 0.98 }, { opacity: 1, scale: 1, duration: 1.2 })
      .from('#hero-title .title-word', { y: 55, opacity: 0, duration: 0.8, stagger: 0.15 }, '-=0.8')
      .from('#hero-tags .tag-pill', { scale: 0.8, opacity: 0, duration: 0.5, stagger: 0.08 }, '-=0.5')
      .from('#hero-mockup', { x: 50, opacity: 0, scale: 0.95, duration: 1 }, '-=0.6');
})();

// ── ABOUT REVEAL ──
gsap.fromTo('#about-left',
    { y: 50, opacity: 0 },
    { y: 0, opacity: 1, duration: 1, ease: 'power3.out',
      scrollTrigger: { trigger: '#about', start: 'top 80%', toggleActions: 'play none none none' } }
);
gsap.fromTo('#about-right',
    { y: 70, opacity: 0 },
    { y: 0, opacity: 1, duration: 1.2, ease: 'power3.out',
      scrollTrigger: { trigger: '#about', start: 'top 75%', toggleActions: 'play none none none' } }
);

// ── CAPABILITIES HEADER ──
gsap.fromTo('#cap-header',
    { y: 30, opacity: 0 },
    { y: 0, opacity: 1, duration: 0.8, ease: 'power2.out',
      scrollTrigger: { trigger: '#capabilities', start: 'top 80%', toggleActions: 'play none none none' } }
);

// ── PROJECTS HEADER ──
gsap.fromTo('#proj-header',
    { y: 30, opacity: 0 },
    { y: 0, opacity: 1, duration: 0.8, ease: 'power2.out',
      scrollTrigger: { trigger: '#projects', start: 'top 80%', toggleActions: 'play none none none' } }
);

// ── CTA ENTRANCE ──
gsap.fromTo('#cta-container',
    { scale: 0.96, opacity: 0, y: 40 },
    { scale: 1, opacity: 1, y: 0, duration: 1.2, ease: 'power3.out',
      scrollTrigger: { trigger: '#contact', start: 'top 85%', toggleActions: 'play none none none' } }
);

// ── BODY BG TRANSITION ON CAPABILITIES ──
ScrollTrigger.create({
    trigger: '#capabilities',
    start: 'top 60%', end: 'bottom 40%',
    onEnter:     () => gsap.to('body', { backgroundColor: '#0a0a0b', duration: 0.8, ease: 'power2.out' }),
    onLeaveBack: () => gsap.to('body', { backgroundColor: '#fbfbfd', duration: 0.8, ease: 'power2.out' }),
    onLeave:     () => gsap.to('body', { backgroundColor: '#fbfbfd', duration: 0.8, ease: 'power2.out' }),
    onEnterBack: () => gsap.to('body', { backgroundColor: '#0a0a0b', duration: 0.8, ease: 'power2.out' }),
});

// ── STATS COUNTER ANIMATION ──
(function() {
    let fired = false;
    ScrollTrigger.create({
        trigger: '#stats',
        start: 'top 85%',
        onEnter: () => {
            if (fired) return; fired = true;
            document.querySelectorAll('.stat-counter').forEach(el => {
                const target   = parseInt(el.dataset.target);
                const suffix   = el.dataset.suffix;
                const duration = 2000;
                const steps    = 60;
                const stepTime = duration / steps;
                let step = 0;
                el.nextElementSibling.classList.remove('hidden');
                const interval = setInterval(() => {
                    step++;
                    const progress = step / steps;
                    const eased    = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(eased * target);
                    if (step >= steps) {
                        clearInterval(interval);
                        el.textContent = target;
                    }
                }, stepTime);
            });
        },
        once: true,
    });
})();

// ── HERO FOCUS MODE TOGGLE ──
let focusMode = 'marketing';
const heroImages = {
    marketing: 'https://images.unsplash.com/photo-1460666882944-7c3c60afc26a?auto=format&fit=crop&w=800&q=80',
    events:    'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
};
const focusTexts = {
    marketing: 'digital marketing, PR, and strategic communication systems',
    events:    'experiential events, product launches, and production dynamics',
};

function toggleFocusMode() {
    focusMode = focusMode === 'marketing' ? 'events' : 'marketing';
    const toggle = document.getElementById('focus-toggle');
    const glow   = document.getElementById('hero-glow');
    const img    = document.getElementById('hero-img');
    const ftxt   = document.getElementById('focus-text');

    toggle.classList.toggle('events', focusMode === 'events');
    glow.style.backgroundColor = focusMode === 'marketing' ? 'rgba(244,124,32,0.2)' : 'rgba(245,158,11,0.2)';
    img.src = heroImages[focusMode];

    gsap.fromTo(ftxt, { opacity: 0, y: 10 }, { opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' });
    ftxt.textContent = focusTexts[focusMode];

    // Update tags
    document.querySelectorAll('.tag-pill[data-mode]').forEach(tag => {
        const active = tag.dataset.mode === focusMode;
        tag.className = `tag-pill text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full border transition-all duration-500 ${
            active
            ? 'bg-brand-orange/15 border-brand-orange/40 text-brand-orange shadow-[0_0_15px_rgba(244,124,32,0.15)]'
            : 'bg-white/5 border-white/10 text-white/40 hover:border-white/20 hover:text-white'
        }`;
        tag.dataset.mode = tag.dataset.mode;
    });
}

// ── CAPABILITY CARD TOGGLE ──
function toggleCapability(id) {
    const panel = document.getElementById('detail-' + id);
    const card  = panel.closest('.capability-card');
    const hint  = card.querySelector('.detail-hint');
    const isOpen = panel.classList.contains('open');
    // Close all
    document.querySelectorAll('.detail-panel').forEach(p => p.classList.remove('open'));
    document.querySelectorAll('.detail-hint').forEach(h => h.textContent = 'Click to view deliverables');
    if (!isOpen) {
        panel.classList.add('open');
        hint.textContent = 'Click to fold details';
    }
}

// ── ABOUT METRIC TABS ──
const metricData = {
    ctr:   { value: '4.8%', color: '#f47c20' },
    leads: { value: '1,240', color: '#f59e0b' },
    roi:   { value: '12.4X', color: '#121214' },
};
let currentMetric = 'ctr';
let metricInterval;

function switchMetric(key) {
    currentMetric = key;
    document.querySelectorAll('.metric-tab').forEach(tab => {
        const active = tab.dataset.metric === key;
        tab.className = `metric-tab p-2 rounded-xl border text-center transition-all duration-300 ${
            active ? 'bg-brand-dark border-brand-dark text-white shadow-md' : 'bg-brand-gray border-neutral-100 text-neutral-500 hover:bg-neutral-100'
        }`;
    });
    const val = document.getElementById('metric-value');
    gsap.fromTo(val, { opacity: 0, y: 6 }, { opacity: 1, y: 0, duration: 0.3 });
    val.textContent = metricData[key].value;
    document.querySelectorAll('.wave-bar').forEach(bar => {
        bar.style.backgroundColor = metricData[key].color;
    });
}

// Live simulation
function startMetricSimulation() {
    metricInterval = setInterval(() => {
        if (currentMetric === 'ctr') {
            const v = (4.8 + (Math.random() * 0.4 - 0.2)).toFixed(2);
            metricData.ctr.value = v + '%';
        } else if (currentMetric === 'leads') {
            const v = 1240 + Math.floor(Math.random() * 5 - 2);
            metricData.leads.value = v.toString();
        } else {
            const v = (12.4 + (Math.random() * 0.2 - 0.1)).toFixed(1);
            metricData.roi.value = v + 'X';
        }
        document.getElementById('metric-value').textContent = metricData[currentMetric].value;
    }, 2000);
}
startMetricSimulation();

// ── TESTIMONIALS ──
const testimonials = [
    {
        quote:   "Goldstar Global's execution is pure art. They transformed our annual pan-African conference into a world-class experiential masterclass. Their team's attention to detail, protocol precision, and high-fidelity stage production set a new standard.",
        author:  "Dr. Amara Okoye",
        role:    "Director of Communications",
        company: "African Trade Alliance",
        avatar:  "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80",
    },
    {
        quote:   "Our product launch required absolute confidentiality, media poise, and high-impact digital campaign backing. Goldstar delivered exactly that—securing prime media coverage and orchestrating a flawless reveal that generated over 15,000 qualified pre-orders.",
        author:  "George Kamau",
        role:    "Head of Brand Strategy",
        company: "Aether EV Systems",
        avatar:  "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80",
    },
    {
        quote:   "Working with Goldstar was a transformative experience. Their integrated marketing system delivered a 240% increase in qualified leads within the first quarter and their event team executed our annual gala flawlessly.",
        author:  "Nia Wambui",
        role:    "Chief Marketing Officer",
        company: "Savanna Capital Group",
        avatar:  "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80",
    },
];
let currentTestimonial = 0;

function renderTestimonial(idx) {
    const t = testimonials[idx];
    document.getElementById('testimonial-quote').textContent  = '"' + t.quote + '"';
    document.getElementById('testimonial-author').textContent = t.author;
    document.getElementById('testimonial-role').textContent   = t.role + ' — ' + t.company;
    document.getElementById('testimonial-avatar').src         = t.avatar;
    document.getElementById('testimonial-avatar').alt         = t.author;
    // Dots
    const dots = document.getElementById('testimonial-dots');
    dots.innerHTML = '';
    testimonials.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = `h-2.5 rounded-full transition-all duration-300 ${i === idx ? 'w-6 bg-brand-orange' : 'w-2 bg-neutral-200'}`;
        dot.setAttribute('aria-label', 'Slide ' + (i+1));
        dot.onclick = () => goToTestimonial(i);
        dots.appendChild(dot);
    });
}

function goToTestimonial(idx) {
    if (idx === currentTestimonial) return;
    const card = document.getElementById('testimonial-card');
    gsap.to(card, { opacity: 0, x: -30, duration: 0.3,
        onComplete: () => {
            currentTestimonial = idx;
            renderTestimonial(idx);
            gsap.fromTo(card, { opacity: 0, x: 30 }, { opacity: 1, x: 0, duration: 0.4 });
        }
    });
}

function nextTestimonial() { goToTestimonial((currentTestimonial + 1) % testimonials.length); }
function prevTestimonial() { goToTestimonial((currentTestimonial - 1 + testimonials.length) % testimonials.length); }

renderTestimonial(0);

// Auto-advance testimonials
setInterval(nextTestimonial, 6000);

// ── VIDEO MODAL ──
function openVideoModal() {
    const modal = document.getElementById('video-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    gsap.fromTo(modal.firstElementChild, { scale: 0.9, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.4, ease: 'back.out(1.5)' });
    document.body.style.overflow = 'hidden';
}
function closeVideoModal() {
    const modal = document.getElementById('video-modal');
    gsap.to(modal.firstElementChild, { scale: 0.9, opacity: 0, duration: 0.3,
        onComplete: () => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    });
}

// ── CTA FORM ──
function submitCTAForm(e) {
    e.preventDefault();
    const formWrap = document.getElementById('cta-form-wrap');
    const success  = document.getElementById('cta-success');
    const tl = gsap.timeline();
    tl.to(formWrap, { opacity: 0, y: -20, duration: 0.4,
        onComplete: () => {
            formWrap.classList.add('hidden');
            success.classList.remove('hidden');
        }
    });
    tl.fromTo(success, { scale: 0.9, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.5, ease: 'back.out(1.5)' });
}
</script>
