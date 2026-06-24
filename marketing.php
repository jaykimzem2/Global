<?php
$title    = "Marketing Intelligence | Goldstar Global — Strategic Positioning";
$metaDesc = "Goldstar Global Marketing Company's strategic marketing services: behavioral economics, investor communication, market research, and integrated digital campaigns.";
include 'components/header.php';
?>

<!-- ── PAGE HERO ── -->
<section class="pt-36 pb-20 px-4 md:px-8 bg-brand-light relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-orange/6 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div id="mkt-hero-left" class="lg:col-span-6 opacity-0">
                <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-6 block">#StrategicPositioning</span>
                <h1 class="font-display font-bold text-4xl md:text-6xl text-brand-dark tracking-tight leading-[1.05] mb-6">
                    Marketing As <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Intelligence.</span>
                </h1>
                <p class="text-neutral-500 text-base md:text-lg leading-relaxed mb-8 max-w-xl font-sans">
                    We do not run campaigns. We build market positions. The difference is the gap between noise and operational inevitability.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="contact.php" class="group flex items-center gap-2 bg-brand-orange text-white text-xs font-bold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:shadow-[0_4px_30px_rgba(244,124,32,0.5)] hover:-translate-y-0.5 font-sans">
                        Start a Campaign
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <a href="services.php" class="flex items-center gap-2 border border-brand-dark/20 text-brand-dark text-xs font-semibold tracking-wider px-6 py-3.5 rounded-full hover:border-brand-orange hover:text-brand-orange transition-all duration-300 font-sans">
                        All Services
                    </a>
                </div>
            </div>
            <div id="mkt-hero-right" class="lg:col-span-6 opacity-0">
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] img-mask-wrap border border-neutral-200">
                    <img src="assets/CEO Peter Wairegi.png" alt="Marketing Intelligence" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-tr from-brand-dark/60 via-transparent to-brand-orange/20"></div>
                    <div class="absolute bottom-6 left-6 bg-brand-dark/80 backdrop-blur-md border border-white/10 rounded-2xl p-4">
                        <p class="text-xs font-mono text-brand-orange mb-1">Average Campaign ROI</p>
                        <p class="text-2xl font-display font-bold text-white">15X <span class="text-sm text-white/40">scale</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── MARKETING SPECIALTIES ── -->
<section class="py-24 bg-brand-gray relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#CoreSpecialties</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">What We Master</h2>
        </div>
        <?php
        $specialties = [
            ['icon'=>'🧠','title'=>'Behavioral Economics',  'desc'=>'Studying human decision-making at the intersection of aspiration and logic to craft irresistible brand narratives.'],
            ['icon'=>'🤝','title'=>'Investor Communication','desc'=>'Investment-grade material designed to convert high-net-worth investors and institutional capital partners.'],
            ['icon'=>'🔬','title'=>'Market Research',       'desc'=>'Deep analysis and demand forecasting before a single campaign asset is deployed in the market.'],
            ['icon'=>'📣','title'=>'Digital Campaigns',     'desc'=>'Performance-driven digital advertising, SEO, and social media systems built for scale and measurable ROI.'],
            ['icon'=>'🎙️','title'=>'Public Relations',     'desc'=>'Proactive media engagement, press integration, and crisis communication frameworks for institutional brands.'],
            ['icon'=>'🎨','title'=>'Brand Identity Design', 'desc'=>'Visual systems, brand guidelines, and identity architecture that command authority across all touchpoints.'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 cards-stagger">
            <?php foreach ($specialties as $s): ?>
            <div class="stagger-item group bg-white border border-neutral-200 hover:border-brand-orange/40 p-7 rounded-[2rem] transition-all duration-500 hover:shadow-[0_20px_40px_rgba(244,124,32,0.08)] hover:-translate-y-1">
                <div class="text-3xl mb-5"><?= $s['icon'] ?></div>
                <h3 class="font-display font-bold text-lg text-brand-dark mb-3 group-hover:text-brand-orange transition-colors"><?= $s['title'] ?></h3>
                <p class="text-neutral-500 text-sm leading-relaxed font-sans"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── PERFORMANCE METRICS BANNER ── -->
<section class="py-20 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_120%,rgba(244,124,32,0.08),transparent_60%)] pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-12 reveal-text">
            <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none">Campaign Performance<br><span class="text-brand-orange">By The Numbers</span></h2>
        </div>
        <?php
        $metrics = [
            ['value' => '12M+', 'label' => 'Campaign Leads Generated'],
            ['value' => '15X',  'label' => 'Average ROI Scale'],
            ['value' => '98%',  'label' => 'Client Retention Rate'],
            ['value' => '250+', 'label' => 'Global Partners'],
        ];
        ?>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 cards-stagger">
            <?php foreach ($metrics as $m): ?>
            <div class="stagger-item text-center p-6 bg-white/5 border border-white/5 rounded-3xl hover:border-brand-orange/20 transition-all duration-300">
                <div class="text-4xl md:text-5xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-br from-white to-brand-orange mb-3"><?= $m['value'] ?></div>
                <p class="text-white/40 text-xs font-sans"><?= $m['label'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── PROCESS ── -->
<section class="py-24 bg-brand-light relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#OurProcess</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">How We Operate</h2>
        </div>
        <?php
        $process = [
            ['step'=>'01','title'=>'Discovery & Intelligence',  'desc'=>'We begin with a comprehensive audit of your brand landscape, target audiences, and competitive environment.'],
            ['step'=>'02','title'=>'Strategy Architecture',      'desc'=>'We design a custom marketing blueprint aligned to your specific business objectives and market position.'],
            ['step'=>'03','title'=>'Precision Execution',        'desc'=>'Our team deploys multi-channel campaigns with exacting attention to creative quality and performance metrics.'],
            ['step'=>'04','title'=>'Analytics & Optimization',   'desc'=>'Real-time dashboards track every KPI. We continuously optimize to maximize ROI and campaign velocity.'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 cards-stagger">
            <?php foreach ($process as $p): ?>
            <div class="stagger-item relative group">
                <div class="text-8xl font-display font-black text-neutral-100 group-hover:text-brand-orange/10 transition-colors duration-500 leading-none mb-4"><?= $p['step'] ?></div>
                <h3 class="font-display font-bold text-lg text-brand-dark mb-3 group-hover:text-brand-orange transition-colors"><?= $p['title'] ?></h3>
                <p class="text-neutral-500 text-sm leading-relaxed font-sans"><?= $p['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="py-16 px-4 md:px-8 bg-brand-gray">
    <div class="max-w-4xl mx-auto text-center reveal-text">
        <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#StartNow</span>
        <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none mb-6">
            Ready to Build Your<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Market Position?</span>
        </h2>
        <p class="text-neutral-500 text-base mb-10 max-w-xl mx-auto font-sans">Schedule a private strategy session and let us architect a marketing system that drives measurable, institutional-scale growth.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 bg-brand-orange text-white text-xs font-bold tracking-wider px-8 py-4 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
            Schedule Strategy Session
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<script>
gsap.fromTo('#mkt-hero-left',  { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1, ease: 'power3.out', delay: 1.5 });
gsap.fromTo('#mkt-hero-right', { x: 50, opacity: 0 }, { x: 0, opacity: 1, duration: 1.2, ease: 'power3.out', delay: 1.7 });
</script>
