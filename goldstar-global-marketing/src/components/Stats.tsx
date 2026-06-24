import React, { useEffect, useRef, useState } from "react";
import { STATS } from "../data";
import { Award, Star, Compass, HelpCircle } from "lucide-react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function Stats() {
  const containerRef = useRef<HTMLDivElement>(null);
  const [counts, setCounts] = useState(STATS.map(() => 0));

  useEffect(() => {
    // Trigger count-up animation when section is scrolled into view
    ScrollTrigger.create({
      trigger: containerRef.current,
      start: "top 85%",
      onEnter: () => {
        STATS.forEach((stat, idx) => {
          const duration = 2; // seconds
          const steps = 60;
          const stepTime = (duration * 1000) / steps;
          let currentStep = 0;

          const interval = setInterval(() => {
            currentStep++;
            setCounts((prev) => {
              const next = [...prev];
              const progress = currentStep / steps;
              // Smooth easing count-up
              const easedProgress = 1 - Math.pow(1 - progress, 3);
              next[idx] = Math.floor(easedProgress * stat.value);
              return next;
            });

            if (currentStep >= steps) {
              clearInterval(interval);
              setCounts((prev) => {
                const next = [...prev];
                next[idx] = stat.value;
                return next;
              });
            }
          }, stepTime);
        });
      },
      once: true,
    });

    // Fade-in animation for dividers and headings
    gsap.fromTo(
      containerRef.current?.querySelectorAll(".stats-item") || [],
      { opacity: 0, y: 30 },
      {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: "power2.out",
        scrollTrigger: {
          trigger: containerRef.current,
          start: "top 80%",
        },
      }
    );
  }, []);

  return (
    <div
      id="stats"
      ref={containerRef}
      className="py-20 md:py-28 bg-[#0a0a0b] text-white border-y border-white/5 relative overflow-hidden"
    >
      <div className="absolute inset-0 bg-[radial-gradient(circle_at_50%_120%,rgba(244,124,32,0.06),transparent_60%)] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        
        {/* Header mimicking "Purpose to Quality of Life" styling */}
        <div className="text-center max-w-2xl mx-auto mb-16 stats-item text-balance">
          <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
            #TrustMetrics
          </span>
          <h2 className="font-display font-bold text-3xl md:text-5xl tracking-tight leading-none text-white">
            Purpose to Measurable Growth
          </h2>
          <p className="text-neutral-400 text-xs md:text-sm mt-4">
            We hold ourselves strictly accountable to business metrics. Every event, digital pipeline, and PR communication exists to secure client dominance and drive high-intent client action.
          </p>
        </div>

        {/* Counter Grid */}
        <div className="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">
          {STATS.map((stat, idx) => (
            <div
              key={idx}
              className="stats-item flex flex-col items-center justify-center p-6 bg-white/5 border border-white/5 rounded-3xl backdrop-blur-sm transition-all duration-300 hover:border-brand-orange/20 hover:bg-white/10"
            >
              <div className="flex items-baseline justify-center">
                <span className="text-4xl md:text-6xl font-display font-bold text-transparent bg-clip-text bg-gradient-to-br from-white via-neutral-100 to-brand-orange tracking-tighter">
                  {counts[idx]}
                </span>
                <span className="text-2xl md:text-3xl font-display font-bold text-brand-orange ml-0.5">
                  {stat.suffix}
                </span>
              </div>
              
              <div className="w-8 h-0.5 bg-brand-orange/30 my-4 rounded-full" />
              
              <p className="text-neutral-400 text-xs md:text-sm font-medium tracking-wide text-center">
                {stat.label}
              </p>
            </div>
          ))}
        </div>

      </div>
    </div>
  );
}
