import React, { useState, useEffect, useRef } from "react";
import { TESTIMONIALS } from "../data";
import { Quote, ArrowLeft, ArrowRight, Star } from "lucide-react";
import gsap from "gsap";

export default function Testimonial() {
  const [currentIndex, setCurrentIndex] = useState(0);
  const testimonialCardRef = useRef<HTMLDivElement>(null);

  const handleNext = () => {
    gsap.to(testimonialCardRef.current, {
      opacity: 0,
      x: -30,
      duration: 0.3,
      onComplete: () => {
        setCurrentIndex((prev) => (prev + 1) % TESTIMONIALS.length);
        gsap.fromTo(
          testimonialCardRef.current,
          { opacity: 0, x: 30 },
          { opacity: 1, x: 0, duration: 0.4 }
        );
      },
    });
  };

  const handlePrev = () => {
    gsap.to(testimonialCardRef.current, {
      opacity: 0,
      x: 30,
      duration: 0.3,
      onComplete: () => {
        setCurrentIndex((prev) => (prev - 1 + TESTIMONIALS.length) % TESTIMONIALS.length);
        gsap.fromTo(
          testimonialCardRef.current,
          { opacity: 0, x: -30 },
          { opacity: 1, x: 0, duration: 0.4 }
        );
      },
    });
  };

  const current = TESTIMONIALS[currentIndex];

  return (
    <div id="testimonials" className="py-24 bg-brand-light relative overflow-hidden">
      <div className="absolute top-1/2 left-10 w-72 h-72 bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none" />
      <div className="absolute bottom-10 right-10 w-96 h-96 bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="max-w-4xl mx-auto px-6 relative z-10 text-center">
        
        <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
          #ClientVoice
        </span>
        
        <div className="relative mt-8">
          {/* Circular Quote Mark Container mimicking the reference image */}
          <div className="w-16 h-16 bg-brand-orange/10 border border-brand-orange/20 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-10 shadow-lg animate-pulse">
            <Quote className="w-6 h-6 fill-current" />
          </div>

          {/* Animating Testimonial Card */}
          <div ref={testimonialCardRef} className="text-center">
            <blockquote className="font-display font-medium text-lg md:text-2xl text-brand-dark leading-relaxed max-w-3xl mx-auto mb-10 text-pretty">
              "{current.quote}"
            </blockquote>

            {/* Author Profile Card */}
            <div className="flex flex-col items-center justify-center gap-4">
              <img
                src={current.avatar}
                alt={current.author}
                className="w-14 h-14 rounded-full object-cover border-2 border-brand-orange shadow-md"
                referrerPolicy="no-referrer"
              />
              <div className="text-center">
                <h4 className="font-display font-bold text-base text-brand-dark">{current.author}</h4>
                <p className="text-xs text-neutral-500 font-medium font-mono mt-0.5">
                  {current.role} &mdash; <span className="text-brand-orange font-semibold">{current.company}</span>
                </p>
              </div>
            </div>
          </div>

          {/* Slide Indicators & Navigation Controls */}
          <div className="flex items-center justify-center gap-6 mt-12">
            <button
              onClick={handlePrev}
              className="w-10 h-10 border border-neutral-200 hover:border-brand-orange text-neutral-400 hover:text-brand-orange rounded-full flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95"
              aria-label="Previous Testimonial"
            >
              <ArrowLeft className="w-4 h-4" />
            </button>

            {/* Indicator dots */}
            <div className="flex items-center gap-1.5">
              {TESTIMONIALS.map((_, idx) => (
                <button
                  key={idx}
                  onClick={() => {
                    if (idx !== currentIndex) {
                      gsap.to(testimonialCardRef.current, {
                        opacity: 0,
                        duration: 0.2,
                        onComplete: () => {
                          setCurrentIndex(idx);
                          gsap.fromTo(testimonialCardRef.current, { opacity: 0 }, { opacity: 1, duration: 0.3 });
                        },
                      });
                    }
                  }}
                  className={`h-2.5 rounded-full transition-all duration-300 ${
                    idx === currentIndex ? "w-6 bg-brand-orange" : "w-2 bg-neutral-200"
                  }`}
                  aria-label={`Go to slide ${idx + 1}`}
                />
              ))}
            </div>

            <button
              onClick={handleNext}
              className="w-10 h-10 border border-neutral-200 hover:border-brand-orange text-neutral-400 hover:text-brand-orange rounded-full flex items-center justify-center transition-all duration-300 hover:scale-105 active:scale-95"
              aria-label="Next Testimonial"
            >
              <ArrowRight className="w-4 h-4" />
            </button>
          </div>

        </div>

      </div>
    </div>
  );
}
