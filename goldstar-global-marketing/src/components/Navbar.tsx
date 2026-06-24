import React, { useState, useEffect, useRef } from "react";
import { Menu, X, ArrowUpRight, Shield, Award } from "lucide-react";
import gsap from "gsap";

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);
  const mobileMenuRef = useRef<HTMLDivElement>(null);
  const linksRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const handleScroll = () => {
      if (window.scrollY > 20) {
        setIsScrolled(true);
      } else {
        setIsScrolled(false);
      }
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  useEffect(() => {
    if (isOpen) {
      document.body.style.overflow = "hidden";
      // GSAP Animation for mobile overlay
      gsap.fromTo(
        mobileMenuRef.current,
        { clipPath: "circle(0% at 90% 10%)", opacity: 0 },
        {
          clipPath: "circle(150% at 90% 10%)",
          opacity: 1,
          duration: 0.8,
          ease: "power3.out",
        }
      );

      // Staggered reveal of mobile menu items
      if (linksRef.current) {
        gsap.fromTo(
          linksRef.current.children,
          { y: 30, opacity: 0 },
          {
            y: 0,
            opacity: 1,
            duration: 0.5,
            stagger: 0.1,
            ease: "back.out(1.7)",
            delay: 0.3,
          }
        );
      }
    } else {
      document.body.style.overflow = "";
    }
  }, [isOpen]);

  const toggleMenu = () => {
    if (isOpen) {
      // Exit animation
      gsap.to(mobileMenuRef.current, {
        clipPath: "circle(0% at 90% 10%)",
        opacity: 0,
        duration: 0.6,
        ease: "power3.in",
        onComplete: () => setIsOpen(false),
      });
    } else {
      setIsOpen(true);
    }
  };

  const scrollToSection = (id: string) => {
    setIsOpen(false);
    const element = document.getElementById(id);
    if (element) {
      const offset = 80;
      const bodyRect = document.body.getBoundingClientRect().top;
      const elementRect = element.getBoundingClientRect().top;
      const elementPosition = elementRect - bodyRect;
      const offsetPosition = elementPosition - offset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  };

  return (
    <>
      <nav
        id="navbar"
        className={`fixed top-0 left-0 w-full z-50 transition-all duration-500 ${
          isScrolled
            ? "py-3 bg-[#0a0a0b]/80 backdrop-blur-xl border-b border-white/5 shadow-lg"
            : "py-6 bg-transparent"
        }`}
      >
        <div className="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between">
          {/* Logo */}
          <div
            className="flex items-center gap-2 cursor-pointer group"
            onClick={() => window.scrollTo({ top: 0, behavior: "smooth" })}
          >
            <div className="relative w-9 h-9 bg-brand-orange rounded-xl flex items-center justify-center overflow-hidden shadow-[0_0_20px_rgba(244,124,32,0.4)] transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
              <Award className="w-5 h-5 text-white animate-pulse" />
              <div className="absolute inset-0 bg-gradient-to-tr from-brand-gold/30 to-transparent pointer-events-none" />
            </div>
            <span className="font-display font-bold text-xl tracking-tight text-white transition-all duration-300">
              GOLDSTAR<span className="text-brand-orange font-light">GLOBAL</span>
            </span>
          </div>

          {/* Desktop Menu - Replicating image style */}
          <div className="hidden md:flex items-center gap-1.5 bg-white/5 border border-white/10 px-2 py-1.5 rounded-full backdrop-blur-md">
            {[
              { label: "About", id: "about" },
              { label: "Our Capabilities", id: "capabilities" },
              { label: "Experiential Worlds", id: "projects" },
              { label: "Trust Metrics", id: "stats" },
              { label: "Client Voice", id: "testimonials" },
            ].map((item) => (
              <button
                key={item.id}
                onClick={() => scrollToSection(item.id)}
                className="px-4 py-1.5 text-xs text-neutral-300 font-medium tracking-wide rounded-full transition-all duration-300 hover:text-white hover:bg-white/5"
              >
                {item.label}
              </button>
            ))}
          </div>

          {/* CTA Button */}
          <div className="hidden md:flex items-center">
            <button
              onClick={() => scrollToSection("contact")}
              className="group flex items-center gap-1.5 bg-brand-orange hover:bg-brand-orange/90 text-white text-xs font-semibold px-5 py-2.5 rounded-full tracking-wider transition-all duration-300 shadow-[0_4px_20px_rgba(244,124,32,0.3)] hover:shadow-[0_4px_25px_rgba(244,124,32,0.5)] hover:-translate-y-0.5"
            >
              Let's Connect
              <ArrowUpRight className="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
            </button>
          </div>

          {/* Mobile Menu Trigger */}
          <button
            onClick={toggleMenu}
            className="md:hidden text-white hover:text-brand-orange p-1 transition-colors duration-300 focus:outline-none"
            aria-label="Toggle Menu"
          >
            {isOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>
      </nav>

      {/* Full-screen Mobile Overlay */}
      {isOpen && (
        <div
          ref={mobileMenuRef}
          className="fixed inset-0 bg-[#0a0a0b] z-40 md:hidden flex flex-col justify-center px-8"
          style={{ clipPath: "circle(0% at 90% 10%)" }}
        >
          {/* Subtle glowing orbs in mobile menu background */}
          <div className="absolute top-1/4 left-1/4 w-80 h-80 bg-brand-orange/10 rounded-full blur-[100px] pointer-events-none" />
          <div className="absolute bottom-1/4 right-1/4 w-80 h-80 bg-brand-gold/10 rounded-full blur-[100px] pointer-events-none" />

          <div ref={linksRef} className="flex flex-col gap-6 text-left relative z-10">
            <div className="text-xs font-mono tracking-[0.2em] text-brand-orange uppercase mb-2">
              Navigation Menu
            </div>
            {[
              { label: "About Agency", id: "about" },
              { label: "Our Capabilities", id: "capabilities" },
              { label: "Experiential Worlds", id: "projects" },
              { label: "Trust Metrics", id: "stats" },
              { label: "Client Voice", id: "testimonials" },
              { label: "Contact Us", id: "contact" },
            ].map((item, idx) => (
              <button
                key={item.id}
                onClick={() => scrollToSection(item.id)}
                className="text-3xl font-display font-bold text-white text-left hover:text-brand-orange transition-all duration-300 focus:outline-none flex items-center justify-between group border-b border-white/5 pb-2"
              >
                <span>{item.label}</span>
                <span className="text-xs font-mono text-neutral-500 group-hover:text-brand-orange transition-colors">
                  0{idx + 1}
                </span>
              </button>
            ))}

            <div className="mt-8 pt-8 border-t border-white/10 flex flex-col gap-4">
              <span className="text-xs text-neutral-500 font-mono">
                GOLDSTAR GLOBAL MARKETING © 2026
              </span>
              <div className="flex gap-4">
                <a href="#twitter" className="text-xs text-neutral-400 hover:text-brand-orange transition-colors">
                  Twitter
                </a>
                <a href="#instagram" className="text-xs text-neutral-400 hover:text-brand-orange transition-colors">
                  Instagram
                </a>
                <a href="#linkedin" className="text-xs text-neutral-400 hover:text-brand-orange transition-colors">
                  LinkedIn
                </a>
              </div>
            </div>
          </div>
        </div>
      )}
    </>
  );
}
