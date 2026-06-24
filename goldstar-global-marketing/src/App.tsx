import React, { useEffect } from "react";
import Navbar from "./components/Navbar";
import Hero from "./components/Hero";
import AboutSection from "./components/AboutSection";
import Capabilities from "./components/Capabilities";
import Projects from "./components/Projects";
import Stats from "./components/Stats";
import Testimonial from "./components/Testimonial";
import CallToAction from "./components/CallToAction";
import Footer from "./components/Footer";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function App() {
  useEffect(() => {
    // Elegant background-to-background transition triggers on scrolling
    // (e.g. body transitions gracefully to darker or lighter hues matching sections)
    ScrollTrigger.create({
      trigger: "#capabilities",
      start: "top 60%",
      end: "bottom 40%",
      onEnter: () => {
        gsap.to("body", { backgroundColor: "#0a0a0b", duration: 0.8, ease: "power2.out" });
      },
      onLeaveBack: () => {
        gsap.to("body", { backgroundColor: "#fbfbfd", duration: 0.8, ease: "power2.out" });
      },
      onLeave: () => {
        gsap.to("body", { backgroundColor: "#fbfbfd", duration: 0.8, ease: "power2.out" });
      },
      onEnterBack: () => {
        gsap.to("body", { backgroundColor: "#0a0a0b", duration: 0.8, ease: "power2.out" });
      },
    });

    // Animate section dividers for elegant visual spacing
    const dividers = document.querySelectorAll(".section-divider");
    dividers.forEach((divider) => {
      gsap.fromTo(
        divider,
        { scaleX: 0, opacity: 0 },
        {
          scaleX: 1,
          opacity: 0.15,
          duration: 1.5,
          ease: "power3.inOut",
          scrollTrigger: {
            trigger: divider,
            start: "top 90%",
            toggleActions: "play none none none",
          },
        }
      );
    });
  }, []);

  return (
    <div className="min-h-screen selection:bg-brand-orange selection:text-white overflow-hidden bg-brand-light">
      {/* Sticky Navbar */}
      <Navbar />

      {/* Main Sections */}
      <main>
        {/* Cinematic Curved Hero Banner */}
        <Hero />

        {/* Section Divider */}
        <div className="section-divider h-px bg-brand-dark max-w-7xl mx-auto opacity-0 origin-left" />

        {/* About Section - KPI Performance Simulator & Modal Presentation */}
        <AboutSection />

        {/* Capabilities - Sequential Service Cards Grid */}
        <Capabilities />

        {/* Transformative Projects Showcase */}
        <Projects />

        {/* Live Counters & Trust metrics */}
        <Stats />

        {/* Testimonials Review Slider */}
        <Testimonial />

        {/* Custom Callback Request Action Form */}
        <CallToAction />
      </main>

      {/* Complete Site Footer */}
      <Footer />
    </div>
  );
}
