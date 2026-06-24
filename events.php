<?php
$title    = "Experiential Events | Goldstar Global Marketing — Precision Execution";
$metaDesc = "Goldstar Global Marketing Company's experiential event services: government summits, corporate conferences, product launches, and brand activations executed with absolute precision.";
include 'components/header.php';
?>

<!-- ── PAGE HERO ── -->
<section class="pt-36 pb-20 px-4 md:px-8 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-gold/6 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto">
        <div id="events-hero" class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center opacity-0">
            <div class="lg:col-span-7">
                <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-6 block">#OperationalReliability</span>
                <h1 class="font-display font-bold text-4xl md:text-6xl text-white tracking-tight leading-[1.05] mb-6">
                    Execution Minus <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Risk.</span>
                </h1>
                <p class="text-white/50 text-base md:text-lg leading-relaxed mb-8 max-w-xl font-sans">
                    Logistics, protocol management, and technical execution for the highest levels of government and corporate engagement. Every event is a masterclass in precision.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="contact.php" class="group flex items-center gap-2 bg-brand-orange text-white text-xs font-bold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
                        Plan Your Event
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <a href="services.php" class="flex items-center gap-2 border border-white/20 text-white text-xs font-semibold tracking-wider px-6 py-3.5 rounded-full hover:border-brand-orange hover:text-brand-orange transition-all duration-300 font-sans">
                        All Services
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 border border-white/10 rounded-[1.5rem] p-5 text-center">
                        <div class="text-3xl font-display font-black text-brand-orange mb-2">180+</div>
                        <p class="text-xs text-white/40 font-sans">Events Produced</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-[1.5rem] p-5 text-center">
                        <div class="text-3xl font-display font-black text-brand-gold mb-2">15</div>
                        <p class="text-xs text-white/40 font-sans">Head of State Delegations</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-[1.5rem] p-5 text-center col-span-2">
                        <div class="text-3xl font-display font-black text-white mb-2">3.2M+</div>
                        <p class="text-xs text-white/40 font-sans">Livestream Views Achieved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── EVENT TYPES ── -->
