import React, { useState, useRef, useEffect } from "react";
import { Send, ArrowRight, Shield, CheckCircle2, MessageSquare, PhoneCall } from "lucide-react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function CallToAction() {
  const [email, setEmail] = useState("");
  const [message, setMessage] = useState("");
  const [submitted, setSubmitted] = useState(false);
  const containerRef = useRef<HTMLDivElement>(null);
  const formRef = useRef<HTMLFormElement>(null);

  useEffect(() => {
    // Elegant entrance scale on scroll
    gsap.fromTo(
      containerRef.current,
      { scale: 0.96, opacity: 0, y: 40 },
      {
        scale: 1,
        opacity: 1,
        y: 0,
        duration: 1.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: containerRef.current,
          start: "top 85%",
          toggleActions: "play none none none",
        },
      }
    );
  }, []);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!email.trim()) return;

    // Trigger GSAP timeline for successful entry
    const tl = gsap.timeline();
    tl.to(formRef.current, {
      opacity: 0,
      y: -20,
      duration: 0.4,
      onComplete: () => {
        setSubmitted(true);
      },
    });
    
    // Smooth reveal of confirmation
    tl.fromTo(
      ".success-message",
      { scale: 0.9, opacity: 0 },
      { scale: 1, opacity: 1, duration: 0.5, ease: "back.out(1.5)" }
    );
  };

  return (
    <div id="contact" className="py-16 px-4 md:px-8 bg-brand-light">
      <div
        ref={containerRef}
        className="max-w-6xl mx-auto bg-gradient-to-br from-brand-dark via-[#1a1a1c] to-brand-darker rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden shadow-2xl border border-white/5 text-left"
      >
        {/* Background Mesh/Spotlights */}
        <div className="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.015)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.015)_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] pointer-events-none" />
        <div className="absolute -bottom-20 -right-20 w-96 h-96 bg-brand-orange/15 rounded-full blur-[100px] pointer-events-none" />
        <div className="absolute -top-20 -left-20 w-80 h-80 bg-brand-gold/10 rounded-full blur-[80px] pointer-events-none" />

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
          
          {/* Left Column: Heading and assurances */}
          <div className="lg:col-span-7">
            <span className="text-xs font-mono font-semibold text-brand-orange tracking-[0.25em] uppercase mb-4 block">
              #StrategicDominance
            </span>
            <h2 className="font-display font-bold text-3xl md:text-5xl text-white tracking-tight leading-tight mb-6 text-balance">
              Let's Elevate Your Brand Strategy Today
            </h2>
            <p className="text-neutral-400 text-sm md:text-base leading-relaxed mb-8 max-w-xl">
              Partner with Goldstar Global Marketing Company and unlock reliable marketing systems built to scale. Secure your private consultation, national event inquiry, or custom brand audit.
            </p>

            {/* Quick trust metrics */}
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-5 h-5 text-brand-gold" />
                <span className="text-xs text-neutral-300 font-mono font-medium">Bespoke Enterprise Consultations</span>
              </div>
              <div className="flex items-center gap-2.5">
                <Shield className="w-5 h-5 text-brand-orange" />
                <span className="text-xs text-neutral-300 font-mono font-medium">Strict Non-Disclosure Guarantee</span>
              </div>
            </div>
          </div>

          {/* Right Column: Interaction form mimicking the reference image style */}
          <div className="lg:col-span-5">
            <div className="bg-white/5 border border-white/10 rounded-3xl p-6 md:p-8 backdrop-blur-md shadow-xl relative">
              
              {!submitted ? (
                <form ref={formRef} onSubmit={handleSubmit} className="space-y-4">
                  <div className="text-left mb-4">
                    <h3 className="font-display font-semibold text-lg text-white">Let's Connect</h3>
                    <p className="text-xs text-neutral-400">Request your complimentary portfolio review.</p>
                  </div>

                  <div>
                    <label htmlFor="email" className="block text-[10px] font-mono text-neutral-400 uppercase tracking-widest mb-1.5">
                      Business Email Address
                    </label>
                    <input
                      id="email"
                      type="email"
                      required
                      placeholder="e.g. partner@firm.com"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                      className="w-full bg-brand-dark border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-brand-orange transition-colors"
                    />
                  </div>

                  <div>
                    <label htmlFor="message" className="block text-[10px] font-mono text-neutral-400 uppercase tracking-widest mb-1.5">
                      Consultation Focus (Optional)
                    </label>
                    <textarea
                      id="message"
                      rows={2}
                      placeholder="e.g., Campaign PR or Launch Event production"
                      value={message}
                      onChange={(e) => setMessage(e.target.value)}
                      className="w-full bg-brand-dark border border-white/10 rounded-xl px-4 py-3 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-brand-orange transition-colors resize-none"
                    />
                  </div>

                  {/* Submit Button with Hover effect */}
                  <button
                    type="submit"
                    className="w-full group flex items-center justify-center gap-2 bg-gradient-to-r from-brand-orange to-brand-gold text-white text-xs font-bold tracking-wider py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-[0_4px_20px_rgba(244,124,32,0.4)]"
                  >
                    <span>Request Callback</span>
                    <Send className="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" />
                  </button>
                </form>
              ) : (
                <div className="success-message text-center py-8">
                  <div className="w-14 h-14 bg-brand-orange/20 border border-brand-orange/40 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-bounce">
                    <CheckCircle2 className="w-7 h-7" />
                  </div>
                  <h3 className="font-display font-bold text-xl text-white mb-2">Request Received</h3>
                  <p className="text-xs text-neutral-300 leading-relaxed max-w-xs mx-auto">
                    An executive brand coordinator will reach out to <span className="text-brand-orange font-semibold">{email}</span> within 2 business hours.
                  </p>
                  
                  <div className="mt-6 pt-6 border-t border-white/5 flex justify-center gap-4">
                    <button
                      onClick={() => setSubmitted(false)}
                      className="text-[10px] font-mono text-neutral-400 hover:text-white transition-colors"
                    >
                      Send another request
                    </button>
                  </div>
                </div>
              )}

            </div>
          </div>

        </div>
      </div>
    </div>
  );
}
