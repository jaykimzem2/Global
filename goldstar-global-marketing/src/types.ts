export interface Service {
  id: string;
  tag: string;
  title: string;
  description: string;
  details: string[];
}

export interface Project {
  id: string;
  category: string;
  title: string;
  stats: string;
  image: string;
}

export interface StatItem {
  value: number;
  suffix: string;
  label: string;
}

export interface Testimonial {
  quote: string;
  author: string;
  role: string;
  company: string;
  avatar: string;
}
