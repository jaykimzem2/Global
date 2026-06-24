import { Service, Project, StatItem, Testimonial } from "./types";

export const SERVICES: Service[] = [
  {
    id: "strategic-marketing",
    tag: "#StrategicMarketing",
    title: "Strategic Marketing & Brand Development",
    description: "We orchestrate end-to-end brand transformations. From initial positioning and market intelligence to visual identity design and hyper-targeted execution, we ensure your message cuts through the noise.",
    details: [
      "Market Intelligence & Competitor Landscaping",
      "Comprehensive Brand Architecture & Visual System Design",
      "Dynamic Digital Marketing & Multi-channel Campaigns",
      "Integrated Public Relations & Media Engagement Strategy",
      "Corporate Communication & Stakeholder Alignment"
    ]
  },
  {
    id: "event-services",
    tag: "#EventProduction",
    title: "Experiential Event Services & Production",
    description: "We turn gatherings into fully immersive stories. Whether orchestrating prestigious government events, high-impact product launches, global corporate conferences, or experiential brand activations, our production standard is absolute.",
    details: [
      "End-to-End Event Planning & Logistical Masterminding",
      "High-Profile Government Events & Protocol Management",
      "State-of-the-Art Stage Production & Audio-Visual Systems",
      "Product Launches & Immersive Pop-Ups",
      "High-Capacity Corporate Conferences & VIP Hosting"
    ]
  },
  {
    id: "campaign-management",
    tag: "#CampaignExecution",
    title: "Campaign Management & Digital Analytics",
    description: "We run highly persuasive, data-driven marketing campaigns. By pairing creative advertising with cutting-edge analytics and PR engineering, we track, measure, and scale your brand's growth in real time.",
    details: [
      "Targeted Media Buying & Audience Segmentation",
      "Social Engineering & Performance Digital Ads",
      "Crisis PR & Proactive Corporate Communication",
      "Comprehensive Campaign Analytics & Attribution Models",
      "Lead Generation & High-Intent Conversion Optimizations"
    ]
  }
];

export const PROJECTS: Project[] = [
  {
    id: "proj-1",
    category: "Corporate Events",
    title: "NextGen Tech Summit",
    stats: "1,200+ Delegates | 45 Global Speakers",
    image: "https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=85"
  },
  {
    id: "proj-2",
    category: "Product Launches",
    title: "Aether EV Reveal Arena",
    stats: "3.2M Livestream Views | 150+ Tech Media",
    image: "https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=800&q=85"
  },
  {
    id: "proj-3",
    category: "Experiential Marketing",
    title: "Chroma Immersive Pavilions",
    stats: "45k+ Foot Traffic | +110% Brand Recall",
    image: "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=85"
  },
  {
    id: "proj-4",
    category: "Government Summits",
    title: "African Trade Alliance Expo",
    stats: "15 Head of State Delegations | Live Broadcast",
    image: "https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=85"
  }
];

export const STATS: StatItem[] = [
  {
    value: 12,
    suffix: "M+",
    label: "Campaign Leads Generated"
  },
  {
    value: 180,
    suffix: "+",
    label: "High-Profile Events Produced"
  },
  {
    value: 98,
    suffix: "%",
    label: "Client Retention & Trust"
  },
  {
    value: 15,
    suffix: "X",
    label: "Average Campaign ROI Scale"
  }
];

export const TESTIMONIALS: Testimonial[] = [
  {
    quote: "Goldstar Global's execution is pure art. They transformed our annual pan-African conference into a world-class experiential masterclass. Their team's attention to detail, protocol precision for government dignitaries, and high-fidelity stage production set a new standard.",
    author: "Dr. Amara Okoye",
    role: "Director of Communications",
    company: "African Trade Alliance",
    avatar: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80"
  },
  {
    quote: "Our product launch required absolute confidentiality, media poise, and high-impact digital campaign backing. Goldstar delivered exactly that—securing prime media coverage and orchestrating a flawless reveal that generated over 15,000 qualified pre-orders.",
    author: "George Kamau",
    role: "Head of Brand Strategy",
    company: "Aether EV Systems",
    avatar: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
  }
];
