<?php
$title    = "Services | Goldstar Global Marketing — Capabilities Matrix";
$metaDesc = "Explore Goldstar Global Marketing Company's specialized institutional services: strategic positioning, brand development, event execution, and performance intelligence.";
include 'components/header.php';
?>

<!-- ── PAGE HERO ── -->
<section class="pt-36 pb-20 px-4 md:px-8 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-orange/8 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto">
        <div id="services-hero" class="max-w-3xl opacity-0">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-6 block">#InstitutionalServiceMatrix</span>
            <h1 class="font-display font-bold text-4xl md:text-6xl text-white tracking-tight leading-[1.05] mb-6">
                Specialized <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Strategic</span> Capabilities
            </h1>
            <p class="text-white/50 text-base md:text-lg leading-relaxed max-w-2xl mb-8 font-sans">
                We provide structured services across primary domains, ensuring alignment with corporate governance and public sector standards at every stage.
            </p>
            <a href="contact.php" class="inline-flex items-center gap-2 bg-brand-orange hover:bg-brand-orange/90 text-white text-xs font-bold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
                Request Capabilities Brief
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ── PHASE CARDS ── -->
<section class="py-24 bg-brand-light relative overflow-hidden">
    <div class="absolute top-0 right-0 w-80 h-80 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#FourPhaseFramework</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">The Engineering of Trust</h2>
            <p class="text-neutral-500 text-sm max-w-xl mx-auto mt-4 font-sans">Our four-stage framework ensures every project follows a proven, disciplined path from conception to total market dominance.</p>
        </div>
        <?php
        $phases = [
            [
                'num'   => '01',
                'tag'   => 'Phase I',
                'title' => 'Strategic Positioning',
                'desc'  => 'Interrogating market demand, behavioral psychology, and competitive frameworks to establish a dominant market narrative.',
                'details' => ['Market Intelligence & Demand Analysis','Competitive Landscape Mapping','Brand Positioning Architecture','Audience Persona Development'],
            ],
            [
                'num'   => '02',
                'tag'   => 'Phase II',
                'title' => 'Institutional Engagement',
                'desc'  => 'Designing stakeholder communication and relationship sequencing that moves capital and ensures operational stability.',
                'details' => ['Stakeholder Communication Design','Investor Relations Strategy','Government Liaison Protocol','Corporate PR Engineering'],
            ],
            [
                'num'   => '03',
                'tag'   => 'Phase III',
                'title' => 'Event Execution',
                'desc'  => 'High-fidelity delivery of government summits, corporate conferences, and high-visibility product launches.',
                'details' => ['End-to-End Logistics & Masterminding','Stage Production & AV Systems','Government Protocol Management','VIP Hosting & Security Coordination'],
            ],
            [
                'num'   => '04',
                'tag'   => 'Phase IV',
                'title' => 'Performance Intelligence',
                'desc'  => 'Leveraging digital data and market feedback loops to continuously optimize institutional reach and stakeholder buy-in.',
                'details' => ['Campaign Analytics & Attribution','Real-Time Performance Dashboards','Conversion Optimization','Ongoing Retainer Strategy'],
            ],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 cards-stagger">
            <?php foreach ($phases as $phase): ?>
            <div class="stagger-item group bg-white border border-neutral-200 hover:border-brand-orange/40 p-8 rounded-[2rem] transition-all duration-500 hover:shadow-[0_20px_40px_rgba(244,124,32,0.08)] hover:-translate-y-1 relative overflow-hidden">
                <div class="absolute top-6 right-6 text-[80px] font-display font-black text-neutral-100/80 leading-none pointer-events-none group-hover:text-brand-orange/10 transition-colors duration-500"><?= $phase['num'] ?></div>
                <span class="text-[10px] font-mono px-3 py-1 bg-brand-orange/10 border border-brand-orange/20 rounded-full text-brand-orange font-semibold mb-5 inline-block"><?= $phase['tag'] ?></span>
                <h3 class="font-display font-bold text-2xl text-brand-dark mb-4 group-hover:text-brand-orange transition-colors duration-300"><?= $phase['title'] ?></h3>
                <p class="text-neutral-500 text-sm leading-relaxed mb-6 font-sans"><?= $phase['desc'] ?></p>
                <ul class="space-y-2">
                    <?php foreach ($phase['details'] as $d): ?>
                    <li class="flex items-start gap-2">
                        <span class="text-brand-orange font-bold text-xs mt-0.5">✓</span>
                        <span class="text-neutral-600 text-xs font-sans"><?= $d ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── FULL SERVICES LIST ── -->
<section class="py-24 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-brand-orange/5 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#OurCapabilities</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none">What We Deliver</h2>
        </div>

        <?php
        $services = [
            ['icon' => '📣', 'title' => 'Strategic Marketing & Brand Development', 'desc' => 'End-to-end brand transformations from positioning to execution. Market intelligence, visual identity, multi-channel campaigns, and PR strategy.'],
            ['icon' => '🏛️', 'title' => 'Experiential Event Services & Production',  'desc' => 'Government summits, corporate conferences, product launches, and experiential activations executed with absolute precision.'],
            ['icon' => '📊', 'title' => 'Campaign Management & Digital Analytics',  'desc' => 'Data-driven campaigns with real-time attribution, audience segmentation, and high-intent conversion optimization.'],
            ['icon' => '🤝', 'title' => 'Public Relations & Media Engineering',     'desc' => 'Crisis communication, proactive media engagement, press coverage, and stakeholder alignment for institutions.'],
            ['icon' => '🎯', 'title' => 'Brand Audits & Market Intelligence',        'desc' => 'Deep competitive research, demand forecasting, and behavioral analysis to inform your strategic positioning.'],
            ['icon' => '🌐', 'title' => 'Digital Presence & Content Strategy',       'desc' => 'Integrated digital ecosystems — social media, content marketing, SEO, and performance advertising built for scale.'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 cards-stagger">
            <?php foreach ($services as $srv): ?>
            <div class="stagger-item group bg-[#121214] border border-white/5 hover:border-brand-orange/30 p-7 rounded-[2rem] transition-all duration-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(244,124,32,0.1)]">
                <div class="text-3xl mb-5"><?= $srv['icon'] ?></div>
                <h3 class="font-display font-bold text-lg text-white mb-3 group-hover:text-brand-orange transition-colors duration-300"><?= $srv['title'] ?></h3>
                <p class="text-white/40 text-xs leading-relaxed font-sans"><?= $srv['desc'] ?></p>
                <div class="mt-5 pt-5 border-t border-white/5">
                    <a href="contact.php" class="text-[10px] font-mono text-brand-orange hover:text-white transition-colors flex items-center gap-1">
                        Enquire →
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="py-20 px-4 md:px-8 bg-brand-light">
    <div class="max-w-5xl mx-auto">
        <div class="mesh-bg rounded-[2.5rem] p-10 md:p-16 relative overflow-hidden reveal-text">
            <div class="absolute inset-0 grid-overlay pointer-events-none"></div>
            <div class="absolute -bottom-10 -right-10 w-80 h-80 bg-brand-orange/20 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="text-xs font-mono text-brand-orange tracking-[0.25em] uppercase mb-4 block">#BeginEngagement</span>
                    <h2 class="font-display font-bold text-3xl md:text-4xl text-white leading-tight mb-4">Ready For A Capabilities Brief?</h2>
                    <p class="text-white/40 text-sm font-sans leading-relaxed">Our engagement begins with a formal capabilities assessment. Let's align our services with your institutional ambitions.</p>
                </div>
                <div class="flex flex-col gap-4 lg:items-end">
                    <a href="contact.php" class="inline-flex items-center justify-center gap-2 bg-brand-orange hover:bg-brand-orange/90 text-white text-xs font-bold tracking-wider px-8 py-4 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
                        Request Strategy Session
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <p class="text-white/20 text-[10px] font-mono">Strict NDA. Private Consultation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<script>
gsap.fromTo('#services-hero', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1, ease: 'power3.out', delay: 1.5 });
</script>
