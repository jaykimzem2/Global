<?php
$title    = "Governance & Structure | Goldstar Global Marketing";
$metaDesc = "Goldstar Global Marketing Company's institutional governance framework, board of directors, management structure, and operational transparency.";
include 'components/header.php';
?>

<!-- ── PAGE HERO ── -->
<section class="pt-36 pb-20 px-4 md:px-8 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-orange/6 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto text-center">
        <div id="gov-hero" class="opacity-0">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-6 block">#InstitutionalFramework</span>
            <h1 class="font-display font-bold text-4xl md:text-6xl text-white tracking-tight leading-[1.05] mb-6">
                Governance & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Structure</span>
            </h1>
            <p class="text-white/50 text-base md:text-lg leading-relaxed max-w-2xl mx-auto font-sans">
                The operational integrity of Goldstar Global is anchored in a formal governance structure, ensuring transparency, accountability, and institutional oversight at every level.
            </p>
        </div>
    </div>
</section>

<!-- ── GOVERNANCE CARDS ── -->
<section class="py-24 bg-brand-light relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#LeadershipStructure</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">Organizational Framework</h2>
        </div>
        <?php
        $govStructure = [
            [
                'level' => 'Board of Directors',
                'members' => [
                    ['name' => 'Peter Wairegi', 'role' => 'Chairman / Principal Strategist', 'img' => 'assets/CEO Peter Wairegi.png'],
                ]
            ],
            [
                'level' => 'Executive Management',
                'members' => [
                    ['name' => 'Mr. Njuki',  'role' => 'General Manager',    'img' => 'assets/Njuki.jpeg'],
                    ['name' => 'Mr. Kimani', 'role' => 'Commercial Director', 'img' => 'assets/Kimani.jpeg'],
                ]
            ],
            [
                'level' => 'Operations',
                'members' => [
                    ['name' => 'Ms. Odeka Ann', 'role' => 'Strategic Marketing', 'img' => 'assets/Odeka Ann.jpeg'],
                ]
            ],
        ];
        ?>
        <div class="space-y-12">
            <?php foreach ($govStructure as $tier): ?>
            <div class="reveal-text">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-px bg-brand-orange/30 flex-1"></div>
                    <span class="text-xs font-mono text-brand-orange font-bold uppercase tracking-widest px-4 py-1.5 border border-brand-orange/30 rounded-full"><?= $tier['level'] ?></span>
                    <div class="h-px bg-brand-orange/30 flex-1"></div>
                </div>
                <div class="flex flex-wrap justify-center gap-8 cards-stagger">
                    <?php foreach ($tier['members'] as $m): ?>
                    <div class="stagger-item group text-center w-52">
                        <div class="relative mx-auto mb-4 w-40 h-40 rounded-full overflow-hidden border-2 border-white/60 shadow-xl img-mask-wrap group-hover:border-brand-orange/50 transition-colors duration-500">
                            <img src="<?= $m['img'] ?>" alt="<?= $m['name'] ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <h4 class="font-display font-bold text-lg text-brand-dark mb-1"><?= $m['name'] ?></h4>
                        <p class="text-xs font-mono text-brand-orange uppercase tracking-wider font-semibold"><?= $m['role'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── GOVERNANCE PRINCIPLES ── -->
<section class="py-24 bg-brand-darker text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/4 w-[400px] h-[400px] bg-brand-orange/5 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12">
        <div class="text-center mb-16 reveal-text">
            <span class="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">#GovernancePrinciples</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none">How We Govern</h2>
        </div>
        <?php
        $principles = [
            ['icon'=>'⚖️','title'=>'Compliance & Ethics',   'desc'=>'All operations adhere to the highest standards of corporate governance, regulatory compliance, and ethical business practice.'],
            ['icon'=>'🔒','title'=>'Confidentiality',      'desc'=>'Every client engagement is protected by formal non-disclosure agreements. Client data and strategic information are never shared.'],
            ['icon'=>'📋','title'=>'Transparent Reporting', 'desc'=>'Regular performance reporting ensures clients and stakeholders maintain full visibility into project progress and financial accountability.'],
            ['icon'=>'🌐','title'=>'Global Standards',      'desc'=>'Our governance frameworks align with international best practices from both the Kenyan regulatory environment and our US heritage.'],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 cards-stagger">
            <?php foreach ($principles as $p): ?>
            <div class="stagger-item group bg-[#121214] border border-white/5 hover:border-brand-orange/30 p-7 rounded-[2rem] transition-all duration-500 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(244,124,32,0.1)]">
                <div class="text-3xl mb-5"><?= $p['icon'] ?></div>
                <h3 class="font-display font-bold text-lg text-white mb-3 group-hover:text-brand-orange transition-colors"><?= $p['title'] ?></h3>
                <p class="text-white/40 text-xs leading-relaxed font-sans"><?= $p['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="py-20 px-4 md:px-8 bg-brand-light">
    <div class="max-w-4xl mx-auto text-center reveal-text">
        <h2 class="font-display font-bold text-3xl md:text-4xl text-brand-dark tracking-tight leading-none mb-6">
            Questions About Our<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">Institutional Framework?</span>
        </h2>
        <p class="text-neutral-500 text-base mb-10 max-w-xl mx-auto font-sans">Contact our executive team for a formal capabilities assessment and governance briefing.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 bg-brand-orange text-white text-xs font-bold tracking-wider px-8 py-4 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:-translate-y-0.5 font-sans">
            Request Governance Briefing
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<script>
gsap.fromTo('#gov-hero', { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 1, ease: 'power3.out', delay: 1.5 });
</script>
