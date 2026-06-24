import React, { useEffect, useRef, useState } from "react";
import { SERVICES } from "../data";
import { ArrowRight, Star, ShieldCheck, Sparkles, Megaphone, Calendar, BarChart3, HelpCircle } from "lucide-react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function Capabilities() {
  const containerRef = useRef<HTMLDivElement>(null);
  const cardsRef = useRef<HTMLDivElement>(null);
  const headerRef = useRef<HTMLDivElement>(null);
  const [selectedService, setSelectedService] = useState<string | null>(null);

  useEffect(() => {
    // Header elegant fade & upward slide
    gsap.fromTo(
      headerRef.current,
      { y: 30, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
          trigger: containerRef.current,
          start: "top 80%",
          toggleActions: "play none none none",
        },
      }
    );

    // Staggered reveal of capability cards
    if (cardsRef.current) {
      gsap.fromTo(
        cardsRef.current.children,
        { y: 50, opacity: 0, scale: 0.98 },
        {
          y: 0,
          opacity: 1,
          scale: 1,
          duration: 1,
          stagger: 0.2,
          ease: "power3.out",
          scrollTrigger: {
            trigger: cardsRef.current,
            start: "top 75%",
            toggleActions: "play none none none",
          },
        }
      );
    }
  }, []);

  const getServiceIcon = (id: string) => {
    switch (id) {
      case "strategic-marketing":
        return <Megaphone className="w-5 h-5" />;
      case "event-services":
        return <Calendar className="w-5 h-5" />;
      case "campaign-management":
        return <BarChart3 className="w-5 h-5" />;
      default:
        return <Sparkles className="w-5 h-5" />;
    }
  };

  return (
    <div
      id="capabilities"
      ref={containerRef}
      className="py-24 bg-[#0a0a0b] text-white relative overflow-hidden"
    >
      {/* Mesh lines for futuristic/modern atmosphere */}
      <div className="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.01)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.01)_1px,transparent_1px)] bg-[size:3rem_3rem] pointer-events-none" />

      {/* Radiant glow spots */}
      <div className="absolute top-1/3 right-1/4 w-[500px] h-[500px] bg-brand-orange/5 rounded-full blur-[140px] pointer-events-none" />
      <div className="absolute bottom-10 left-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-6 md:px-12 relative z-10 text-left">
        
        {/* Section Header */}
        <div ref={headerRef} className="max-w-3xl mb-16">
          <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
            #OurCapabilities
          </span>
          <h2 className="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-none mb-6">
            Unveiling Our Capabilities
          </h2>
          <p className="text-neutral-400 text-sm md:text-base leading-relaxed max-w-2xl">
            We operate at the convergence of persuasion and experience. Every marketing initiative and experiential production is fully aligned with structural brand objectives to lock in client growth and market share.
          </p>
        </div>

        {/* Dynamic Service Grid (Replicating the look & feel of the "Unveiling Our Features" row) */}
        <div ref={cardsRef} className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          {SERVICES.map((srv) => (
            <div
              key={srv.id}
              className="group bg-[#121214] border border-white/5 hover:border-brand-orange/30 p-8 rounded-[2rem] transition-all duration-500 hover:shadow-[0_20px_40px_rgba(244,124,32,0.1)] flex flex-col justify-between h-full relative overflow-hidden cursor-pointer hover:-translate-y-1.5"
              onClick={() => setSelectedService(selectedService === srv.id ? null : srv.id)}
            >
              {/* Card top flare */}
              <div className="absolute top-0 left-1/2 -translate-x-1/2 w-40 h-px bg-gradient-to-r from-transparent via-brand-orange/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700" />

              <div>
                {/* Pill Tag from reference image */}
                <div className="flex items-center justify-between mb-8">
                  <span className="text-[10px] font-mono px-3.5 py-1.5 bg-brand-orange/10 border border-brand-orange/20 rounded-full text-brand-orange font-semibold">
                    {srv.tag}
                  </span>
                  
                  {/* Rotating Icon */}
                  <div className="w-9 h-9 rounded-xl bg-white/5 flex items-center justify-center text-neutral-400 group-hover:text-brand-orange group-hover:bg-brand-orange/10 transition-all duration-500 group-hover:rotate-12">
                    {getServiceIcon(srv.id)}
                  </div>
                </div>

                {/* Card Title */}
                <h3 className="font-display font-bold text-lg md:text-xl text-white tracking-tight group-hover:text-brand-orange transition-colors duration-300 mb-4">
                  {srv.title}
                </h3>

                {/* Card Body */}
                <p className="text-neutral-400 text-xs md:text-sm leading-relaxed mb-6">
                  {srv.description}
                </p>
              </div>

              {/* Bullet details visible with smooth dropdown style or on hover */}
              <div className={`space-y-2 mt-2 transition-all duration-500 overflow-hidden ${
                selectedService === srv.id ? "max-h-[300px] opacity-100 border-t border-white/5 pt-4 mb-4" : "max-h-0 opacity-0"
              }`}>
                {srv.details.map((detail, idx) => (
                  <div key={idx} className="flex items-start gap-2">
                    <span className="text-brand-orange font-bold mt-1 text-xs">✓</span>
                    <span className="text-neutral-300 text-xs font-medium">{detail}</span>
                  </div>
                ))}
              </div>

              {/* Bottom Card Link */}
              <div className="flex items-center justify-between border-t border-white/5 pt-4 mt-4">
                <span className="text-[10px] font-mono text-neutral-500 group-hover:text-neutral-300 transition-colors">
                  {selectedService === srv.id ? "Click to fold details" : "Click to view deliverables"}
                </span>
                <div className="w-7 h-7 rounded-full bg-white/5 flex items-center justify-center text-neutral-400 group-hover:text-white group-hover:bg-brand-orange transition-all duration-500">
                  <ArrowRight className="w-3.5 h-3.5" />
                </div>
              </div>

            </div>
          ))}
        </div>

        {/* Bottom micro-info box */}
        <div className="bg-white/5 border border-white/10 rounded-2xl p-6 flex flex-col sm:flex-row items-center justify-between gap-6">
          <div className="flex items-center gap-3">
            <div className="p-2.5 bg-brand-orange/20 rounded-xl text-brand-orange">
              <ShieldCheck className="w-6 h-6" />
            </div>
            <div>
              <p className="text-sm font-semibold font-display text-white">Need a customized integration framework?</p>
              <p className="text-xs text-neutral-400 mt-0.5">We provide bespoke advisory for national conglomerates and fast-scaling entities.</p>
            </div>
          </div>
          <button
            onClick={() => {
              const element = document.getElementById("contact");
              if (element) element.scrollIntoView({ behavior: "smooth" });
            }}
            className="w-full sm:w-auto text-center px-6 py-3 bg-brand-orange hover:bg-brand-orange/90 text-white font-semibold text-xs rounded-full tracking-wider transition-all shadow-md hover:shadow-lg"
          >
            Schedule Advisory
          </button>
        </div>

      </div>
    </div>
  );
}
