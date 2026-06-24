import React, { useState, useEffect, useRef } from "react";
import { ArrowUpRight, CheckCircle2, Star, Sparkles, MessageSquare, Flame } from "lucide-react";
import gsap from "gsap";

export default function Hero() {
  // Focus Mode toggle mimicking the reference image's Smart Home switch (yellow/orange capsule toggle)
  const [focusMode, setFocusMode] = useState<"marketing" | "events">("marketing");
  const heroContainerRef = useRef<HTMLDivElement>(null);
  const titleRef = useRef<HTMLHeadingElement>(null);
  const tagsRef = useRef<HTMLDivElement>(null);
  const mockupRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    // Initial entrance animation
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });
    
    tl.fromTo(
      heroContainerRef.current,
      { opacity: 0, scale: 0.98 },
      { opacity: 1, scale: 1, duration: 1.2 }
    );
    
    if (titleRef.current) {
      tl.fromTo(
        titleRef.current.querySelectorAll(".title-word"),
        { y: 50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.15 },
        "-=0.8"
      );
    }

    if (tagsRef.current) {
      tl.fromTo(
        tagsRef.current.children,
        { scale: 0.8, opacity: 0 },
        { scale: 1, opacity: 1, duration: 0.5, stagger: 0.08 },
        "-=0.4"
      );
    }

    if (mockupRef.current) {
      tl.fromTo(
        mockupRef.current,
        { x: 50, opacity: 0, scale: 0.95 },
        { x: 0, opacity: 1, scale: 1, duration: 1 },
        "-=0.6"
      );
    }
  }, []);

  // Handle focus mode toggle animation
  useEffect(() => {
    const textTarget = document.querySelector(".focus-mode-text");
    if (textTarget) {
      gsap.fromTo(
        textTarget,
        { opacity: 0, y: 10 },
        { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
      );
    }
  }, [focusMode]);

  const scrollToContact = () => {
    const element = document.getElementById("contact");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <div className="pt-24 pb-12 px-4 md:px-8 bg-brand-light">
      <div
        ref={heroContainerRef}
        className="max-w-7xl mx-auto mesh-bg rounded-[2.5rem] md:rounded-[3.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl border border-white/5"
      >
        {/* Decorative Grid Overlays */}
        <div className="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]" />
        
        {/* Glowing Ambient Spotlights */}
        <div className={`absolute top-0 right-0 w-96 h-96 rounded-full blur-[120px] transition-all duration-1000 ${
          focusMode === "marketing" ? "bg-brand-orange/20" : "bg-brand-gold/20"
        } pointer-events-none`} />

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center relative z-10">
          
          {/* Left Column: Text Content & Controller */}
          <div className="lg:col-span-7 flex flex-col justify-center text-left">
            
            {/* Top tiny label with sparkle */}
            <div className="flex items-center gap-2 mb-6">
              <span className="flex h-2 w-2 relative">
                <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-orange opacity-75"></span>
                <span className="relative inline-flex rounded-full h-2 w-2 bg-brand-orange"></span>
              </span>
              <span className="text-xs font-mono text-neutral-400 tracking-[0.25em] uppercase flex items-center gap-1.5">
                <Sparkles className="w-3.5 h-3.5 text-brand-orange animate-spin-slow" />
                Next-Gen Growth Agency
              </span>
            </div>

            {/* Headline with dynamic Focus Mode Switch */}
            <h1
              ref={titleRef}
              className="font-display font-bold text-4xl md:text-6xl text-white tracking-tight leading-[1.1] mb-6"
            >
              <span className="block title-word">Amplified Reach</span>
              <div className="flex flex-wrap items-center gap-3 md:gap-4 title-word my-2">
                <span>With Strategic</span>
                {/* Micro-interaction Pill Switch based on the reference image */}
                <div 
                  onClick={() => setFocusMode(focusMode === "marketing" ? "events" : "marketing")}
                  className="inline-flex items-center gap-2 bg-[#2a2a2e] border border-white/10 p-1 rounded-full cursor-pointer relative h-10 w-24 md:h-11 md:w-28 select-none transition-all duration-300 hover:border-brand-orange shadow-[inset_0_2px_4px_rgba(0,0,0,0.4)]"
                >
                  <div 
                    className={`absolute top-1 bottom-1 w-10 md:w-12 bg-gradient-to-r from-brand-orange to-brand-gold rounded-full flex items-center justify-center transition-all duration-500 shadow-lg ${
                      focusMode === "marketing" ? "left-1" : "left-[calc(100%-2.75rem)] md:left-[calc(100%-3.25rem)]"
                    }`}
                  >
                    <Flame className="w-4.5 h-4.5 text-white animate-pulse" />
                  </div>
                </div>
              </div>
              <span className="block text-transparent bg-clip-text bg-gradient-to-r from-brand-orange via-brand-gold to-white title-word">
                Goldstar Impact
              </span>
            </h1>

            {/* Sub-headline description */}
            <p className="text-neutral-400 text-sm md:text-base leading-relaxed max-w-lg mb-8">
              Welcome to a landscape where your brand voice commands absolute attention. We blend high-intent{" "}
              <span className="text-white font-medium focus-mode-text">
                {focusMode === "marketing" 
                  ? "digital marketing, PR, and strategic communication systems"
                  : "experiential events, product launches, and production dynamics"
                }
              </span>{" "}
              into synchronized pipelines of growth, conversion, and global trust.
            </p>

            {/* Buttons Row with micro-interactions */}
            <div className="flex flex-wrap items-center gap-4 mb-10">
              <button 
                onClick={scrollToContact}
                className="group flex items-center gap-2 bg-gradient-to-r from-brand-orange to-brand-gold hover:from-brand-orange hover:to-brand-orange text-white text-xs font-bold tracking-wider px-6 py-3.5 rounded-full transition-all duration-300 shadow-[0_4px_25px_rgba(244,124,32,0.35)] hover:shadow-[0_4px_30px_rgba(244,124,32,0.5)] hover:-translate-y-0.5"
              >
                Explore Services
                <ArrowUpRight className="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
              </button>
              
              <div className="flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full">
                <CheckCircle2 className="w-4 h-4 text-brand-gold" />
                <span className="text-xs text-neutral-300 font-medium font-mono">100% Secure Agency</span>
              </div>
            </div>

            {/* Interactive Hashtags mimicking the reference image's footer inside the hero */}
            <div 
              ref={tagsRef}
              className="flex flex-wrap gap-2 pt-6 border-t border-white/10"
            >
              {[
                { tag: "#StrategicMarketing", active: focusMode === "marketing" },
                { tag: "#EventProduction", active: focusMode === "events" },
                { tag: "#BrandDevelopment", active: true },
                { tag: "#PublicRelations", active: true }
              ].map((pill, idx) => (
                <span
                  key={idx}
                  className={`text-[10px] md:text-xs font-mono px-3.5 py-1.5 rounded-full transition-all duration-500 border ${
                    pill.active 
                      ? "bg-brand-orange/15 border-brand-orange/40 text-brand-orange shadow-[0_0_15px_rgba(244,124,32,0.15)]"
                      : "bg-white/5 border-white/10 text-neutral-400 hover:border-white/20 hover:text-white"
                  }`}
                >
                  {pill.tag}
                </span>
              ))}
            </div>

          </div>

          {/* Right Column: Premium Mockup/Visual & overlapping stats */}
          <div className="lg:col-span-5 relative" ref={mockupRef}>
            <div className="relative mx-auto max-w-[340px] md:max-w-[380px] aspect-[4/5] rounded-[2rem] overflow-hidden border border-white/10 bg-neutral-900/40 p-4 shadow-2xl backdrop-blur-3xl group">
              
              {/* Decorative element resembling the microwave/oven screen in reference image */}
              <div className="absolute top-4 right-4 bg-brand-dark/90 border border-white/10 p-3 rounded-2xl w-28 text-center shadow-lg pointer-events-none z-20">
                <span className="block text-[9px] font-mono text-brand-orange uppercase tracking-widest mb-1">Live Feed</span>
                <span className="block text-lg font-bold text-white font-mono">ROI 15X</span>
                <span className="text-[8px] text-neutral-400 font-mono">Real-time stats</span>
              </div>

              {/* Central Premium Graphic */}
              <div className="w-full h-full rounded-[1.5rem] overflow-hidden relative">
                <img 
                  src={focusMode === "marketing"
                    ? "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=85"
                    : "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=85"
                  } 
                  alt="Goldstar Marketing Showcase" 
                  className="w-full h-full object-cover grayscale-[30%] hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-110"
                />
                
                {/* Image Gradient Overlay */}
                <div className="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent" />

                {/* Overlapping Bottom Banner on Image (mimicking "Use Our Services" panel in image) */}
                <div className="absolute bottom-4 left-4 right-4 bg-[#121214]/95 border border-white/10 p-4 rounded-xl backdrop-blur-md z-10">
                  <div className="flex items-center justify-between">
                    <div>
                      <p className="text-[10px] font-mono text-brand-orange tracking-wider uppercase mb-1">Campaign Lead Velocity</p>
                      <h4 className="text-white text-sm font-display font-semibold">Join Our Growing Partners</h4>
                    </div>
                    <div className="w-8 h-8 bg-brand-orange rounded-full flex items-center justify-center text-white shadow-lg">
                      <ArrowUpRight className="w-4 h-4" />
                    </div>
                  </div>
                  
                  {/* User avatars overlap row mimicking the 250k+ leads row in image */}
                  <div className="flex items-center gap-2 mt-3 pt-3 border-t border-white/5">
                    <div className="flex -space-x-2 overflow-hidden">
                      <img className="inline-block h-6 w-6 rounded-full ring-2 ring-[#121214]" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" alt="Client 1" />
                      <img className="inline-block h-6 w-6 rounded-full ring-2 ring-[#121214]" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80" alt="Client 2" />
                      <img className="inline-block h-6 w-6 rounded-full ring-2 ring-[#121214]" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?auto=format&fit=crop&w=80&q=80" alt="Client 3" />
                    </div>
                    <span className="text-[10px] font-mono text-neutral-400">
                      Trusted by <span className="text-white font-semibold">250+</span> global corporations
                    </span>
                  </div>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  );
}
