import React from "react";
import { ArrowUp, Award, Twitter, Instagram, Linkedin, Globe } from "lucide-react";

export default function Footer() {
  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };

  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-[#0a0a0b] text-neutral-400 py-16 border-t border-white/5 text-left relative overflow-hidden">
      {/* Subtle bottom spotlight */}
      <div className="absolute bottom-0 right-1/4 w-[300px] h-[300px] bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none" />

      <div className="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
        
        {/* Main Footer Block */}
        <div className="grid grid-cols-1 md:grid-cols-12 gap-12 pb-12 border-b border-white/5">
          
          {/* Brand/Slogan Column */}
          <div className="md:col-span-5 flex flex-col justify-between">
            <div>
              <div className="flex items-center gap-2 mb-4">
                <div className="w-8 h-8 bg-brand-orange rounded-xl flex items-center justify-center shadow-md">
                  <Award className="w-4 h-4 text-white" />
                </div>
                <span className="font-display font-bold text-lg tracking-tight text-white">
                  GOLDSTAR<span className="text-brand-orange font-light">GLOBAL</span>
                </span>
              </div>
              <p className="text-xs md:text-sm text-neutral-500 leading-relaxed max-w-sm">
                A premium, full-service agency orchestrating end-to-end strategic marketing campaigns and high-fidelity event productions for national governments and global enterprises.
              </p>
            </div>
            
            {/* Social Icons row */}
            <div className="flex items-center gap-4 mt-8 md:mt-0">
              {[
                { icon: Twitter, href: "#twitter" },
                { icon: Instagram, href: "#instagram" },
                { icon: Linkedin, href: "#linkedin" },
              ].map((item, idx) => (
                <a
                  key={idx}
                  href={item.href}
                  className="w-8 h-8 rounded-full bg-white/5 hover:bg-brand-orange text-neutral-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:scale-110"
                >
                  <item.icon className="w-4 h-4" />
                </a>
              ))}
            </div>
          </div>

          {/* Quick Links Column */}
          <div className="md:col-span-3">
            <h4 className="text-white text-xs font-mono font-bold uppercase tracking-widest mb-6">Capabilities</h4>
            <ul className="space-y-3.5 text-xs">
              <li><a href="#capabilities" className="hover:text-brand-orange transition-colors">Strategic Marketing</a></li>
              <li><a href="#capabilities" className="hover:text-brand-orange transition-colors">Brand Development</a></li>
              <li><a href="#capabilities" className="hover:text-brand-orange transition-colors">Digital Campaigns</a></li>
              <li><a href="#capabilities" className="hover:text-brand-orange transition-colors">Public Relations</a></li>
              <li><a href="#capabilities" className="hover:text-brand-orange transition-colors">Corporate Event Production</a></li>
            </ul>
          </div>

          {/* Core Info / Office Location */}
          <div className="md:col-span-4">
            <h4 className="text-white text-xs font-mono font-bold uppercase tracking-widest mb-6">Contact & Location</h4>
            <div className="space-y-4 text-xs">
              <p className="leading-relaxed text-neutral-500">
                Goldstar Global Marketing HQ<br />
                Kilimani Executive Suites, 4th Floor<br />
                Nairobi, Kenya
              </p>
              <p className="text-neutral-500">
                Inquiries: <a href="mailto:partner@goldstarglobal.co.ke" className="text-neutral-300 hover:text-brand-orange">partner@goldstarglobal.co.ke</a><br />
                Tel: <a href="tel:+254700000000" className="text-neutral-300 hover:text-brand-orange">+254 (0) 700 000 000</a>
              </p>
            </div>
          </div>

        </div>

        {/* Bottom copyright & policies row resembling the footer of the reference image */}
        <div className="pt-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-[10px] md:text-xs text-neutral-500">
          <div>
            <p>© {currentYear} Goldstar Global Marketing Company. All Rights Reserved.</p>
            <p className="mt-1 text-[10px] text-neutral-600">Repurposing content inspired by globallinkmarketing.co.ke</p>
          </div>

          <div className="flex items-center gap-6">
            <a href="#cookies" className="hover:text-white transition-colors">Cookies Policy</a>
            <a href="#privacy" className="hover:text-white transition-colors">Privacy Statement</a>
            <a href="#terms" className="hover:text-white transition-colors">Terms of Association</a>
            
            {/* Scroll back up action button */}
            <button
              onClick={scrollToTop}
              className="w-8 h-8 rounded-full bg-white/5 hover:bg-brand-orange text-neutral-400 hover:text-white flex items-center justify-center transition-all duration-300 hover:-translate-y-1 shadow-md"
              aria-label="Back to Top"
            >
              <ArrowUp className="w-4 h-4" />
            </button>
          </div>
        </div>

      </div>
    </footer>
  );
}