<section class="py-24 bg-brand-light relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#EventPortfolio</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">Events We Master</h2>
        </div>
        <?php
        $eventTypes = [
            ['icon'=>'🏛️','title'=>'Government Summits',        'desc'=>'High-level public sector engagements and diplomatic protocol management for head-of-state events, trade summits, and policy forums.','details'=>['Diplomatic Protocol Management','Security Coordination','Live Broadcast Setup','Multi-Language Facilitation']],
            ['icon'=>'💼','title'=>'Corporate Conferences',      'desc'=>'Professional conferences that reflect institutional prestige and corporate goals, from boardroom briefings to 5,000-seat conventions.','details'=>['Venue Selection & Design','Speaker Management','AV Production Systems','Delegate Registration']],
            ['icon'=>'🚀','title'=>'Product Launches',           'desc'=>'Experiential engineering designed for immediate market impact, media magnetism, and conviction at scale.','details'=>['Pre-Launch Media Strategy','Experiential Design','Press Event Coordination','Social Media Amplification']],
            ['icon'=>'🎭','title'=>'Brand Activations',          'desc'=>'Immersive brand experiences that create lasting memory, drive foot traffic, and convert audiences into loyal advocates.','details'=>['Concept & Experience Design','Pop-Up Infrastructure','Experiential Technology','Brand Ambassador Training']],
            ['icon'=>'🏆','title'=>'Awards & Gala Ceremonies',   'desc'=>'Prestige-grade award ceremonies and gala dinners that elevate institutional status and celebrate achievement.','details'=>['Ceremony Design & Flow','Entertainment Curation','Red Carpet Management','Live Broadcast Production']],
            ['icon'=>'📡','title'=>'Hybrid & Virtual Events',    'desc'=>'Seamlessly blending physical and digital audiences for maximum reach without compromising on production quality.','details'=>['Streaming Infrastructure','Interactive Platform Setup','Virtual Audience Engagement','Technical Support Team']],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 cards-stagger">
            <?php foreach ($eventTypes as $et): ?>
            <div class="stagger-item group bg-white border border-neutral-200 hover:border-brand-orange/40 p-7 rounded-[2rem] transition-all duration-500 hover:shadow-[0_20px_40px_rgba(244,124,32,0.08)] hover:-translate-y-1">
                <div class="text-3xl mb-5"><?= $et['icon'] ?></div>
                <h3 class="font-display font-bold text-xl text-brand-dark mb-3 group-hover:text-brand-orange transition-colors"><?= $et['title'] ?></h3>
                <p class="text-neutral-500 text-sm leading-relaxed mb-5 font-sans"><?= $et['desc'] ?></p>
                <ul class="space-y-1.5">
                    <?php foreach ($et['details'] as $d): ?>
                    <li class="flex items-center gap-2">
                        <span class="text-brand-orange text-xs">✓</span>
                        <span class="text-neutral-600 text-xs font-sans"><?= $d ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CASE EXAMPLES ── -->
<section class="py-24 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-1/3 right-1/4 w-[400px] h-[400px] bg-brand-orange/5 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#TransformativeCases</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none">Events We've Orchestrated</h2>
        </div>
        <?php
        $cases = [
            ['category'=>'Government Summits',       'title'=>'African Trade Alliance Expo',   'stat1'=>'15 Head of State Delegations','stat2'=>'Live International Broadcast','img'=>'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=85'],
            ['category'=>'Corporate Events',         'title'=>'NextGen Tech Summit',           'stat1'=>'1,200+ Delegates','stat2'=>'45 Global Speakers','img'=>'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=85'],
            ['category'=>'Product Launches',         'title'=>'Brand Reveal Arena',            'stat1'=>'3.2M Livestream Views','stat2'=>'150+ Media Partners','img'=>'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=800&q=85'],
            ['category'=>'Experiential Marketing',   'title'=>'Chroma Immersive Pavilions',    'stat1'=>'45k+ Foot Traffic','stat2'=>'+110% Brand Recall','img'=>'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=85'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 cards-stagger">
            <?php foreach ($cases as $c): ?>
            <div class="stagger-item group relative bg-[#121214] rounded-[2.5rem] overflow-hidden aspect-[4/3] shadow-lg border border-neutral-100/10 cursor-pointer">
                <div class="w-full h-full relative overflow-hidden img-mask-wrap">
                    <img src="<?= $c['img'] ?>" alt="<?= $c['title'] ?>" class="w-full h-full object-cover transition-all duration-1000 scale-100 group-hover:scale-110 group-hover:rotate-1 filter grayscale-[15%] group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90"></div>
                </div>
                <div class="absolute top-6 left-6">
                    <span class="text-[10px] font-mono px-3.5 py-1.5 bg-black/60 backdrop-blur-md text-brand-orange border border-white/10 rounded-full font-bold"><?= $c['category'] ?></span>
                </div>
                <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between gap-4 z-10">
                    <div>
                        <p class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest mb-1.5"><?= $c['stat1'] ?></p>
                        <h3 class="font-display font-bold text-xl text-white tracking-tight leading-none"><?= $c['title'] ?></h3>
                        <p class="text-white/60 text-xs mt-2 font-sans"><?= $c['stat2'] ?></p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-orange text-white flex items-center justify-center transition-all duration-500 shadow-lg group-hover:scale-110 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="py-20 px-4 md:px-8 bg-brand-light">
    <div class="max-w-4xl mx-auto text-center reveal-text">
        <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#PlanYourEvent</span>
        <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none mb-6">
            Ready for Flawless<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Event Execution?</span>
        </h2>
        <p class="text-neutral-500 text-base mb-10 max-w-xl mx-auto font-sans">Contact our events team to begin planning your next government summit, corporate conference, or experiential activation.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 bg-brand-orange text-white text-xs font-bold tracking-wider px-8 py-4 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
            Request Event Brief
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<script>
gsap.fromTo('#events-hero', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1, ease: 'power3.out', delay: 1.5 });
</script>
