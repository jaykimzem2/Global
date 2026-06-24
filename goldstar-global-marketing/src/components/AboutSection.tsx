import React, { useState, useEffect, useRef } from "react";
import { Play, X, Compass, Activity, ArrowUpRight, TrendingUp, Users, Target } from "lucide-react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function AboutSection() {
  const [isVideoOpen, setIsVideoOpen] = useState(false);
  const [activeTab, setActiveTab] = useState<"ctr" | "leads" | "roi">("ctr");
  
  const sectionRef = useRef<HTMLDivElement>(null);
  const leftColRef = useRef<HTMLDivElement>(null);
  const rightColRef = useRef<HTMLDivElement>(null);
  
  // Simulation numbers
  const [stats, setStats] = useState({ ctr: 4.8, leads: 1240, roi: 12.4 });

  useEffect(() => {
    // Elegant slide-up on scroll
    gsap.fromTo(
      leftColRef.current,
      { y: 50, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 80%",
          toggleActions: "play none none none",
        },
      }
    );

    gsap.fromTo(
      rightColRef.current,
      { y: 70, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 75%",
          toggleActions: "play none none none",
        },
      }
    );
  }, []);

  // Simulator interval
  useEffect(() => {
    const timer = setInterval(() => {
      setStats((prev) => ({
        ctr: parseFloat((prev.ctr + (Math.random() * 0.4 - 0.2)).toFixed(2)),
        leads: prev.leads + Math.floor(Math.random() * 5 - 2),
        roi: parseFloat((prev.roi + (Math.random() * 0.2 - 0.1)).toFixed(1)),
      }));
    }, 2000);
    return () => clearInterval(timer);
  }, []);

  return (
    <div id="about" ref={sectionRef} className="py-20 md:py-32 bg-brand-light relative overflow-hidden">
      
      {/* Decorative ambient background elements */}
      <div className="absolute top-1/2 left-0 w-72 h-72 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none" />
      <div className="absolute bottom-0 right-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-6 md:px-12">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
          
          {/* Left Column: Authoritative Copy */}
          <div ref={leftColRef} className="lg:col-span-6 flex flex-col justify-center text-left">
            <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
              #StrategicPartner
            </span>
            <h2 className="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-[1.15] mb-6">
              Your Strategic Partner,<br />
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-brand-gold">
                Your Competitive Edge
              </span>
            </h2>
            
            <p className="text-neutral-600 text-sm md:text-base leading-relaxed mb-6">
              In today's hyper-competitive global landscape, mediocrity is invisible. Goldstar Global Marketing Company exists to lift your brand above the noise, establishing durable authority and driving high-intent client action.
            </p>
            
            <p className="text-neutral-600 text-sm md:text-base leading-relaxed mb-8">
              We do not rely on speculative templates or weak automated channels. Instead, we architect synchronized marketing systems—combining structural brand development, state-of-the-art corporate event production, performance digital marketing, and persuasive public relations.
            </p>

            <div className="flex flex-col sm:flex-row gap-4 mb-8">
              <div className="flex items-start gap-3 p-4 bg-white rounded-2xl border border-brand-gray shadow-sm hover:shadow-md transition-shadow">
                <div className="p-2.5 bg-brand-orange/10 rounded-xl text-brand-orange mt-1">
                  <Compass className="w-5 h-5" />
                </div>
                <div>
                  <h4 className="font-display font-semibold text-sm text-brand-dark">Strategic Clarity</h4>
                  <p className="text-xs text-neutral-500 mt-1">Tailored positioning roadmaps aligned strictly with market intelligence.</p>
                </div>
              </div>

              <div className="flex items-start gap-3 p-4 bg-white rounded-2xl border border-brand-gray shadow-sm hover:shadow-md transition-shadow">
                <div className="p-2.5 bg-brand-gold/10 rounded-xl text-brand-gold mt-1">
                  <Activity className="w-5 h-5" />
                </div>
                <div>
                  <h4 className="font-display font-semibold text-sm text-brand-dark">Absolute Precision</h4>
                  <p className="text-xs text-neutral-500 mt-1">Real-time performance attribution and logistical event mastery.</p>
                </div>
              </div>
            </div>

            <button
              onClick={() => {
                const element = document.getElementById("contact");
                if (element) element.scrollIntoView({ behavior: "smooth" });
              }}
              className="self-start group flex items-center gap-2 bg-brand-dark hover:bg-brand-dark/90 text-white text-xs font-semibold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5"
            >
              Collaborate With Us
              <ArrowUpRight className="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
            </button>
          </div>

          {/* Right Column: Interactive Phone/Dashboard Mockup representing the reference image */}
          <div ref={rightColRef} className="lg:col-span-6">
            <div className="relative mx-auto max-w-[420px] bg-brand-gray p-6 rounded-[2.5rem] border border-neutral-200/60 shadow-xl overflow-hidden">
              
              {/* Decorative phone notch */}
              <div className="absolute top-6 left-1/2 -translate-x-1/2 w-32 h-6 bg-brand-dark rounded-full z-20 flex items-center justify-around px-4">
                <div className="w-2.5 h-2.5 bg-neutral-800 rounded-full" />
                <div className="w-12 h-1 bg-neutral-800 rounded-full" />
              </div>

              {/* Simulated Interactive Mobile Interface */}
              <div className="bg-white rounded-[1.8rem] p-6 pt-10 min-h-[460px] shadow-inner relative flex flex-col justify-between">
                
                {/* Header of simulated dashboard */}
                <div>
                  <div className="flex items-center justify-between mb-6">
                    <div>
                      <span className="text-[10px] font-mono text-neutral-400 uppercase tracking-widest block">Client Portal</span>
                      <h3 className="font-display font-bold text-lg text-brand-dark">Goldstar Dashboard</h3>
                    </div>
                    <span className="text-xs font-mono px-2.5 py-1 bg-green-50 text-green-600 rounded-full font-medium flex items-center gap-1">
                      <span className="w-1.5 h-1.5 bg-green-500 rounded-full animate-ping" />
                      Live Feed
                    </span>
                  </div>

                  {/* Tabs mimicking the layout details */}
                  <div className="grid grid-cols-3 gap-2 mb-6">
                    {[
                      { key: "ctr", label: "Click Rate", icon: TrendingUp },
                      { key: "leads", label: "Leads Vol", icon: Users },
                      { key: "roi", label: "ROI Scale", icon: Target },
                    ].map((tab) => (
                      <button
                        key={tab.key}
                        onClick={() => setActiveTab(tab.key as any)}
                        className={`p-2 rounded-xl border text-center transition-all duration-300 ${
                          activeTab === tab.key
                            ? "bg-brand-dark border-brand-dark text-white shadow-md"
                            : "bg-brand-gray border-neutral-100 text-neutral-500 hover:bg-neutral-100"
                        }`}
                      >
                        <tab.icon className="w-4 h-4 mx-auto mb-1" />
                        <span className="text-[10px] font-medium font-display block">{tab.label}</span>
                      </button>
                    ))}
                  </div>

                  {/* Simulated Chart/Metrics Panel */}
                  <div className="bg-brand-gray rounded-2xl p-5 border border-neutral-100/80 relative overflow-hidden">
                    <p className="text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Campaign Performance Metric</p>
                    
                    <div className="flex items-baseline gap-2">
                      <span className="text-3xl font-display font-bold text-brand-dark tracking-tight">
                        {activeTab === "ctr" && `${stats.ctr}%`}
                        {activeTab === "leads" && `${stats.leads}`}
                        {activeTab === "roi" && `${stats.roi}X`}
                      </span>
                      <span className="text-xs font-semibold text-green-600 font-mono">+18.4% MoM</span>
                    </div>

                    {/* Styled Vector Waveform mimicking real telemetry dashboard */}
                    <div className="h-16 flex items-end gap-1.5 mt-4">
                      {[30, 45, 35, 60, 40, 55, 70, 50, 65, 80, 60, 75, 90, 85].map((h, i) => (
                        <div
                          key={i}
                          className="flex-1 bg-brand-orange/20 rounded-full transition-all duration-500"
                          style={{
                            height: `${h}%`,
                            backgroundColor: activeTab === "ctr" ? "#f47c20" : activeTab === "leads" ? "#f59e0b" : "#121214",
                          }}
                        />
                      ))}
                    </div>
                  </div>
                </div>

                {/* Simulated play button panel (Mimicking the visual in reference image with yellow play-video button) */}
                <div className="mt-6 pt-4 border-t border-neutral-100 flex items-center justify-between gap-4">
                  <div className="text-left">
                    <p className="text-[10px] font-mono text-brand-orange font-bold uppercase">Case Presentation</p>
                    <p className="text-xs text-neutral-600 font-medium">Goldstar Marketing - Modern strategy with customized solutions.</p>
                  </div>
                  
                  {/* Real-acting yellow play button mimicking image */}
                  <button
                    onClick={() => setIsVideoOpen(true)}
                    className="relative w-12 h-12 flex-shrink-0 bg-brand-orange hover:bg-brand-orange/90 text-white rounded-full flex items-center justify-center transition-all duration-300 shadow-[0_4px_15px_rgba(244,124,32,0.35)] hover:scale-110"
                    aria-label="Play Reel"
                  >
                    <Play className="w-5 h-5 ml-0.5 fill-current text-white animate-pulse" />
                    <span className="absolute inset-0 bg-brand-orange/30 rounded-full animate-ping" />
                  </button>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

      {/* Cinematic High-Fidelity Video Modal Overlay */}
      {isVideoOpen && (
        <div className="fixed inset-0 bg-brand-dark/95 z-50 flex items-center justify-center p-4 backdrop-blur-md">
          <div className="relative w-full max-w-4xl bg-[#121214] border border-white/10 rounded-3xl overflow-hidden shadow-2xl">
            <button
              onClick={() => setIsVideoOpen(false)}
              className="absolute top-4 right-4 text-neutral-400 hover:text-white bg-white/5 hover:bg-white/10 p-2 rounded-full transition-all duration-300 z-10"
            >
              <X className="w-5 h-5" />
            </button>
            <div className="p-8 md:p-12 text-left">
              <span className="text-xs font-mono text-brand-orange tracking-widest uppercase mb-2 block">
                #CinematicPresentation
              </span>
              <h3 className="font-display font-bold text-2xl md:text-3xl text-white mb-6">
                Goldstar Global Agency Showreel
              </h3>
              
              {/* Video placeholder showcasing rich interactive content */}
              <div className="aspect-video bg-neutral-900 rounded-2xl relative overflow-hidden flex items-center justify-center border border-white/5">
                <img 
                  src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1200&q=85" 
                  className="absolute inset-0 w-full h-full object-cover opacity-60" 
                  alt="Showcase Summit" 
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent" />
                <div className="relative text-center z-10 p-6">
                  <div className="w-16 h-16 bg-brand-orange text-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                    <Play className="w-6 h-6 ml-1 fill-current" />
                  </div>
                  <p className="text-white font-semibold font-display">Experience Immersive Production</p>
                  <p className="text-xs text-neutral-300 mt-1 max-w-sm mx-auto">This interactive presentation illustrates our national summit operations and digital campaign infrastructure.</p>
                </div>
              </div>

              <div className="mt-6 flex flex-wrap justify-between items-center gap-4 border-t border-white/10 pt-6">
                <div className="text-neutral-400 text-xs">
                  Running Time: <span className="text-white font-mono">1:45</span> | Quality: <span className="text-white font-mono">4K HDR</span>
                </div>
                <button
                  onClick={() => setIsVideoOpen(false)}
                  className="bg-white/10 hover:bg-white/15 text-white px-5 py-2 rounded-full text-xs font-semibold tracking-wide transition-all duration-300"
                >
                  Close Reel
                </button>
              </div>
            </div>
          </div>
        </div>
      )}

    </div>
  );
}
