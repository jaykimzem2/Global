import React, { useEffect, useRef } from "react";
import { PROJECTS } from "../data";
import { ArrowUpRight, Award, Plus, Layers } from "lucide-react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function Projects() {
  const containerRef = useRef<HTMLDivElement>(null);
  const gridRef = useRef<HTMLDivElement>(null);
  const titleRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    // Title reveal
    gsap.fromTo(
      titleRef.current,
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

    // Staggered reveal for projects with custom mask animation
    if (gridRef.current) {
      const children = gridRef.current.children;
      Array.from(children).forEach((child) => {
        gsap.fromTo(
          child as HTMLElement,
          { y: 60, opacity: 0, scale: 0.95 },
          {
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
              trigger: child as HTMLElement,
              start: "top 85%",
              toggleActions: "play none none none",
            },
          }
        );
      });
    }
  }, []);

  return (
    <div
      id="projects"
      ref={containerRef}
      className="py-24 bg-brand-light relative overflow-hidden"
    >
      <div className="absolute top-0 right-0 w-80 h-80 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none" />
      <div className="absolute bottom-0 left-0 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-6 md:px-12">
        
        {/* Section Title mimicking reference styling */}
        <div ref={titleRef} className="flex flex-col md:flex-row md:items-end justify-between mb-16 text-left">
          <div className="max-w-xl">
            <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
              #ExperientialWorlds
            </span>
            <h2 className="font-display font-bold text-3xl md:text-5xl text-brand-dark tracking-tight leading-none">
              Transformative Cases
            </h2>
            <p className="text-neutral-500 text-xs md:text-sm mt-4 leading-relaxed">
              Explore how we design multi-sensory brand environments and high-ROI conversion pipelines that secure client market dominance.
            </p>
          </div>
          
          <div className="mt-6 md:mt-0 flex gap-4">
            <div className="flex items-center gap-1.5 px-3 py-1.5 bg-brand-dark text-white rounded-full text-xs font-mono">
              <Layers className="w-3.5 h-3.5" />
              <span>Multi-Platform Scale</span>
            </div>
          </div>
        </div>

        {/* Project grid replicating the exact 2x2 modular image block with round corners and arrow buttons */}
        <div ref={gridRef} className="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
          {PROJECTS.map((proj) => (
            <div
              key={proj.id}
              className="group relative bg-[#121214] rounded-[2.5rem] overflow-hidden aspect-[4/3] shadow-lg border border-neutral-100/10 cursor-pointer"
            >
              {/* Image with subtle zoom on hover */}
              <div className="w-full h-full relative overflow-hidden">
                <img
                  src={proj.image}
                  alt={proj.title}
                  className="w-full h-full object-cover transition-all duration-1000 ease-out scale-100 group-hover:scale-110 group-hover:rotate-1 filter grayscale-[15%] group-hover:grayscale-0"
                  referrerPolicy="no-referrer"
                />
                
                {/* Visual Gradient Mask Reveal Overlay */}
                <div className="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-300" />
              </div>

              {/* Floating metadata badges resembling the reference image cards */}
              <div className="absolute top-6 left-6 flex items-center gap-2">
                <span className="text-[10px] font-mono px-3.5 py-1.5 bg-black/60 backdrop-blur-md text-brand-orange border border-white/10 rounded-full font-bold">
                  {proj.category}
                </span>
              </div>

              {/* Bottom text block with hover activation */}
              <div className="absolute bottom-6 left-6 right-6 flex items-end justify-between gap-4 z-10 text-left">
                <div>
                  <p className="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest mb-1.5 flex items-center gap-1">
                    <Award className="w-3.5 h-3.5" />
                    Key Metric: {proj.stats.split(" | ")[0]}
                  </p>
                  <h3 className="font-display font-bold text-xl md:text-2xl text-white tracking-tight leading-none">
                    {proj.title}
                  </h3>
                  <p className="text-neutral-300 text-xs mt-2.5 opacity-80 group-hover:opacity-100 transition-opacity">
                    {proj.stats.split(" | ")[1] || "All metrics validated."}
                  </p>
                </div>

                {/* Animated rounded yellow/orange arrow button mimicking image */}
                <div className="w-12 h-12 rounded-full bg-brand-orange hover:bg-brand-orange/90 text-white flex items-center justify-center transition-all duration-500 shadow-lg group-hover:scale-110 flex-shrink-0">
                  <ArrowUpRight className="w-5 h-5 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                </div>
              </div>

              {/* Interactive subtle overlay grid to align with modern award aesthetics */}
              <div className="absolute inset-0 border-[8px] border-transparent group-hover:border-white/5 transition-all duration-500 rounded-[2.5rem] pointer-events-none" />
            </div>
          ))}
        </div>

      </div>
    </div>
  );
}
